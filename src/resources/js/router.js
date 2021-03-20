import Vue from 'vue'
import VueRouter from 'vue-router'

import Top from './components/Top.vue'
import Result from './components/Result.vue'

Vue.use(VueRouter)

const routes = [
    {
        path: '/',
        component: Top
    },
    {
        path: '/result',
        component: Result
    }
]

const router = new VueRouter({
    mode: 'history',
    routes
})

export default router