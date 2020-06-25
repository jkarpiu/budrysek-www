<template>
    <div>
        <div :key="article.id" v-for="article in articles">
            <article-preview :article="article" />
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            articles: this.$store.state.api.news
        }
    }
}
</script>
