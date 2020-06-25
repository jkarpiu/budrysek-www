<template>
    <header :style="backgroundImage + height" class="masthead">
        <div class="masthead-subheading">{{subtitle}}</div>
        <div class="masthead-heading text-uppercase">{{title}}</div>
    </header>
</template>
<script>
export default {
    props: ["image", "heightSize", "title", "subtitle"],
    data() {
        return {
            backgroundImage: "background-image: url('" + this.image + "');",
            height: "height: " + this.heightSize + ";"
        };
    }
};
</script>
