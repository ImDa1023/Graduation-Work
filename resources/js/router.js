import Router from 'vue-router'
import Title from './views/Title.vue'
import First_Setting from './views/First_Setting.vue'
import List from './views/List.vue'
import Setting from './views/Setting.vue'
import Add_Form from './views/Add_Form.vue'
import Details from './views/Details.vue'
import NotFound from './views/NotFound.vue'

export default new Router({
  mode: 'history',
  routes: [
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
      path: '/list',
      name: 'list',
      component: List   
    },
    {
      path: '/setting',
      name: 'setting',
      component: Setting
    },
    {
      path: '/add_form',
      name: 'add_form',
      component: Add_Form
    },
    {
      path: '/details',
      name: 'details',
      component: Details
    },
    {
      path: '*',
      component: NotFound
    },
  ]
});