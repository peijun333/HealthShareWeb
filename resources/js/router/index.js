import Vue from 'vue'
import Router from 'vue-router'
Vue.use(Router)

//
import switch_component from '../components/SwitchComponent.vue'
import r_link            from '../components/RouterLink.vue'

//
Vue.component('switch-component', switch_component)
Vue.component('r-link', r_link)

//
import calorie  from '../components/CalorieComponent.vue'
import record   from '../components/RecordComponent.vue'
import daily   from '../components/DailyComponent.vue'

export default new Router({
  mode: 'history',
  routes: [
    {
       path: '/calorie', 
       name: 'calorie', 
       component: calorie, 
       meta: {
         name: 'カロリー計算', 
         icon: 'functions'
        }},
    { 
      path: '/record',  
      name: 'record',  
      component: record,  
      meta: {
        name: 'カロリー記録', 
        icon: 'create'
      }},
    { 
      path: '/daily',  
      name: 'daily',  
      component: daily,  
      meta: {
        name: '体重・血圧・体脂肪率', 
        icon: 'accessibility'
      }},
  ],
})