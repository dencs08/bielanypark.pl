import $ from 'jquery';

var app;
var appFloors;
if (document.querySelector('#Storefronts')) {
    app = document.querySelector('[data-3d-app]')
    appFloors = app.querySelectorAll("[data-floor]")
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
    for (let i = 0; i < appFloors.length; i++) {
        const floor = appFloors[i];

        if (!floor.className == "active") return
        floor.classList.remove("active")
    }

    let floor = $('[data-floor=' + floorClicked + ']')
    floor.addClass("active")
}

export { floorPicker }