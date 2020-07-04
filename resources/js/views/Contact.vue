<template>
    <div>
        <Header class="headerImage" title="Kontakt" image="../assets/img/bg-contact.jpg" />
        <div class="container mt-4 mb-5 text-center">
            <div class="row">
                <div class="col-lg-4 col-md-6 contact-item">
                    <img class="img-title mt-3" src="assets/img/adoption.png" alt />
                    <h3 class="mt-3 text-warning">ADOPCJA</h3>
                    <p class="contact">
                        <i class="fas fa-phone-alt mb-3"></i>
                        <a class="text-underline" href="tel:+48607488598">607 488 598</a>
                        <br />
                        <i class="fas fa-envelope mt-1 mb-3"></i>
                        <a
                            class="text-underline"
                            href="mailto:fundacjabudrysek@gmail.com"
                        >fundacjabudrysek@gmail.com</a>
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 mt-2 contact-item">
                    <img class="img-title mt-3" src="assets/img/fb.png" alt />
                    <h3 class="mt-3 text-warning">Facebook</h3>
                    <p>
                        Odwiedź stronę naszej fundacji i&nbsp;dowiedz się co u&nbsp;nas słychać!
                        <br />
                        <a
                            class="text-underline"
                            href="https://www.facebook.com/FundacjaZSiPBudrysek/"
                        >FundacjaZSiPBudrysek</a>
                    </p>
                </div>
                <div class="col-lg-4 col-md-12 mt-2 contact-item">
                    <img class="img-title mt-3" src="assets/img/headquarters.png" alt />
                    <h3 class="mt-3 text-warning">Siedziba</h3>
                    <p>Siedzibą Fundacji jest mieszkanie prywatne. Z&nbsp;tego względu prosimy o&nbsp;kontaktowanie się z&nbsp;nami drogą telefoniczną lub mailową.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 contact-item mt-2 support">
                    <img class="img-title mt-3" src="assets/img/bank.png" alt />
                    <h3 class="mt-3 text-warning">Wsparcie</h3>
                    <p>
                        <span class="font-weight-bold">KRS:</span> 0000398339
                        <span class="font-weight-bold ml-3">REGON:</span> 242750593
                        <span class="font-weight-bold ml-3">NIP:</span> 549-21-42-922
                        <br />
                        <span class="font-weight-bold">Rachunek bankowy:</span> 57 2030 0045 1110 0000 0403 3600 BGŻ
                        <br />
                        <span class="font-weight-bold">SWIFT:</span> GOPZPLPW
                        <span class="font-weight-bold ml-3">Iban:</span> PL57 2030 0045 1110 0000 0403 3600
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>
.contact-item {
    border-right: 1px solid #ddd;
}

.contact-item:last-child {
    border-right: 0;
}

@media (max-width: 991px) {
    .contact-item:nth-child(2) {
        border: 0;
    }

    .contact-item:nth-child(3) {
        border-top: 1px solid #ddd;
        margin-top: 2rem;
    }
}

@media (max-width: 767px) {
    .contact-item:nth-child(1) {
        border: 0;
    }

    .contact-item:nth-child(2) {
        border-top: 1px solid #ddd;
        margin-top: 2rem;
    }
}

.support {
    border-top: 1px solid #ddd !important;
    margin-top: 1rem;
}

.img-title {
    width: 96px;
    height: 96px;
}

.contact a,
p a {
    display: inline-block;
    font-weight: 400;
    font-size: 1rem !important;
    color: #333 !important;
    padding: 5px;
}

.contact a:hover,
p a:hover {
    color: #fed136 !important;
}

.contact {
    text-align: center;
}

.contact-item p {
    padding: 10px;
}

.contact i {
    color: #aaa;
    font-size: 1.3rem;
    transform: translateY(3px);
}

.contact i.fa-envelope {
    font-size: 1.5rem;
    transform: translateY(5px);
}
</style>
