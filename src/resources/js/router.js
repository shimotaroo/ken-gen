import Vue from 'vue'
import VueRouter from 'vue-router'

import Top from './components/Top.vue'
import Result from './components/Result.vue'

Vue.use(VueRouter)

const routes = [
    {
        path: '/',
        name: 'top',
        component: Top
    },
    {
        path: '/result',
        name: 'result',
        component: Result,
        props: true
    }
]

const router = new VueRouter({
    mode: 'history',
    routes
})

export default router