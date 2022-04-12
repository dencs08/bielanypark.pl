require('./bootstrap');

// import { Swup } from "swup";
import * as Swup from '/../node_modules/swup/dist/swup.min';
import SwupHeadPlugin from '@swup/head-plugin';

const swup = new Swup({
    plugins: [new SwupHeadPlugin()]
});