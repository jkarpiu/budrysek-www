/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");
import VueRouter from "vue-router";
import Vuex from "vuex";
import Routes from './Routes';
import ApiController from './ApiController';
import Config from './Config';
import createPersistedState from "vuex-persistedstate";

Vue.use(VueRouter);
Vue.use(Vuex);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */


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

let api = new ApiController.api();

const store = new Vuex.Store(
    {
        plugins: [createPersistedState()],
        state: {
            api: api,
            config: Config.config
        },

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
    routes: Routes.Routes
});

const app = new Vue({
    el: "#app",
    components: { App },
    router,
    store: store
});
