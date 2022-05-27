window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Vue = require('vue');

import Vue from 'vue';
import VueRouter from 'vue-router';
import App from './views/App';
Vue.use(VueRouter);

import PostList from './components/PostList';
import Post from './components/Post';
import AboutUs from './components/AboutUs';



const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path:'/',
            name:'home',
            component:PostList,
        },
        {
            path:'/about-us',
            name:'about-us',
            component:AboutUs,
        },
    ]
});

const app = new Vue({
    el: '#root',
    render: h => h(App),
    router
});
