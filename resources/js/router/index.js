import { createRouter, createWebHistory } from 'vue-router'
import Registration from '../Viwes/Registration.vue'
import MainViwe from '../Viwes/MainViwe.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    // {
    //   path: '/',
    //   name: 'home',
    //   component: HomeView
    // },
    /*{
      path: '/',
      name: 'registre',
      component: Registration
    },*/
    {
      path: '/admin/order/terminal',
      name: 'menu',
      component: MainViwe
    }

  ]
})

export default router
