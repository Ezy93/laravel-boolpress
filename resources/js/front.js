window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Vue = require('vue');

import Vue from 'vue';
import VueRouter from 'vue-router';
import App from './views/App';
Vue.use(VueRouter);

/* const router = new VueRouter({
    routes: [
        {
            path:'',
            name:'',
            component:'',
        }
    ]
}); */

const app = new Vue({
    el: '#root',
    render: h => h(App),
    /* router */
});
