<template>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <router-link :to="{ name: 'homepage' }">
                <a class="navbar-brand js-scroll-trigger" id="brand" href="/">budrysek</a>
            </router-link>
            <button
                class="navbar-toggler navbar-toggler-right hamburger"
                type="button"
                data-toggle="collapse"
                data-target="#navbarResponsive"
                aria-controls="navbarResponsive"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <i class="fas fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <router-link :to="{ name: 'about' }">
                            <a class="nav-link js-scroll-trigger" href="/aboutus">O nas</a>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{ name: 'home' }">
                            <a class="nav-link js-scroll-trigger" href="/actions">Nasze akcje</a>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/animals">Nasi podopieczni</a>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{ name: 'single-article' }">
                            <a class="nav-link js-scroll-trigger" href="single-article">Aktualności</a>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/contact">Kontakt</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/help">Wsparcie</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<style scoped>
.hamburger {
    width: 30px;
    height: 25px;
    border: 0;
    outline: none;
    border-top: 4px solid #ffffff;
    background: transparent;
    position: relative;
    transition: 0.3s transform linear;
}

.hamburger::before,
.hamburger::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    border-top: 4px solid #ffffff;
    transform: translateY(6px);
}

.hamburger::after {
    transform: translateY(17px);
    transition: 0.3s transform linear;
}

.opened {
    transform: rotate(45deg) translateY(5px);
    border: none;
}

.opened::after {
    transform: rotate(-90deg) translateX(-6px);
}
</style>
