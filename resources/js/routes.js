import VueRouter from 'vue-router';

let routes = [
    {
        path: '/',
        component: require('./views/Home').default
    }
];

export default new VueRouter({
    routes,
    linkActiveClass: 'is-active'
});


