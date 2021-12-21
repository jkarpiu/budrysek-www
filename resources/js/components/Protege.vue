<template>
    <div>
        <div class="portfolio-item">
            <span class="portfolio-link" >
                <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                        <i class="fas fa-plus fa-3x"></i>
                    </div>
                </div>
                <img class="img-fluid" :src="animal.photo" :alt="animal.name" />
            </span>
            <div class="portfolio-caption">
                <div class="portfolio-caption-heading">{{ animal.name }}</div>
                <div class="portfolio-caption-subheading text-muted">
                    <span v-html="animal.description"></span>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: [
        'animal'
    ]
};
</script>
