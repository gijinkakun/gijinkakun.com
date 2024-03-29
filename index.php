<?php 
include('templates/header.php');
require('public/github-projects-fetcher.php');
?>

<main id="main" class="main">
    <div class="main__inner">
        <section id="intro" class="section section--intro">
            <div class="section__inner">
                <div class="section__content">
                    <h1><span class="tagline">Christopher Satterthwaite</span> Developer / Animator.</h1>
                    <p>I am <strong>Christopher Satterthwaite</strong>, a dedicated developer and animator rooted in Kelowna, BC. Over the years, I've had the privilege of immersing myself in the world of JavaScript, React, PHP, and several other programming languages. My journey in software development has been characterized by a commitment to continual improvement and a genuine desire to craft solutions that resonate in the digital sphere.</p>
                </div>
            </div>
            <div class="arrow-divider" role="presentation">
                <svg class="arrow-divider__arrow" xmlns="http://www.w3.org/2000/svg" width="115.37" height="24.67" viewBox="0 0 115.37 24.67"><defs></defs><path class="st0" fill="none" stroke="currentColor" stroke-width="2" d="M0.7,12.8c56.5-4.5,66.4,1.4,112.9-1.3 M99.9,1.2c4.4,3.5,4,2.8,13.7,10.3c-5.9,3.7-10,6.2-15.4,10.7"/></svg>
            </div>
        </section>
        <section id="about" class="section section--about">
            <div class="section__inner">
                <div class="section__content">
                    <h2>About Christopher Satterthwaite.</h2>
                    <p>My journey in the digital realm began with a humble passion for animation, which sparked my interest and led me to pursue studies in the field to be come an animator. Following my academic pursuits, I ventured into teaching Animation ,Game Design, and Web Development, where I found immense fulfillment in sharing my knowledge and expertise with aspiring animator and developer talents at the Center for Arts and Technology.</p>
                    <p>In the early 2000s, I started my development career at a small web company, where I diligently honed my craft and navigated the ever-evolving landscape of web technologies. This experience laid the foundation for my growth and shaped my approach to the digital world.</p>
                    <p>Today, I find myself thriving in the dynamic environment of a Marketing/Development Firm, where I am grateful for the opportunity to continue learning, innovating, and pushing boundaries in the digital space. It's a journey marked by continuous growth and learning, with each day presenting new challenges and opportunities for exploration.</p>
                    <p>Beyond the confines of my professional life, I cherish the simple joys and diverse interests that enrich my days. I am an avid reader, finding solace and inspiration in the immersive worlds of fiction. Additionally, I take great pleasure in collecting comics and antiques, each item holding its own unique story and adding character to my life.</p>
                    <p>In my leisure time, I find joy in the simplicity of camping, the creativity of cooking, and the thrill of gaming. These activities offer moments of relaxation and rejuvenation, allowing me to unwind and reconnect with the essence of life.</p>
                    <p>At home, I am blessed with the companionship of two feline friends, Kit and Kat, whose playful antics and comforting presence bring warmth to my heart. In the beauty of nature and the simplicity of life's pleasures, I find solace and inspiration, reminding me to appreciate the wonders of the world around me.</p>
                </div>
            </div>
            <div class="arrow-divider" role="presentation">
                <svg class="arrow-divider__arrow" xmlns="http://www.w3.org/2000/svg" width="115.37" height="24.67" viewBox="0 0 115.37 24.67"><defs></defs><path class="st0" fill="none" stroke="currentColor" stroke-width="2" d="M0.7,12.8c56.5-4.5,66.4,1.4,112.9-1.3 M99.9,1.2c4.4,3.5,4,2.8,13.7,10.3c-5.9,3.7-10,6.2-15.4,10.7"/></svg>
            </div>
        </section>
        <section id="projects" class="section section--projects">
            <div class="section__inner">
                <div class="section__content">
                    <h2>My Projects.</h2>
                    <p>Check out my latest projects on GitHub to see what I've been working on lately. From coding experiments to collaborative endeavors</p>
                    <?php
                    $fetcher = new GitHubProjectsFetcher();
                    $projects = $fetcher->fetchGitHubProjects('gijinkakun');

                    if ($projects !== false) {
                        foreach ($projects as $index => $project) {
                            // Determine the class based on whether the index is odd or even
                            $class = $index % 2 == 0 ? "project--rotate-right" : "project--rotate-left";

                            echo '<article class="project ' . $class . '">';
                            echo '<h3 class="project__title">' . $project["title"] . '</h3>';
                            echo '<time class="project__time"><strong>Published:</strong> ' . $project["date_published"] . '</time>';
                            echo '<p class="project__description">' . $project['description'] .'</p>';
                            echo '<a class="project__link" href="' . $project['link'] . '">View ' . $project['title'] . ' Project <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M13.293 7.293a.999.999 0 0 0 0 1.414L15.586 11H8a1 1 0 0 0 0 2h7.586l-2.293 2.293a.999.999 0 1 0 1.414 1.414L19.414 12l-4.707-4.707a.999.999 0 0 0-1.414 0"/></svg></a>';
                            echo '</article>';
                        }
                    } else {
                        echo "No projects found";
                    }
                    ?>
                </div>
            </div>
            <div class="arrow-divider" role="presentation">
                <svg class="arrow-divider__arrow" xmlns="http://www.w3.org/2000/svg" width="115.37" height="24.67" viewBox="0 0 115.37 24.67"><defs></defs><path class="st0" fill="none" stroke="currentColor" stroke-width="2" d="M0.7,12.8c56.5-4.5,66.4,1.4,112.9-1.3 M99.9,1.2c4.4,3.5,4,2.8,13.7,10.3c-5.9,3.7-10,6.2-15.4,10.7"/></svg>
            </div>
        </section>
        <section id="contact" class="section section--contact">
            <div class="section__inner">
                <div class="section__content">
                    <h2>Connect.</h2>
                    <p>Follow me on GitHub, CodePen, LinkedIn, and Twitter for my latest projects, insights, and industry updates. </p>
                    <div class="social-media">
                        <ul class="social-media__list">
                            <li class="social-media__item">
                                <a class="social-media__link" href="https://github.com/gijinkakun" rel="nofollow noopener" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="0.94em" height="1em" viewBox="0 0 480 512"><path fill="currentColor" d="M186.1 328.7c0 20.9-10.9 55.1-36.7 55.1s-36.7-34.2-36.7-55.1s10.9-55.1 36.7-55.1s36.7 34.2 36.7 55.1M480 278.2c0 31.9-3.2 65.7-17.5 95c-37.9 76.6-142.1 74.8-216.7 74.8c-75.8 0-186.2 2.7-225.6-74.8c-14.6-29-20.2-63.1-20.2-95c0-41.9 13.9-81.5 41.5-113.6c-5.2-15.8-7.7-32.4-7.7-48.8c0-21.5 4.9-32.3 14.6-51.8c45.3 0 74.3 9 108.8 36c29-6.9 58.8-10 88.7-10c27 0 54.2 2.9 80.4 9.2c34-26.7 63-35.2 107.8-35.2c9.8 19.5 14.6 30.3 14.6 51.8c0 16.4-2.6 32.7-7.7 48.2c27.5 32.4 39 72.3 39 114.2m-64.3 50.5c0-43.9-26.7-82.6-73.5-82.6c-18.9 0-37 3.4-56 6c-14.9 2.3-29.8 3.2-45.1 3.2c-15.2 0-30.1-.9-45.1-3.2c-18.7-2.6-37-6-56-6c-46.8 0-73.5 38.7-73.5 82.6c0 87.8 80.4 101.3 150.4 101.3h48.2c70.3 0 150.6-13.4 150.6-101.3m-82.6-55.1c-25.8 0-36.7 34.2-36.7 55.1s10.9 55.1 36.7 55.1s36.7-34.2 36.7-55.1s-10.9-55.1-36.7-55.1" /></svg> <span class="sr-only">See My Work On Github</span></a>
                            </li>
                            <li class="social-media__item">
                                <a class="social-media__link" href="https://codepen.io/gijinkakun" rel="nofollow noopener" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M22 15.047a.846.846 0 0 1-.008.112l-.006.037l-.016.072c-.003.015-.008.028-.013.042l-.022.063l-.02.042c-.008.02-.018.038-.028.057l-.025.04a.769.769 0 0 1-.108.135l-.035.034a.812.812 0 0 1-.049.04l-.038.03c-.005.003-.01.008-.015.01l-9.14 6.095a.858.858 0 0 1-.954 0l-9.14-6.094l-.014-.01a.807.807 0 0 1-.088-.071c-.012-.01-.023-.022-.034-.034c-.015-.015-.03-.03-.043-.046a.707.707 0 0 1-.066-.09a1.038 1.038 0 0 1-.054-.096l-.019-.042a.868.868 0 0 1-.022-.063c-.005-.014-.01-.027-.013-.042c-.007-.023-.01-.048-.015-.072l-.007-.037A.847.847 0 0 1 2 15.047V8.953c0-.038.003-.075.008-.112l.007-.037c.004-.024.008-.049.015-.072a.774.774 0 0 1 .145-.295a.978.978 0 0 1 .029-.038l.043-.046l.034-.034a.834.834 0 0 1 .088-.07c.005-.003.009-.008.014-.01l9.14-6.095a.86.86 0 0 1 .954 0l9.14 6.094c.005.003.01.008.015.01l.038.03a.839.839 0 0 1 .05.041l.034.034a.735.735 0 0 1 .108.136l.025.04l.029.056l.019.042l.022.063c.005.014.01.027.013.042c.007.023.011.048.016.072l.006.037a.834.834 0 0 1 .008.112zM3.719 10.562v2.876L5.869 12zm7.422-2.088V4.465l-6.734 4.49l3.008 2.011zm8.452.48L12.86 4.465v4.009l3.726 2.492zM4.407 15.046l6.734 4.489v-4.009l-3.726-2.492zm8.453.48v4.009l6.733-4.49l-3.007-2.01zM12 9.966L8.96 12L12 14.033L15.04 12zm8.281 3.472v-2.876L18.131 12z"/></svg> <span class="sr-only">See My Work On Codepen</span></a>
                            </li>
                            <li class="social-media__item">
                                <a class="social-media__link" href="https://www.linkedin.com/in/gijinkakun" rel="nofollow noopener" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M6.94 5a2 2 0 1 1-4-.002a2 2 0 0 1 4 .002M7 8.48H3V21h4zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91z"/></svg> <span class="sr-only">Learn More About Me On LinkedIn</span></a>
                            </li>
                            <li class="social-media__item">
                                <a class="social-media__link" href="https://twitter.com/gijinkakun" rel="nofollow noopener" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16"><path fill="currentColor" d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518a3.3 3.3 0 0 0 1.447-1.817a6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429a3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218a3.2 3.2 0 0 1-.865.115a3 3 0 0 1-.614-.057a3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/></svg> <span class="sr-only">View My Tweets!</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php include('templates/footer.php');?>