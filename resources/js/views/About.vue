<template>
    <div>
        <Content
            :article="myData.about"
        />
    </div>
</template>
<script>
export default {
    data() {
        return {
            myData: this.$store.state.api.subpages
        };
    },

};
</script>
