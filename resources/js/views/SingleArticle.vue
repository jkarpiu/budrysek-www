<template>
    <div>
        <Header class="headerImage" />
        <div class="container">
            <div class="row">
                <Content v-bind:text="du" />
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
