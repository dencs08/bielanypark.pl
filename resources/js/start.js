import { gsap } from "gsap";


function startInit() {
    const h1 = document.querySelector("h1")
    const h21 = document.querySelector("#h2-1")
    const h22 = document.querySelector("#h2-2")
    const hero = document.querySelector(".hero")
    const slider = document.querySelector(".slider")
    const tl = gsap.timeline()

    gsap.set(hero, { height: '0%' })
    gsap.set(hero, { width: '100%' })
    gsap.set(slider, { x: '-100%' })
    gsap.set(h1, { y: "-100%" })
    gsap.set(h21, { opacity: 0, x: "-100px" })
    gsap.set(h22, { opacity: 0, x: "100px" })

    let heroHeight = '0%'
    let heroDuration = 1
    let heroWidth = '80%'

    let h1Y = ['-90vh', '-75vh']

    if (window.screen.width < 512) {
        heroHeight = '80%'
        heroDuration = 0.2
        heroWidth = "90%"
    }

    if (window.screen.width <= 966) {
        h1Y = ['-90vh', '-10vh']
    }

    tl.fromTo(hero, {
        height: heroHeight
    },
        {
            height: '80%',
            duration: heroDuration,
            ease: 'Power2.easeInOut'
        })
        .fromTo(hero, {
            width: '100%'
        },
            {
                width: heroWidth,
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
            y: h1Y[0]
        }, {
            opacity: 1,
            y: h1Y[1],
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
