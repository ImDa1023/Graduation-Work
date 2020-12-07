import Router from 'vue-router'
import Home from './views/Home.vue'
import Form from './views/Form.vue'
import NotFound from './views/NotFound.vue'
import Test from './views/Test.vue'
import List from './views/List.vue'
import Details from './views/Details.vue'

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
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
      path: '/test',
      name: 'test',
      component: Test
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