require('./bootstrap');

import Swup from "swup";
import SwupHeadPlugin from '@swup/head-plugin';
import SwupBodyClassPlugin from '@swup/body-class-plugin';
import SwupPreloadPlugin from '@swup/preload-plugin';
import SwupProgressPlugin from '@swup/progress-plugin';

import { contactInit } from './contact'
import { startInit } from './start'
import { storefrontsInit } from './lokale'
import { magneticInit } from './components/magnetic'
import { cursorInit } from './components/cursor'
import { updateActiveLink, closeNavBar } from './components/navbar'

import { locoInit, locoReload, refreshScrollTrigger, scrollToTop } from './locomotive-scroll';

window.swup = new Swup({
    plugins: [new SwupHeadPlugin(), new SwupBodyClassPlugin(), new SwupPreloadPlugin(), new SwupProgressPlugin()]
});

// swup.on('willReplaceContent', unload);
swup.on('contentReplaced', init)
swup.on('transitionEnd', locoReload)

locoInit()
//Initialize script here when going to the next page
function init() {
    if (document.querySelector('body')) {
        updateActiveLink()
        cursorInit()
        magneticInit()
        closeNavBar()
        // locoReload()
    }
    if (document.querySelector("#Contact")) {
        contactInit()
    }
    if (document.querySelector('#landing_page')) {
        startInit()
    }
    if (document.querySelector('#Storefronts')) {
        storefrontsInit()

        let floorCheckBoxes = document.querySelectorAll(".floor-checkbox");
        for (let i = 0; i < floorCheckBoxes.length; i++) {
            const element = floorCheckBoxes[i]
            element.addEventListener("click", refreshScrollTrigger)
        }
    }
    if (document.querySelector('#Storefront')) {
        storefrontsInit()
    }
}

//Initialize script here when entering the page for the first time
init();