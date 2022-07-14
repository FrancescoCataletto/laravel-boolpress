import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
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
        }
    ]
});

export default router;