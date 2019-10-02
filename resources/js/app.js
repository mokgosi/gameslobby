require('./bootstrap');
import router from './routes'

import ContactForm from './views/Home.vue';
Vue.component('Home', require('./views/Home.vue').default);
new Vue({
    el: '#app',
    router,

})

