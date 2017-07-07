const router = new VueRouter();
router.map({
    '/': {
        name: 'index',
        component: require('./components/Index.vue')
    },
    '/category': {
        name: 'category',
        component: require('./components/category.vue')
    },
    '/upload': {
        name: 'upload',
        component: require('./components/upload.vue')
    }

});

var App = Vue.extend({});
router.start(App, '#app');


