import Vue from 'vue'
import VueRouter from 'vue-router'
import Title from './views/Title.vue'
import First_Setting from './views/First_Setting.vue'
import Score from './views/Score.vue'
import Setting from './views/Setting.vue'
import Notice from './views/Notice.vue'
import Add_Form from './components/Add_Form.vue'
import NotFound from './views/NotFound.vue'

Vue.use(VueRouter)

const routes = [
    {
      path: '/',
      name: 'title',
      component:Title
    },
    {
      path: '/first_setting',
      name: 'first_setting',
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
      path: '/add_form',
      name: 'add_form',
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