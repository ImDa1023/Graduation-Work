import Router from 'vue-router'
import Title from './views/Title.vue'
import Form from './views/Form.vue'
import NotFound from './views/NotFound.vue'
import List from './views/List.vue'
import Details from './views/Details.vue'

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'title',
      component:Title
    },
    {
      path: '/form',
      name: 'form',
      component: Form
    },
    {
      path: '*',
      component: NotFound
    },
    {
      path: '/list',
      name: 'list',
      component: List   
    },
    {
      path: '/details',
      name: 'details',
      component: Details
    }
  ]
});