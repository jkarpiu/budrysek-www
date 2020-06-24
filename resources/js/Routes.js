exports.Routes = [{
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
