/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");
import VueRouter from "vue-router";
import Vuex from "vuex";
import axios from 'axios';
Vue.use(VueRouter);
Vue.use(Vuex);
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

const serverAdress = 'http://127.0.0.1:8000/';
let subpages = {};

const files = require.context("./components/", true, /\.vue$/i);
files.keys().map(key =>
    Vue.component(
        key
        .split("/")
        .pop()
        .split(".")[0],
        files(key).default
    )
);

axios.get(serverAdress + "api/content")
        .then(res => {subpages = res.data; console.log(res.data)})
        .catch(err => console.log(err));

const store = new Vuex.Store(
    {
        state: {
            subpages: subpages
        }
    }
)

import App from "./views/App";
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const router = new VueRouter({
    mode: "history",
    routes: [{
            path: "/",
            name: "homepage",
            component: require("./views/Homepage.vue").default
        },
        {
            path: "/about",
            name: "about",
            component: require("./views/About.vue").default
        },
        {
            path: "/articles",
            name: "single-article",
            component: require("./views/SingleArticle.vue").default
        }
    ]
});

const app = new Vue({
    el: "#app",
    components: { App },
    router,
    store: store
});
