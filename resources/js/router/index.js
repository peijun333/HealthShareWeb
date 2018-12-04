import Vue from 'vue'
import Router from 'vue-router'
Vue.use(Router)

//
import switch_component from '../components/SwitchComponent.vue'

//
Vue.component('switch-component', switch_component)

//
import calorie  from '../components/CalorieComponent.vue'
import record   from '../components/RecordComponent.vue'
import daily   from '../components/DailyComponent.vue'

export default new Router({
  mode: 'history',
  routes: [
    { path: '/calorie', name: 'calorie', component: calorie, meta: {name: 'カロリー計算', icon: 'home'}},
    { path: '/record',  name: 'record',  component: record,  meta: {name: 'カロリー記録', icon: 'home'}},
    { path: '/daily',  name: 'daily',  component: daily,  meta: {name: '体重・血圧・体脂肪率', icon: 'home'}},
  ],
})