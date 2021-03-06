import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import HomeComponent from './components/pages/HomeComponent';
import AboutComponent from './components/pages/AboutComponent';
import BlogComponent from './components/pages/BlogComponent';
import ContactsComponent from './components/pages/ContactsComponent';
import PostComponent from './components/pages/PostComponent';

const router = new VueRouter({
    mode: 'history',
    // oppure linkExactActiveClass: 'active'
    routes:[
        {
            path: '/',
            name: 'home',
            component: HomeComponent
        },
        {
            path: '/chi-siamo',
            name: 'about',
            component: AboutComponent
        },
        {
            path: '/blog',
            name: 'blog',
            component: BlogComponent
        },
        {
            path: '/contatti',
            name: 'contacts',
            component: ContactsComponent
        },
        {
            path: '/post/:slug',
            name: 'post',
            component: PostComponent
        }
    ]
});

export default router;