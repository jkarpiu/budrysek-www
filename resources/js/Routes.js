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
        component: require("./views/Articles.vue").default
    },
    {
        path: "/article/:id",
        name: "article",
        component: require("./views/SingleArticle.vue").default
    },
    {
        path: "/help",
        name: "help",
        component: require("./views/Help.vue").default
    },
    {
        path: "/contact",
        name: "contact",
        component: require("./views/Contact.vue").default
    },
    {
        path: "/animals",
        name: "animals",
        component: require("./views/Animals.vue").default
    },
    {
        path: "/actions",
        name: "actions",
        component: require("./views/Actions.vue").default
    }
]