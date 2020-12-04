import Router from 'vue-router'
import Home from './views/Home.vue'
import About from './views/About.vue'
import Test from './views/Test.vue'
import List from './views/List.vue'

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/about',
      name: 'about',
      component: About
      },
      {
        path: '/test',
        name: 'test',
        component: Test
      },
      {
        path: '/list',
        name: 'list',
        component:List   
    }
  ]
});