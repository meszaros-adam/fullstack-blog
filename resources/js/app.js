require('./bootstrap')
import Vue from 'vue'
import common from './common'
import store from './store'

Vue.mixin(common)
Vue.component('search', require('./components/search.vue').default)
Vue.component('commentsystem', require('./components/commentSystem.vue').default)
Vue.component('writecomment', require('./components/writecomment.vue').default)

const app = new Vue({
    el: '#app',
    store,
})
