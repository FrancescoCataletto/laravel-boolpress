<template>
  <div>
    <h1>{{post.title}}</h1>
    <h3>Categoria: {{post.category.name}}</h3>
    <p>{{post.text}}</p>
    <a href="http://127.0.0.1:8000/blog">GO BACK</a>
  </div>
</template>

<script>
export default {
    name: 'PostComponent',
    data(){
        return{
            post: {
                title: '',
                text:'',
                category:'',
                tags:[]
            },

            apiUrl: "/api/index"

        }
    },

    methods:{
        getApi(){
            axios.get(this.$route.params.slug)
            .then(res => {
                console.log(res.data.data)
                this.post = res.data.data
            })
        }
    },

    mounted(){
        this.getApi()
    }
}
</script>

<style>

</style>