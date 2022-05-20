import LocomotiveScroll from 'locomotive-scroll';

import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

const locoScroll = new LocomotiveScroll({
    el: document.querySelector('body'),
    smooth: true,
    lerp: .1,
    multiplier: 1.125,
    firefoxMultiplier: 50,
});

function locoInit() {
    gsap.registerPlugin(ScrollTrigger);

    locoScroll.on("scroll", ScrollTrigger.update);
    // tell ScrollTrigger to use these proxy methods for the ".smooth-locomotive-scroll" element since Locomotive Scroll is hijacking things
    ScrollTrigger.scrollerProxy("body", {
        scrollTop(value) {
            return arguments.length ? locoScroll.scrollTo(value, 0, 0) : locoScroll.scroll.instance.scroll.y;
        }, // we don't have to define a scrollLeft because we're only scrolling vertically.
        getBoundingClientRect() {
            return { top: 0, left: 0, width: window.innerWidth, height: window.innerHeight };
        },
        // LocomotiveScroll handles things completely differently on mobile devices - it doesn't even transform the container at all! So to get the correct behavior and avoid jitters, we should pin things with position: fixed on mobile. We sense it by checking to see if there's a transform applied to the container (the LocomotiveScroll-controlled element).
        pinType: document.querySelector("body").style.transform ? "transform" : "fixed"
    });

    //!auto animations
    function animateFrom(elem, direction) {
        direction = direction || 1;
        var x = 0,
            y = direction * 100;
        if (elem.classList.contains("gs_fromLeft")) {
            x = -100;
            y = 0;
        } else if (elem.classList.contains("gs_fromRight")) {
            x = 100;
            y = 0;
        } else if (elem.classList.contains("gs_fromBottom")) {
            y = 50;
            x = 0;
        } else if (elem.classList.contains("gs_fromTop")) {
            y = -50;
            x = 0;
        } else if (elem.classList.contains("gs_fromFadeIn")) {
            y = 0;
            x = 0;
        }
        elem.style.transform = "translate(" + x + "px, " + y + "px)";
        elem.style.opacity = "0";

        gsap.fromTo(elem, { x: x, y: y, autoAlpha: 0 }, {
            autoAlpha: 1,
            duration: 1,
            ease: "expo",
            y: 0,
            x: 0,
        });
    }

    function hide(elem) {
        gsap.set(elem, { autoAlpha: 0 });
    }

    // //!On doc load hide .gs elements and create scroll trigger
    document.addEventListener("DOMContentLoaded", function () {
        gsap.registerPlugin(ScrollTrigger);

        gsap.utils.toArray(".gs").forEach(function (elem) {
            hide(elem); // assure that the element is hidden when scrolled into view

            ScrollTrigger.create({
                trigger: elem,
                start: startTrigger(),
                end: "top top",
                once: true,
                scroller: ".smooth-locomotive-scroll",
                // markers: true,
                onEnter: function () { animateFrom(elem) },
                // onEnterBack: function () { animateFrom(elem) },
                // onLeave: function () { hide(elem) } // assure that the element is hidden when scrolled into view
            });
        });
    });

    function startTrigger() {
        const h = document.documentElement.clientHeight
        const h2 = window.innerHeight
        let start = ""
        if (h == 0) {
            let startTriggerNumber = h2 * 0.85;
            start = "top " + startTriggerNumber
        } else {
            let startTriggerNumber = h * 0.85;
            start = "top " + startTriggerNumber
        }

        return start;
    }

    // each time the window updates, we should refresh ScrollTrigger and then update LocomotiveScroll. 
    ScrollTrigger.addEventListener("refresh", () => locoScroll.update());

    // after everything is set up, refresh() ScrollTrigger and update LocomotiveScroll because padding may have been added for pinning, etc.
    ScrollTrigger.refresh();
}

function locoReload() {
    ScrollTrigger.refresh();
    scrollToTop();
}

function refreshScrollTrigger() {
    setTimeout(() => {
        ScrollTrigger.refresh();
        // console.log("refresh");
    }, 300)
}

function scrollToTop() {
    if (document.querySelector('#page_top')) {
        const target = document.querySelector('#page_top');
        locoScroll.scrollTo(target, { duration: 1 });
    }
}

export { locoInit, locoReload, refreshScrollTrigger, scrollToTop, ScrollTrigger };