const router = new VueRouter();
router.map({
    '/': {
        name: 'index',
        component: require('./components/Index.vue')
    }
    
});

var App = Vue.extend({});
router.start(App, '#app');
