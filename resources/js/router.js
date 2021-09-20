import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './pages/Home';
import Posts from './pages/Posts';
import Contatti from './pages/Contatti';

const router = new VueRouter({

    mode: 'history',
    routes:[
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/tutti-i-post',
            name: 'posts',
            component: Posts
        },
        {
            path: '/contatti',
            name: 'contatti',
            component: Contatti
        }
    ]
});

export default router;