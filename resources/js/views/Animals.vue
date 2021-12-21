<template>
    <div>
        <Header class="headerImage" title="Nasi podopieczni" image="../assets/img/bg-animals.jpg"/>
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="row">
                    <div v-for="animal in animals"
                         :key="animal.id"
                         class="col-lg-4 col-sm-6 mb-4"
                    >
                        <Protege :animal="animal"/>
                    </div>
                </div>
            </div>
        </section>

    </div>
</template>
<script>
import axios from "axios";
import Protege from "../components/Protege";

export default {
    components: {Protege},
    data() {
        return {
            animals: []
        }
    },
    mounted: function () {
        axios.get('/api/proteges')
            .then((res) => {
                this.animals = res.data;
            })
            .catch((err) => {
                console.log(err);
            })
    }
}

</script>

