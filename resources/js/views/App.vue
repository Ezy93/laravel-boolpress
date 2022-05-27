<template>
    <div>
        <Header/>
        <router-view></router-view>

    </div>
</template>

<script>
import Header from '../components/Header.vue';
import PostList from '../components/PostList.vue';


export default {
    name: 'App',
    components: {
    PostList,
    Header,

},
}
</script>

<style>

</style>
