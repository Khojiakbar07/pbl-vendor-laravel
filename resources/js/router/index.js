import { createRouter, createWebHistory } from 'vue-router'
import Registration from '../Viwes/Registration.vue'
import MainViwe from '../Viwes/MainViwe.vue'
import Terminal from "@/components/Terminal/Terminal.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/admin/order/terminal',
      name: 'menu',
      component: MainViwe
    },
    {
      path: '/admin/order/terminal/tailwind',
      name: 'terminal',
      component: Terminal
    }

  ]
})

export default router
