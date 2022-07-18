<template>
    <div>
        <HeaderComponent/>

        <main>
            <router-view></router-view>
        </main>

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
.container{
    width: 70%;
    margin: 0 auto;
}
</style>