require('./bootstrap');
import router from './routes'

Vue.component('Home', require('./views/Home.vue').default);
new Vue({
    el: '#app',
    router,
})

