<template>
    <div>
<<<<<<< HEAD
        <Header class="headerImage" :title="article.title" :subtitle="article.subtitle" image="../assets/img/pinkguy.png"/>
=======
        <Header class="headerImage" title="Lorem" subtitle="Ipsum" image="../assets/img/bg.jpg" />
>>>>>>> 31e11c1979455658253a3605b2b747ccea59249d
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
        console.log(this.article.content)
    }
};
</script>
