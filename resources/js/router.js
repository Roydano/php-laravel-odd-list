import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './pages/Home';
import Posts from './pages/Posts';
import DettagliPost from './pages/DettagliPost';
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
        },
        {
            path: '/tutti-i-post/:slug',
            name: 'dettagli',
            component: DettagliPost
        }
    ]
});

export default router;