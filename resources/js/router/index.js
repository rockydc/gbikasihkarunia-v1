import Vue from 'vue'
import VueRouter from 'vue-router'
import {Home,Event,Komunitas,Pelayanan,Renungan,Persembahan,JemaatBaru,Doa,Develope} from '../views'


Vue.use(VueRouter)

const routes = [
    {
      path: '/',
      name: 'Home',
      component: Home
    },
    {
      path:'/renungan',
      name:'Renungan',
      component:Renungan
    },
    {
      path:'/event',
      name:'Event',
      component:Event
    },
    {
      path:'/pelayanan',
      name:'pelayanan',
      component:Pelayanan
    },
    {
      path:'/komunitas',
      name:'komunitas',
      component:Komunitas
    },
    {
      path:'/jemaatbaru',
      name:'jemaatbaru',
      component:JemaatBaru
    },
    {
      path:'/persembahan',
      name:'persembahan',
      component:Persembahan
    },
    {
      path:'/doa',
      name:'doa',
      component:Doa
    },
    {
      path:'/maintenance',
      name:'maintenance',
      component:Develope
    }

  ]

const router = new VueRouter({
    mode:'history',
    routes
})

export default router