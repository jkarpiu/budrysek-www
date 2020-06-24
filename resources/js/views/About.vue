<template>
    <div>
        <Content
            v-bind:key="article.id"
            v-for="article in myData"
            :article="article.content"
        />
    </div>
</template>
<script>
export default {
    data() {
        return {
            myData: this.$store.state.subpages.subpages
        };
    },
    created() {
        console.log(this.myData)
    }
};
</script>
