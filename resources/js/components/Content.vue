<template>
    <div class="col-md-12">
        <div class="post-content">
            <span class="font-weight-bold">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi,
                quibusdam.
            </span>
            <span v-html="article"></span>
        </div>
    </div>
</template>
<script>
export default {
    props: ["article"]
};
</script>

