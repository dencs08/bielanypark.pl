import { gsap } from "gsap";

function magneticInit() {
    //! magnetic
    var magnets = document.querySelectorAll('.magnetic-wrapper')
    var strength = 100

    magnets.forEach((magnet) => {
        magnet.addEventListener('mousemove', moveMagnet);
        magnet.addEventListener('mouseout', function (event) {
            gsap.to(event.currentTarget, { x: 0, y: 0, ease: "Power4.easeOut", duration: 1 })
        });
    });

    function moveMagnet(event) {
        var magnetButton = event.currentTarget
        var bounding = magnetButton.getBoundingClientRect()

        gsap.to(magnetButton, {
            x: (((event.clientX - bounding.left) / magnetButton.offsetWidth) - 0.5) * strength,
            y: (((event.clientY - bounding.top) / magnetButton.offsetHeight) - 0.5) * strength,
            ease: "Power4.easeOut",
            duration: 1,
        })
    }
}

export { magneticInit }