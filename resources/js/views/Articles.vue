<template>
    <div>
        <Header class="headerImage" title="Aktualności" image="../assets/img/bg-articles.jpg" />
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="row">
                    <div
                        :key="article.id"
                        class="col-lg-4 col-sm-6 mb-4"
                        v-for="article in articles"
                    >
                        <article-preview :article="article" />
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
export default {
    data() {
        return {
            articles: this.$store.state.api.news
        };
    },
    created() {
        // console.log(this.articles) // prints
        // console.log(this.$store.state.api.news); // also prints
    }
};
</script>
