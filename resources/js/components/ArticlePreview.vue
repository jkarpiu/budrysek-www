<template>
    <div class="portfolio-item">
        <router-link class="portfolio-link" :to="{ name: 'article', params: { id: id } }">
            <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                    <i class="fas fa-plus fa-3x"></i>
                </div>
            </div>
            <img class="img-fluid" :src="article.backgroundImage" alt />
        </router-link>
        <div class="portfolio-caption">
            <div class="portfolio-caption-heading">{{ article.title }}</div>
            <div class="portfolio-caption-subheading text-muted">
                <span v-html="shortContent"></span>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: ["article"],
    data() {
        return {
            shortContent: this.shorten(this.article.content) + "... ",
            id: this.article.id
        };
    },
    methods: {
        shorten: function(arti) {
            arti = arti
                .split(" ")
                .splice(0, this.$store.state.config.lengthOfShortArticle)
                .join(" ");
            return arti;
        }
    }
};
</script>
