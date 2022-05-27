<template>
    <div>
        <Header/>
        <PostList/>
    </div>
</template>

<script>
import Header from '../components/Header.vue';
import PostList from '../components/PostList.vue';


export default {
    name: 'App',
    components: {
    PostList,

},
}
</script>

<style>

</style>
