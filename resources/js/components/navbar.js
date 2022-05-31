import * as $ from 'jquery'
import { gsap } from "gsap";

const navItems = document.querySelectorAll('.web_link');
const navWebItems = document.querySelectorAll('.web_link_active');
const start_web_link = document.querySelector('.web_link');

const navInput = document.getElementById("menu-input")

const navWrapper = document.getElementById("nav-wrapper")

const li = document.querySelectorAll(".nav-li")

let navOpendIndex = 0;
let animating = false;

navItems.forEach(element => {
    element.addEventListener('click', closeNavBar);
});
navInput.addEventListener("click", navBarAnimation);

function closeNavBar() {
    if (animating) return
    animating = true
    navbarClose()
}

function updateActiveLink() {
    $(function () {
        var pathLink = location.pathname;
        var currentLink = pathLink.replace('/', '');

        for (let i = 0; i < navWebItems.length; i++) {
            const element = navWebItems[i];
            element.classList.remove("active")
        }

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
}

function navBarAnimation() {
    if (animating) return
    animating = true
    if (navOpendIndex % 2 == 0) {
        navbarOpen()
    } else {
        navbarClose()
        // setTimeout(zIndexNavBar, 1000);
    }
}

function navbarOpen() {
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
            duration: 0.5,
            delay: delay,
            onComplete: function () { animating = false }
        });
        i++
    })
    navOpendIndex++
}

function navbarClose() {
    let i = 0.1;
    li.forEach((item) => {
        let delay = 0.1 + (i * 0.05)
        gsap.fromTo(item, {
            x: 0,
            visibility: 'visible',
        }, {
            x: "300%",
            ease: "expo",
            duration: 1,
            delay: delay,
        });
        i++
    })
    gsap.fromTo(navWrapper, {
        x: "0"
    }, {
        duration: 1.1,
        ease: "expo",
        x: "125%",
        delay: 0.3,
        onComplete: function () { animating = false }
    })
    navOpendIndex++
}

export { updateActiveLink }