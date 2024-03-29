<?php 
class GitHubProjectsFetcher {
    private $userAgent;
    private $acceptHeader;

    public function __construct() {
        // Set a default user agent and accept header, but these could be made configurable
        $this->userAgent = 'Mozilla/5.0';
        $this->acceptHeader = 'Accept: application/json';
    }

    public function fetchGitHubProjects($username) {
        // GitHub username
        $username = urlencode($username);

        // GitHub API URL
        $url = "https://api.github.com/users/{$username}/repos";

        // Initialize cURL session
        $ch = curl_init();

        // Set cURL options
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, $this->userAgent);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array($this->acceptHeader));

        // Execute cURL session
        $response = curl_exec($ch);

        // Close cURL session
        curl_close($ch);

        // Decode JSON response
        $projects = json_decode($response, true);

        // Check if response is not empty
        if (!empty($projects)) {
            $projectList = array();
            foreach ($projects as $project) {
                // Check if any required field is missing
                if (!isset($project['name']) || !isset($project['created_at']) || !isset($project['html_url'])) {
                    continue; // Skip this project if any required field is missing
                }

                $title = $project['name'];
                $description = $project['description']; // Fetch description
                $datePublished = date('Y-m-d', strtotime($project['created_at']));
                $link = $project['html_url'];

                $projectList[] = array(
                    'title' => $title,
                    'description' => $description,
                    'date_published' => $datePublished,
                    'link' => $link
                );
            }
            return $projectList;
        } else {
            return false;
        }
    }
}