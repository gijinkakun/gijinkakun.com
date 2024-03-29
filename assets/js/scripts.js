/**
 * Function that activates the service worker
 * that caches files for use as a PWA.
 * @author   Christopher Satterthwaite
 * @version 0.0.1
 */
window.onload = () => {
    "use strict";

    if ("serviceWorker" in navigator) {
        navigator.serviceWorker.register("serviceworker.js");
    }
};

gsap.registerPlugin(ScrollTrigger);
gsap.to('progress', {
    scrollTrigger: { 
        scrub: 0.3 
    },
    value: 100,
    ease: 'none',
});

gsap.to(".logo", {
    scrollTrigger: {
        trigger: "body",
        start: "top top",
        end: "+=400",
        scrub: true
    },
    width: "400px",
    height: "400px",
    top: "50%",
    left: "50%",
    transform: "translate(-50%, -50%)",
    opacity:"0.1",
});