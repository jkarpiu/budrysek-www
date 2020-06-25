<template>
    <header :style="backgroundImage" class="masthead" >
        <div class="masthead-subheading">{{subtitle}}</div>
        <div class="masthead-heading text-uppercase">{{title}}</div>
    </header>
</template>
<script>
export default {
    props: [ "image", "title", 'subtitle'],
    data() {
        return {
            backgroundImage: "background-image: url('" + this.image + "');"
        }
    }
}
</script>
