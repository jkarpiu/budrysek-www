<template>
    <div>
        <Navbar />
        <router-view></router-view>
        <Footer />
    </div>
</template>
<script>
export default {};
</script>

<script>
export default {
    created() {
        this.$store.state.api.getPages();
        this.$store.state.api.getNews();
    }
}
</script>
