import * as $ from 'jquery'
import { gsap } from "gsap";

const navItems = document.querySelectorAll('.web_link');
const navWebItems = document.querySelectorAll('.web_link_active');
const start_web_link = document.querySelector('.web_link');

const navBurger = document.getElementById("menuToggle")
const navInput = document.getElementById("menu-input")

navItems.forEach(element => {
    element.addEventListener('click', closeNavBar);
});

function closeNavBar() {
    $('#menu-input').click();
}

$(function () {
    var pathLink = location.pathname;
    var currentLink = pathLink.replace('/', '');

    if (pathLink == "/") {
        $(start_web_link).addClass('active');
    } else {
        $(navWebItems).each(function () {
            var $this = $(this);
            // if the current path is like this link, make it active
            if ($this.attr('href').indexOf(currentLink) !== -1) {
                $this.addClass('active');
            }
        })
    }
})

const navWrapper = document.getElementById("nav-wrapper")
// const navBg = document.getElementById("nav-bg")
const li = document.querySelectorAll(".nav-li")

let i = 0;

navInput.addEventListener("click", navBarAnimation);

navWrapper.style.zIndex = "-99";
// navBg.style.zIndex = "-99";

const random = (min, max) => {
    return Math.floor(Math.random() * (max - min) + min);
};

function navBarAnimation() {
    if (i % 2 == 0) {
        //opened
        navWrapper.style.zIndex = "98";
        // navBg.style.zIndex = "97";

        gsap.fromTo(navWrapper, {
            x: "100%"
        }, {
            duration: 1,
            ease: "expo",
            opacity: 1,
            delay: 0.4,
            x: 0,
        })
        let i = 1;
        li.forEach((item) => {
            let delay = 0.2 + (i * 0.125)
            gsap.fromTo(item, {
                x: "200%",
                visibility: 'visible',
            }, {
                x: 0,
                ease: "expo",
                duration: 1,
                delay: delay
            });
            i++
        })
    } else {
        //closed
        let i = 0.1;
        li.forEach((item) => {
            let delay = 0.1 + (i * 0.05)
            gsap.fromTo(item, {
                x: 0,
                visibility: 'visible',
            }, {
                x: "125%",
                ease: "expo",
                duration: 1.5,
                delay: delay
            });
            i++
        })
        gsap.fromTo(navWrapper, {
            x: "0"
        }, {
            duration: 1.1,
            ease: "expo",
            x: "125%",
            delay: 0.3
        })

        setTimeout(zIndexNavBar, 1000);
    }
    i++
}

function zIndexNavBar() {
    navWrapper.style.zIndex = "-5";
    // navBg.style.zIndex = "-5";
}
