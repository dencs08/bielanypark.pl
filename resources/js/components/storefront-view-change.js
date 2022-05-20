import { gsap } from "gsap";
import { ScrollTrigger } from '../locomotive-scroll';

function viewChange() {
    let btn3d = document.getElementById("view-3d");
    let btnList = document.getElementById("view-list");
    let view3d = document.getElementById('Storefronts-3D');
    let viewList = document.getElementById('Storefronts-List');
    let animating = false;

    btn3d.addEventListener("click", function () {
        if (animating == true || view3d.classList.contains("active")) return false;
        animating = true;

        btn3d.classList.add("active");
        btnList.classList.remove("active");

        let tl = gsap.timeline();
        tl.fromTo(viewList, { opacity: 1 },
            {
                opacity: 0,
                duration: 0.5,
                ease: 'power.out',
                onComplete: function () { viewList.classList.remove("active") }
            })
        tl.fromTo(view3d, { opacity: 0 },
            {
                opacity: 1,
                duration: 0.5,
                ease: 'sine.in',
                onStart: function () { view3d.classList.add("active"); ScrollTrigger.refresh(); },
                onComplete: function () { animating = false; }
            })
    })

    btnList.addEventListener("click", function () {
        if (animating == true || viewList.classList.contains("active")) return false;
        animating = true;

        btnList.classList.add("active");
        btn3d.classList.remove("active");

        let tl = gsap.timeline();
        tl.fromTo(view3d, { opacity: 1 },
            {
                opacity: 0,
                duration: 0.5,
                ease: 'power.out',
                onComplete: function () { view3d.classList.remove("active") }
            })
        tl.fromTo(viewList, { opacity: 0 },
            {
                opacity: 1,
                duration: 0.5,
                ease: 'sine.in',
                onStart: function () { viewList.classList.add("active"); ScrollTrigger.refresh(); },
                onComplete: function () { animating = false; }
            })
    })
}

export { viewChange }