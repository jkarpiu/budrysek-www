<template>
    <div>
        <Header class="headerImage" title="O nas" image="../assets/img/bg-about.jpg" />
        <div class="container">
            <div class="row text-center mb-5 mt-5">
                <div class="col-md-12">
                    <h3 class="mb-3 text-underline">Historia</h3>
                    <p>Jesteśmy Fundacją założoną z końcem 2011 r. Jednak jako osoby prywatne, wszyscy byliśmy zaangażowani w pomoc bezdomnym zwierzętom już od kilku lat. Każdy z nas ma na swoim koncie sporo sukcesów, zdarzały się też smutne chwile, kiedy na pomoc było za późno. Dla każdego z nas pomoc zwierzętom jest sposobem na życie i realizację siebie. Zaczynamy w niewielkim gronie kilku osób. Jest nas wystarczająco dużo żeby powstała Fundacja, niestety zbyt mało, żeby w pełni móc wcielić w życie nasze zamierzenia. Bardzo chętnie przyjmiemy w nasze szeregi wolontariuszy, osoby mogące przyjąć pod swój dach zwierzaka na czas jego rekonwalescencji i czekania na nowy, prawdziwy dom oraz wszystkie osoby, które chcą dać coś od siebie pokrzywdzonym zwierzętom. Jest wiele możliwości pomocy, które szczegółowo są opisane w poszczególnych zakładkach. Zwierzaki i my będziemy wdzięczni za każdą pomoc</p>
                </div>
            </div>
            <hr />
            <div class="row text-center mt-5 mb-4">
                <div class="col-md-12">
                    <h3 class="mb-0 text-underline">Ludzie</h3>
                    <div class="row pers">
                        <div class="pe">
                            <img
                                src="https://images.pexels.com/photos/2379004/pexels-photo-2379004.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                                alt
                            />
                            <div class="p-name">Bartosz Kowal</div>
                            <div class="p-des">25 lat</div>
                            <div class="p-sm">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="pe">
                            <img
                                src="https://images.pexels.com/photos/4048497/pexels-photo-4048497.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                                alt
                            />
                            <div class="p-name">Michał Maj</div>
                            <div class="p-des">18 lat</div>
                            <div class="p-sm">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>

                        <div class="pe">
                            <img
                                src="https://images.pexels.com/photos/2049905/pexels-photo-2049905.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                                alt
                            />
                            <div class="p-name">Sandra Biel</div>
                            <div class="p-des">35 lat</div>
                            <div class="p-sm">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row download text-center mt-5 mb-5">
                <div class="col-md-12">
                    <h3 class="mb-5 text-underline">Do pobrania</h3>
                    <div class="row">
                        <div class="download-item col-md-4">
                            <a href="/assets/statut.pdf" download>
                                <div class="part-download-item">
                                    <i class="fas fa-download"></i>
                                    <h4 class="mt-4">Statut fundacji</h4>
                                </div>
                            </a>
                        </div>
                        <div class="download-item col-md-4">
                            <a href="/assets/ustawa.pdf" download>
                                <div class="part-download-item">
                                    <i class="fas fa-download"></i>
                                    <h4 class="mt-4">Ustawa o ochronie zwierząt</h4>
                                </div>
                            </a>
                        </div>
                        <div class="download-item col-md-4">
                            <a href="/assets/dlaczego.pdf" download>
                                <div class="part-download-item">
                                    <i class="fas fa-download"></i>
                                    <h4 class="mt-4">Opieka nad bezdomnymi kotami</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>
.pe {
    margin-left: auto;
    margin-right: auto;
    float: left;
    width: calc(100% / 3);
    overflow: hidden;
    padding: 40px 0;
    transition: 0.4s;
}

.pe:hover {
    transform: scale(1.1);
    background: #f1f1f1;
    transition: 0.6s;
}

.pe:hover .p-name {
    background-size: 40% 0.1em;
    background-position: bottom;
}

.pe img {
    width: 360px;
    object-fit: cover;
    max-height: 360px;
}

.p-name {
    font-size: 18px;
    margin: 16px 0;
    text-transform: uppercase;
    font-size: 1.1em;
    font-weight: 500;
    padding-bottom: 5px;
    text-decoration: none;
    background: linear-gradient(currentColor, currentColor) bottom / 0 0.1em
        no-repeat;
    transition: 1.2s background-size;
}

.p-des {
    font-size: 17px;
    font-style: italic;
    color: #fed136;
}

.p-sm a {
    margin: 0 4px;
    display: inline-block;
    width: 30px;
    height: 30px;
    transition: 0.4s;
}

.p-sm a:hover {
    transform: scale(1.4);
}

.p-sm a i {
    color: #333;
    line-height: 30px;
}

@media screen and (max-width: 800px) {
    .pe {
        width: 100%;
    }
}

@media screen and (max-width: 991px) {
    .active {
        background-size: 20% 0.1em;
        background-position: left bottom;
    }
}

@media screen and (max-width: 450px) {
    .pe:first-child {
        padding-top: 0;
    }
}

@media screen and (max-width: 400px) {
    .pe img {
        width: 300px;
        height: 300px;
    }
}

@media screen and (max-width: 350px) {
    .pe img {
        width: 250px;
        height: 250px;
    }
}

.download-item {
    height: 300px;
    padding: 5px;
    border: 1px solid #aaa;
    background-color: #262626;
}

.download-item div.part-download-item * {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.download-item div.part-download-item h4 {
    margin: 0 !important;
    font-size: 2em;
    text-transform: uppercase;
    font-weight: bold;
    transition: 0.5s;
    color: #fff;
}

.download-item div.part-download-item i {
    opacity: 0;
    font-size: 5em;
    z-index: 1;
    transition: 1s;
}

.download-item:hover div.part-download-item i {
    opacity: 1;
    font-size: 10em;
}

.download-item:hover div.part-download-item h4 {
    opacity: 0;
}
</style>
