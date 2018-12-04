require('./bootstrap');

// Vue
import Vue from 'vue'


// Vuetify
import Vuetify from 'vuetify'
import colors from 'vuetify/es5/util/colors'

Vue.use(Vuetify, {
  theme: {
    primary: '#00897B',
    secondary: colors.blue.base,
    accent: colors.amber.base,
  }
});
import 'vuetify/dist/vuetify.min.css'
import 'material-design-icons-iconfont/dist/material-design-icons.css'


// Vue-Router
import router from './router'


// Main app
const app = new Vue({
    el: '#app',
    router,
});