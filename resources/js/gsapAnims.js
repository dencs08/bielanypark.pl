import { gsap } from "gsap";

//!navbar
const navBurger = document.getElementById("nav-burger")
const navWrapper = document.getElementById("nav-wrapper")
const navOutlinedContent = document.getElementById("nav-content-outlined")
const navBg = document.getElementById("nav-bg")
const scaledContent = document.getElementById("nav-ul")

let i = 0;

navBurger.addEventListener("click", navBarAnimation);

navWrapper.style.zIndex = "-99";
navBg.style.zIndex = "-99";

function navBarAnimation() {
    if (i % 2 == 0) {
        //opened
        navWrapper.style.zIndex = "98";
        navBg.style.zIndex = "97";

        gsap.to(navBg, {
            duration: 0.75,
            ease: "expo",
            opacity: 1,
            delay: 0.3,
        })
        gsap.to(navWrapper, {
            duration: 0.75,
            ease: "expo",
            opacity: 1,
            delay: 0.4,
        })
        gsap.to(scaledContent, {
            duration: 1.25,
            ease: "expo",
            scale: 1,
            delay: 0.3,
        })
        gsap.to(navOutlinedContent, {
            duration: 1.5,
            ease: "expo",
            opacity: 1,
            delay: 0.5,
        })
    } else {
        //closed
        gsap.to(navBg, {
            duration: 0.75,
            ease: "expo",
            opacity: 0,
            delay: 0.15
        })
        gsap.to(navWrapper, {
            duration: 0.75,
            ease: "power.inOut",
            opacity: 0,
        })
        gsap.to(scaledContent, {
            duration: 1.25,
            ease: "expo",
            scale: 0.8,
        })
        gsap.to(navOutlinedContent, {
            duration: 1.5,
            ease: "expo",
            opacity: 0,
            delay: 0.25
        })

        setInterval(zIndexNavBar(), 1250);
    }
    i++
}

function zIndexNavBar() {
    navWrapper.style.zIndex = "-5";
    navBg.style.zIndex = "-5";
}