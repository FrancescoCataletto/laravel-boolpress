<template>
  <div>
    <ul>
        <li v-for="post in posts" :key="post.id">
            <h3>{{post.title}}</h3>
            <p>{{post.text}}</p>
        </li>
    </ul>
  </div>
</template>

<script>
export default {
    name: 'App',

    data(){
        return {
            postApi: 'http://127.0.0.1:8000/api/index',
            posts: null
        }
    },

    methods:{
        getApi(){
            axios.get(this.postApi)
            .then(res => {
            this.posts = res.data.data
            })
        }
    },

    mounted(){
        this.getApi();
    }
}
</script>

<style>

</style>