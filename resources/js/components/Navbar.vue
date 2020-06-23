<template>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" id="brand" href="/"
                >budrysek</a
            >
            <button
                class="navbar-toggler navbar-toggler-right"
                type="button"
                data-toggle="collapse"
                data-target="#navbarResponsive"
                aria-controls="navbarResponsive"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                Menu
                <i class="fas fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <router-link :to="{ name: 'hello' }">
                            <a
                                class="nav-link js-scroll-trigger"
                                href="/aboutus"
                                >O nas</a
                            >
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{ name: 'home' }">
                            <a
                                class="nav-link js-scroll-trigger"
                                href="/actions"
                                >Nasze akcje</a
                            >
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/animals"
                            >Nasi podopieczni</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/articles"
                            >Aktualności</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/contact"
                            >Kontakt</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/help"
                            >Wsparcie</a
                        >
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
export default {};
window.onscroll = function() {
    scrollFunction();
};

window.onscroll = function() {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 15 ||
        document.documentElement.scrollTop > 15
    ) {
        document.getElementById("mainNav").style.height = "3rem";
        document.getElementById("mainNav").style.background = "#262626";
        document.getElementById("navbarResponsive").style.paddingTop = "2rem";
        document.getElementById("navbarResponsive").style.paddingBottom =
            "2rem";
        document.getElementById("brand").style.paddingTop = "2rem";
        document.getElementById("brand").style.paddingBottom = "2rem";
    } else {
        document.getElementById("mainNav").style.height = "4rem";
        document.getElementById("mainNav").style.background = "none";
        document.getElementById("navbarResponsive").style.paddingTop = "2.5rem";
        document.getElementById("navbarResponsive").style.paddingBottom =
            "2.5rem";
        document.getElementById("brand").style.paddingTop = "2.5rem";
        document.getElementById("brand").style.paddingBottom = "2.5rem";
    }
}
</script>
<style scoped>
#mainNav {
    background: none;
    width: 100%;
    transition: 0.4s;
    z-index: 99;
}

.navItem {
    margin: 10px;
}
.navItemLink {
    text-decoration: none;
    color: black;
}
.navItemLink:hover {
    text-decoration: none;
    color: grey;
    cursor: pointer;
}
.nav-element {
    transition: 0.4s;
    margin-top: 1.2rem;
    margin-left: 40px;
    margin-right: 40px;
    margin-bottom: 0.5rem;
}
#brand,
#navbarResponsive {
    transition: 0.4s;
}
</style>
