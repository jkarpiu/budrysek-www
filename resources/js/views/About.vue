<template>
    <Content v-bind:text="myData" />
</template>
<script>
export default {
    data() {
        return {
            myData: this.$store.state.subpages[0].content
        }
    }
}
</script>
