import Vue from 'vue'
import VueRouter from 'vue-router'
import Title from './components/pages/Title.vue'
import First_Setting from './components/pages/First-Setting.vue'
import Score from './components/pages/Score.vue'
import Setting from './components/pages/Setting.vue'
import Notice from './components/pages/Notice.vue'
import Add_Form from './components/pages/Add-Form.vue'
import NotFound from './components/pages/NotFound.vue'

Vue.use(VueRouter)

const routes = [
    {
      path: '/',
      name: 'title',
      component:Title
    },
    {
      path: '/first-setting',
      name: 'first-setting',
      component: First_Setting
    },
    {
      path: '/score',
      name: 'score.list',
      component: Score
    },
    {
      path: '/setting',
      name: 'setting',
      component: Setting
    },
    {
      path: '/notice',
      name: 'notice',
      component:Notice
    },
    {
      path: '/add-form',
      name: 'add-form',
      component: Add_Form
    },
    {
      path: '*',
      component: NotFound
    }
]

const router = new VueRouter({
  mode:'history',
  routes
})

export default router