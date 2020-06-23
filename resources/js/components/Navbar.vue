<template>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" id="brand" href="/">budrysek</a>
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
                        <a class="nav-link js-scroll-trigger" href="/articles">Aktualności</a>
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
