<template>
    <filters />
    <countries />
    <paginate />

</template>

<script>
import countries from '/src/components/countries/countries.vue';
import filters from '/src/components/countries/filters.vue';
import paginate from '/src/components/countries/paginate.vue';

export default({
    components:{
        countries,
        filters,
        paginate
    }
});
</script>
