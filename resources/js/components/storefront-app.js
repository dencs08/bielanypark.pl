import $ from 'jquery';
import { gsap } from "gsap";

var app
var appFloors
let tl
let animating

function appInit() {
    if (document.querySelector('#Storefronts')) {
        app = document.querySelector('[data-3d-app]')
        appFloors = app.querySelectorAll("[data-floor]")
        tl = gsap.timeline()
        animating = false
    }
}

function floorPicker() {
    app.addEventListener("click", e => {
        if (e.target.matches("[data-floor-picker]")) {
            let floorClicked = e.target.getAttribute("data-floor-picker")
            showCurrentFloor(floorClicked)
        }
    })
}

function showCurrentFloor(floorClicked) {
    replaceCurrentFloor(floorClicked)
}

function replaceCurrentFloor(floorClicked) {
    if (animating) return
    for (let i = 0; i < appFloors.length; i++) {
        animating = true

        let floor = appFloors[i]

        if (floor.classList.contains("active")) {
            tl.fromTo(floor, { opacity: 1 }, {
                opacity: 0,
                duration: 0.35,
                ease: 'power.out',
                onComplete: function () {
                    animating = false
                    floor.classList.remove("active")
                    showPickedFloor(floorClicked)
                }
            })
        }
    }
}

function showPickedFloor(floorClicked) {
    if (animating == true) return
    animating = true
    let floor = $('[data-floor=' + floorClicked + ']')

    tl.fromTo(floor, { opacity: 0 }, {
        opacity: 1,
        duration: 0.35,
        ease: 'sine.in',
        onStart: function () {
            floor.addClass("active")
        },
        onComplete: function () {
            animating = false
        }
    })
}

export { floorPicker, appInit }