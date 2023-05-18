import { createRouter, createWebHistory } from 'vue-router'
import Terminal from "@/components/Terminal/Terminal.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/admin/order/terminal',
      name: 'terminal',
      component: Terminal
    }
  ]
})

export default router
