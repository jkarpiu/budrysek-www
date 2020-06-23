<template>
    <div>
        <Navbar />
        <div class="container">
            <router-view ></router-view>
        </div>
        <Footer />
    </div>
</template>
<script>
    export default {}
</script>
<style scoped>
    .container {
        margin: 0;
        padding: 0; }
</style>
