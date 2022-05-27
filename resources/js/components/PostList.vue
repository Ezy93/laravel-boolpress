<template>
    <div class="container">
        <div class="row mt-3">
            <div class="card mb-3 mx-2 p-0"  v-for="(post, index) in posts" :key="index">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img :src="post.img_url" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{post.title}}</h5>
                            <p class="card-text">{{post.description}}</p>
                            <p class="card-text"><small class="text-muted">{{post.author}}</small></p>
                            <p class="card-text">{{post.created_at}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    name: 'PostList',


    data(){
        return {
            posts: [],
        }
    },

    methods:{
        getPosts(){
            axios.get('http://localhost:8000/api/posts')
            .then((result)=>{
                this.posts = result.data.results.data;
                console.log(this.posts)

            })
            .catch((error)=>{
                console.warn(error);
            });
        }
    },
    created(){
        this.getPosts()
    },

    components: {

    }
}
</script>

<style scoped>
    div.card{
        width: calc(100% / 2 - 2rem);
    }
</style>
