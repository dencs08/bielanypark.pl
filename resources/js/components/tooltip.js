import gsap from 'gsap'
import $ from 'jquery';

let tooltipObjects
let tooltip
var app
var sidebar

function tooltipInit() {
    if (document.querySelector('#Storefronts')) {
        tooltip = document.querySelector('[data-tooltip-object]')
        setTimeout(() => {
            app = document.querySelector('[data-3d-app]')
            tooltipObjects = document.querySelectorAll("[data-tooltip]")
            tooltipShow()
        }, 1000);
    }
}

function tooltipShow() {
    let name
    let metric
    let buyPrice
    let floor
    let url
    let tooltipName
    let tooltipMetric
    let tooltipPrice
    let tooltipFloor
    let tooltipAvailable
    let available

    app.addEventListener('mouseout', e => {
        if (!e.target.matches("[data-tooltip]")) return
    });

    app.addEventListener('mouseover', e => {
        if (!e.target.matches("[data-tooltip]")) return

        name = e.target.getAttribute('data-tooltip-name')
        metric = e.target.getAttribute('data-tooltip-metric')
        floor = e.target.getAttribute('data-tooltip-floor')
        available = e.target.getAttribute('data-tooltip-available')
        // buyPrice = e.target.getAttribute('data-tooltip-buy-price')

        tooltipName = tooltip.querySelector("[data-tooltip-name]")
        tooltipMetric = tooltip.querySelector("[data-tooltip-metric]")
        tooltipFloor = tooltip.querySelector("[data-tooltip-floor]")
        tooltipAvailable = tooltip.querySelector("[data-tooltip-available]")
        // tooltipPrice = tooltip.querySelector("[data-tooltip-price]")

        tooltipName.innerHTML = "Lokal " + name
        tooltipMetric.innerHTML = metric + "m²"
        tooltipFloor.innerHTML = floor
        tooltipAvailable.innerHTML = available
        // tooltipPrice.innerHTML = buyPrice + "zł"
    });
    app.addEventListener('mousemove', e => {
        if (!e.target.matches("[data-tooltip]")) return

    });
    app.addEventListener('click', e => {
        sidebar = app.querySelector("#sidebar_app")
        if (!e.target.matches("[data-tooltip]")) return
        url = e.target.getAttribute('data-href')
        if (!url) return
        //for some reason swup.loadPage doesnt load properly so we need to setTimeout and reload page anyways.
        swup.loadPage({
            url: url,
            method: 'GET',
            customTransition: 'transition-fade'
        });
        setTimeout(function () {
            window.location.href = url
        }, 500)
    })
}


export { tooltipInit }