import $ from 'jquery';
// import mapboxgl from 'mapbox-gl';

function contactInit() {
    $('.js-input').keyup(function () {
        console.log("KEY");
        if ($(this).val()) {
            $(this).addClass('not-empty');
        } else {
            $(this).removeClass('not-empty');
        }
    });

    // mapboxgl.accessToken = 'pk.eyJ1IjoiZGVuY3MwOCIsImEiOiJjanYxaXgxN2YwYmlrNDRydHB6c3Q5eWNjIn0.Rs2kuHA93nRix-LXRVRDPA';

    // navigator.geolocation.getCurrentPosition(successLocation, errorLocation, {
    //     enableHighAccuracy: true
    // })

    // function successLocation(position) {
    //     setMap([16.177654970029643, 51.19004853682276])
    // }

    // function errorLocation() {

    // }

    // function setMap(center) {
    //     const map = new mapboxgl.Map({
    //         container: 'map',
    //         style: 'mapbox://styles/dencs08/cl210mbvs00c714mqvui4941i',
    //         center: center,
    //         zoom: 15
    //     });

    //     const nav = new mapboxgl.NavigationControl()
    //     map.addControl(nav)
    // }
}

export { contactInit }