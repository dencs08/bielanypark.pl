import $ from 'jquery';
import Slider from 'omni-slider';

import { gsap } from "gsap";

import { ScrollTrigger } from './locomotive-scroll';

import { cursorInit } from './components/cursor';

function storefrontsInit() {
    let floorCheckBoxes = document.querySelectorAll(".floor-checkbox");
    for (let i = 0; i < floorCheckBoxes.length; i++) {
        const element = floorCheckBoxes[i];
        element.addEventListener("click", fetchStores);
    }

    function getIds(checkboxName) {
        let checkBoxes = document.getElementsByName(checkboxName);
        let ids = Array.prototype.slice.call(checkBoxes)
            .filter(ch => ch.checked == true)
            .map(ch => ch.value);
        // console.log(ids);

        return ids;
    }
    let response;
    function fetchStores() {
        $('.results').empty();

        let floorIds = getIds("floor");
        let href = 'testFilter?';

        if (floorIds.length) {
            href += 'floor=[' + floorIds + ']';
        }

        href += '&metric=[' + [sliderOmniMetric.getInfo().left, sliderOmniMetric.getInfo().right] + ']';
        href += '&buyPrice=[' + [sliderOmniBuyPrice.getInfo().left, sliderOmniBuyPrice.getInfo().right] + ']';
        href += '&rentPrice=[' + [0, 1000] + ']';
        href += '&visible=1';
        // console.log(floorIds);
        // console.log(href);

        $.ajax({
            type: 'GET',
            url: href,
            success: function (response) {
                $('.filter_data').html(response)
                response = JSON.parse(response);
                if (response.length == 0) {
                    $('.results').append(`<h3 class="mt-5">Brak lokali w wybranych kryteriach</h3>`);
                } else {
                    let i = 0;
                    response.forEach(store => {
                        $('.results').append(`     
                        <div class="col-md-12 col-lg-6 col-xl-4">
                            <div class="card">
                                <div class="card-header png-bg-color-superLight p-4">
                                    <a href="/lokale/${store.name}"><img class="img-fluid w-100" src="images/cards/web/png/${store.name}.png" alt=""></a>
                                </div>
                                <div class="card-body">
                                    <h3 class="mt-4 mb-2">Lokal ${store.name}</h3>
                                    <p>Metraż: <span class="fw-light"> ${store.metric}</span></p>
                                    <p>Piętro: <span class="fw-light"> ${store.floor}</span></p>
                                    <p>Pokój sanitarny:<span class="fw-light"> ${store.sanitary}</span></p>

                                    <p class="mt-4 font-size-l">Cena:<span class="fw-light"> ${store.buyPrice}</span></p>
                                    <a href="/kontakt/${store.name}"><button type="button" class="btn btn-secondary font-size-m mt-2 mr-2">Zapytaj</button></a>
                                    <a href="/lokale/${store.name}"><button type="button" class="btn btn-outline-secondary text-center font-size-m mt-2">Podgląd</button></a>
                                </div>
                            </div>
                        </div>
                        `
                        );
                        if (i == response.length - 1)
                            setTimeout(function () {
                                ScrollTrigger.refresh();
                            }, 500)
                        i++;
                    });
                    setTimeout(function () {
                        ScrollTrigger.refresh();
                    }, 300)
                }
                //After success response get how many records we got
                let resultCount = document.querySelectorAll('.card')
                $('.storeCount').text(resultCount.length)
                cursorInit();
                ScrollTrigger.refresh();
            }
        });
    }

    //Sliders
    var sliderMetric = document.getElementById("sliderMetric");
    var minMetric = sliderMetric.getAttribute('attr-valueMin');
    var maxMetric = sliderMetric.getAttribute('attr-valueMax');
    var sliderBuyPrice = document.getElementById("sliderBuyPrice");
    var minBuyPrice = sliderBuyPrice.getAttribute('attr-valueMin');
    var maxBuyPrice = sliderBuyPrice.getAttribute('attr-valueMax');

    var sliderOmniMetric = new Slider(sliderMetric, {
        isDate: false,
        min: minMetric,
        max: maxMetric,
        start: minMetric,
        end: maxMetric,
        overlap: true,
    });

    var sliderOmniBuyPrice = new Slider(sliderBuyPrice, {
        isDate: false,
        min: minBuyPrice,
        max: maxBuyPrice,
        start: minBuyPrice,
        end: maxBuyPrice,
        overlap: true,
    });

    //changed values while moving
    sliderOmniMetric.subscribe("moving", function (data) {
        document.getElementById("minMetric").innerHTML = data.left.toFixed(1) + "m²";
        document.getElementById("maxMetric").innerHTML = data.right.toFixed(1) + "m²";
    });
    sliderOmniBuyPrice.subscribe("moving", function (data) {
        document.getElementById("minBuyPrice").innerHTML = data.left.toFixed(0) + "zł";
        document.getElementById("maxBuyPrice").innerHTML = data.right.toFixed(0) + "zł";
    });

    //set inital values
    document.getElementById("minMetric").innerHTML = sliderOmniMetric.getInfo().left.toFixed(1) + "m²";
    document.getElementById("maxMetric").innerHTML = sliderOmniMetric.getInfo().right.toFixed(1) + "m²";
    document.getElementById("minBuyPrice").innerHTML = sliderOmniBuyPrice.getInfo().left.toFixed(0) + "zł";
    document.getElementById("maxBuyPrice").innerHTML = sliderOmniBuyPrice.getInfo().right.toFixed(0) + "zł";

    //fetch when stopped
    sliderOmniMetric.subscribe("stop", function () {
        fetchStores();
    });
    sliderOmniBuyPrice.subscribe("stop", function () {
        fetchStores();
    });

    //Initial ajax call
    fetchStores();

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
                onStart: function () { view3d.classList.add("active") },
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
                onStart: function () { viewList.classList.add("active") },
                onComplete: function () { animating = false; }
            })
    })
}

export { storefrontsInit }