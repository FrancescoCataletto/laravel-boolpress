<template>
    <div>
        <HeaderComponent/>

        <main></main>

        <FooterComponent/>

    </div>
</template>

<script>

import HeaderComponent from './components/partials/HeaderComponent.vue';
import FooterComponent from './components/partials/FooterComponent.vue';

export default {
    name: 'App',
    components:{
        HeaderComponent,
        FooterComponent
    },

    data(){
        return {
            
        }
    },

    methods:{
        
    },

    mounted(){
      
    }
}
</script>

<style>

</style>