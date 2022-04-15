import { gsap } from "gsap";


function startInit() {
    const h1 = document.querySelector("h1")
    const h21 = document.querySelector("#h2-1")
    const h22 = document.querySelector("#h2-2")
    const image = document.querySelector("#landing_image")
    const hero = document.querySelector(".hero")
    const slider = document.querySelector(".slider")
    const tl = gsap.timeline()

    gsap.set(hero, { height: '0%' })
    gsap.set(hero, { width: '100%' })
    gsap.set(slider, { x: '-100%' })
    gsap.set(h1, { y: "-300px" })
    gsap.set(h21, { opacity: 0, x: "-100px" })
    gsap.set(h22, { opacity: 0, x: "100px" })

    tl.fromTo(hero, {
        height: '0%'
    },
        {
            height: '80%',
            duration: 1,
            ease: 'Power2.easeInOut'
        })
        .fromTo(hero, {
            width: '100%'
        },
            {
                width: '80%',
                duration: 1,
                ease: 'Power2.easeInOut'
            })
        .fromTo(slider, {
            x: "-100%"
        },
            {
                x: "0%",
                duration: 1,
                ease: 'Power2.easeInOut'
            })
        .fromTo(h1, {
            opacity: 0,
            y: "-300px"
        }, {
            opacity: 1,
            y: "-200px",
            x: 0,
            duration: 1,
            ease: "expo"
        },
            "-=1")
        .fromTo(
            h21, {
            opacity: 0,
            x: "-100px"
        }, {
            opacity: 1,
            x: "0",
            duration: 1,
            ease: "expo"
        },
            "-=0.5")
        .fromTo(
            h22, {
            opacity: 0,
            x: "100px"
        }, {
            opacity: 1,
            x: "0",
            duration: 1,
            ease: "expo"
        },
            "-=0.5")
}

export { startInit }
