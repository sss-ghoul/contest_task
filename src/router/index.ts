import { createRouter, createWebHistory, RouteRecordRaw } from 'vue-router'
import HomeView from '../views/FemLove.vue'

const routes: Array<RouteRecordRaw> = [
  {
    path: '/',
    name: 'fem.love',
    component: HomeView
  },
  {
    path: '/poshlaya.molly',
    name: 'poshlaya.molly',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/PoshlayaMolly.vue')
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
