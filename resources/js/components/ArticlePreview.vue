<template>
    <div class="list">
        <router-link :to="{ name: 'article', params: { id: id } }"
            ><h4>{{ article.title }}</h4></router-link
        >
        <img :src="article.backgroundImage" alt="">
        <span v-html="shortContent"></span>
        <router-link :to="{ name: 'article', params: { id: id } }"
            >Czytaj dalej</router-link
        >

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
<style scoped>
.list {
    margin-top: 120px;
}
</style>
