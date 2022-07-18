<template>
  <div class="container">
      <div v-for="post in posts" 
           :key="post.id">
        <h3>{{post.title}}</h3>
        <p>{{post.text}}</p>
      </div>

  <div class="btn-box">

    <button @click="getApi(pagination.current -1)"
    :disabled="pagination.current === 1"
    >INDIETRO</button>

    <button @click="getApi(pagination.current +1)"
    :disabled="pagination.current === pagination.last"
    >AVANTI</button>

  </div>
      
  </div>
</template>

<script>
export default {
    name: 'Blog',
    data(){
      return{
        urlApi: '/api/index',
        posts: null,
        pagination:{
          current: null,
          last: null
        }
      }
    },

    methods:{
      getApi(page){
        this.pages
        axios.get(this.urlApi + "?page=" + page)
        .then(res => {
          this.posts= res.data.data;
          this.pagination = {
            current: res.data.current_page,
            last: res.data.last_page
          }
        })
      }
    },

    mounted(){
      this.getApi(1);
    }
}
</script>

<style lang="scss" scoped>

</style>