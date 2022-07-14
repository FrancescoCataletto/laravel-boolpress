<template>
  <div class="container">
      <div v-for="post in posts" 
           :key="post.id">
        <h3>{{post.title}}</h3>
        <p>{{post.text}}</p>
      </div>
  </div>
</template>

<script>
export default {
    name: 'Blog',
    data(){
      return{
        urlApi: '/api/index',
        posts: null
      }
    },

    methods:{
      getApi(){
        axios.get(this.urlApi)
        .then(res => {
          this.posts= res.data.data
          console.log(this.posts)
        })
      }
    },

    mounted(){
      this.getApi();
    }
}
</script>

<style lang="scss" scoped>

</style>