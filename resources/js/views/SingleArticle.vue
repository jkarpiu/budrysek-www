<template>
    <div>
        <Header
            class="headerImage"
            :title="article.title"
            :subtitle="article.subtitle"
            image="../assets/img/bg3.jpg"
        />
        <div class="container">
            <div class="row">
                <Content v-bind:article="article" />
            </div>
            <div class="row">
                <Comments />
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            article: this.$store.state.api.news[this.$route.params.id - 1]
        };
    },
    created() {
        console.log(this.article.content);
    }
};
</script>
