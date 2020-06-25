<template>
    <div>
        <Header class="headerImage" title="Lorem" subtitle="Ipsum" image="../assets/img/bg.jpg" />
        <div class="container">
            <div class="row">
                <Content v-bind:article="du" />
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
            du: "llubie testować"
        };
    }
};
</script>
