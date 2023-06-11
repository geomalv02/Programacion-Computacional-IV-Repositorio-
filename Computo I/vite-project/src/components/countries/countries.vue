<template>
    {{ loadData.map((d) => d.region ) }}
</template>

<script>
import requests from './requests';


export default ({
    data(){
        return{
            data: [],
            firstIndex: 0,
            lastIndex: 0,
            sliceData: []
        }
    },
    methods: {
        async getAllCountries(){
            const response = await fetch(requests.getAllCountries);
            this.data = await response.json();
            this.total = this.data.length;
        }
    },
    async getbyRegion(){
        const response = await fetch(requests.getbyRegion(this.$store.state.currentRegion));
        this.data = await response.json();
        this.total = this.data.length;

    },
    computed: {
        loadData(){
            if(this.$store.state.currentRegion == "All"){
                 this.getAllCountries()
                 this.lastIndex = this.$store.state
        
            } else {
                 this.getbyRegion()
            }
            return this.data
        },
        total(){
            get(){
                return this.$store.state.total
            },
            set(){
                this.$store.commit
            }
        }
    }
});
</script>