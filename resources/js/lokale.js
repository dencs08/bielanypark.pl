import $ from 'jquery';
import Slider from 'omni-slider';

import { gsap } from "gsap";

import { ScrollTrigger } from './locomotive-scroll';

import { viewChange } from './components/storefront-view-change';
import { floorPicker, appInit } from './components/storefront-app';
import { appendCards, appendAppFloor } from './components/appenders';
import { tooltipInit } from './components/tooltip'
import { cursorInit } from './components/cursor';
import { filtersDropdownInit } from './components/filters-dropdown'

function storefrontsInit() {
    let floorCheckBoxes = document.querySelectorAll(".floor-checkbox");
    for (let i = 0; i < floorCheckBoxes.length; i++) {
        const element = floorCheckBoxes[i];
        element.addEventListener("click", fetchStores);
    }

    function getActiveIds(checkboxName) {
        let checkBoxes = document.getElementsByName(checkboxName);
        let ids = Array.prototype.slice.call(checkBoxes)
            .filter(ch => ch.checked == true)
            .map(ch => ch.value);
        // console.log(ids);

        return ids;
    }

    function getAllIds(checkboxName) {
        let checkBoxes = document.getElementsByName(checkboxName);
        let ids = Array.prototype.slice.call(checkBoxes)
            .map(ch => ch.value);
        // console.log(ids);

        return ids;
    }

    function clearSearched(floors) {
        $('.results').empty();

        for (let i = 0; i < floors.length; i++) {
            const floor = floors[i]
            $(`#results-3d-floor-${floor}`).html(" ")
        }
    }

    var sliderOmniMetric
    var sliderOmniBuyPrice
    function sliders() {
        //Sliders
        var sliderMetric = document.getElementById("sliderMetric");
        var minMetric = sliderMetric.getAttribute('attr-valueMin');
        var maxMetric = sliderMetric.getAttribute('attr-valueMax');
        // var sliderBuyPrice = document.getElementById("sliderBuyPrice");
        // var minBuyPrice = sliderBuyPrice.getAttribute('attr-valueMin');
        // var maxBuyPrice = sliderBuyPrice.getAttribute('attr-valueMax');

        sliderOmniMetric = new Slider(sliderMetric, {
            isDate: false,
            min: minMetric,
            max: maxMetric,
            start: minMetric,
            end: maxMetric,
            overlap: true,
        });

        // sliderOmniBuyPrice = new Slider(sliderBuyPrice, {
        //     isDate: false,
        //     min: minBuyPrice,
        //     max: maxBuyPrice,
        //     start: minBuyPrice,
        //     end: maxBuyPrice,
        //     overlap: true,
        // });

        //changed values while moving
        sliderOmniMetric.subscribe("moving", function (data) {
            document.getElementById("minMetric").innerHTML = data.left.toFixed(1) + "m²";
            document.getElementById("maxMetric").innerHTML = data.right.toFixed(1) + "m²";
        });
        // sliderOmniBuyPrice.subscribe("moving", function (data) {
        //     document.getElementById("minBuyPrice").innerHTML = data.left.toFixed(0) + "zł";
        //     document.getElementById("maxBuyPrice").innerHTML = data.right.toFixed(0) + "zł";
        // });

        //set inital values
        document.getElementById("minMetric").innerHTML = sliderOmniMetric.getInfo().left.toFixed(1) + "m²";
        document.getElementById("maxMetric").innerHTML = sliderOmniMetric.getInfo().right.toFixed(1) + "m²";
        // document.getElementById("minBuyPrice").innerHTML = sliderOmniBuyPrice.getInfo().left.toFixed(0) + "zł";
        // document.getElementById("maxBuyPrice").innerHTML = sliderOmniBuyPrice.getInfo().right.toFixed(0) + "zł";

        //fetch when stopped
        sliderOmniMetric.subscribe("stop", function () {
            fetchStores();
        });
        // sliderOmniBuyPrice.subscribe("stop", function () {
        //     fetchStores();
        // });
    }

    let response;

    function fetchStores() {

        let floorIds = getActiveIds("floor");
        let href = 'testFilter?';

        clearSearched(getAllIds("floor"));


        if (floorIds.length) {
            href += 'floor=[' + floorIds + ']';
        }

        href += '&metric=[' + [sliderOmniMetric.getInfo().left, sliderOmniMetric.getInfo().right] + ']';
        // href += '&buyPrice=[' + [sliderOmniBuyPrice.getInfo().left, sliderOmniBuyPrice.getInfo().right] + ']';
        href += '&rentPrice=[' + [0, 1000] + ']';
        href += '&visible=Widoczne';
        // console.log(floorIds);
        // console.log(href);

        $.ajax({
            type: 'GET',
            url: href,
            success: function (response) {
                // $('.filter_data').html(response)
                response = JSON.parse(response);
                if (response.length == 0) {
                    $('.results').append(`<h3 class="mt-5">Brak lokali w wybranych kryteriach</h3>`);
                } else {
                    let i = 0;
                    response.forEach(store => {
                        appendCards(store);

                        if (store.floor == 0) {
                            appendAppFloor(store);
                        }
                        if (store.floor == 1) {
                            appendAppFloor(store);
                        }

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

    sliders()

    //Initial ajax call
    fetchStores()

    viewChange()

    appInit()
    floorPicker()

    tooltipInit()

    filtersDropdownInit()
}

export { storefrontsInit }