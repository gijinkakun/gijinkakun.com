let siteUrl = "https://www.gijinkakun.com";
const siteIndex = siteUrl + "/index.php";
const siteCSS = siteUrl + "/assets/css/styles.css";
const siteJavaScript = siteUrl + "/assets/js/scripts.js";
const siteFontsMain =
	"https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Inter:wght@300;400;500;600;700&display=swap";

let cacheName = "gijinkakun";
let filesToCache = [siteUrl, siteIndex, siteCSS, siteJavaScript, siteFontsMain];

/* Start the service worker and cache all of the app's content */
self.addEventListener("install", (e) => {
	e.waitUntil(
		caches.open(cacheName).then(function (cache) {
			return cache.addAll(filesToCache);
		})
	);
});

/* Serve cached content when offline */
self.addEventListener("fetch", (e) => {
	e.respondWith(
		caches.match(e.request).then((response) => {
			return response || fetch(e.request);
		})
	);
});
