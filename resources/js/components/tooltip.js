import gsap from 'gsap'

let tooltipObjects
let tooltip
var app
function tooltipInit() {
    if (document.querySelector('#Storefronts')) {
        tooltip = document.querySelector('#tooltip')
        setTimeout(() => {
            app = document.querySelector('[data-3d-app]')
            tooltipObjects = document.querySelectorAll("[data-tooltip]")
            tooltipShow()
        }, 1000);
    }
}

function tooltipShow() {
    app.addEventListener('mouseout', e => {
        if (!e.target.matches("[data-tooltip]")) return
        // tooltip.classList.remove('active');
    });

    app.addEventListener('mouseover', e => {
        if (!e.target.matches("[data-tooltip]")) return

        let name = e.target.getAttribute('data-tooltip-name')
        let metric = e.target.getAttribute('data-tooltip-metric')
        let buyPrice = e.target.getAttribute('data-tooltip-buyPrice')
        let floor = e.target.getAttribute('data-tooltip-floor')

        // tooltip.classList.add('active');

        var x = e.clientX;
        var y = e.clientY;
        tooltip.style.marginLeft = x + "px";
        tooltip.style.marginTop = y + "px";
    });
}

export { tooltipInit }