import Vue , { VNode }  from 'vue';
import VueRouter from 'vue-router';
import VueScrollto from 'vue-scrollto';
import VueI18n from 'vue-i18n'
import App from './App.vue';
import HomePage from './components/HomePage.vue';
import Close404 from './components/Close404.vue';
import 'es6-promise/auto';
import english from '../../../resources/lang/en.json';
import russian from '../../../resources/lang/ru.json';
import ukrainian from '../../../resources/lang/uk.json';
import store from '@/store/store';

Vue.use(VueScrollto, {
    container: "body",
    duration: 1000,
    easing: "ease",
    offset: -115,
    force: true,
    cancelable: true,
    onStart: false,
    onDone: false,
    onCancel: false,
    x: false,
    y: true
});

const browserLanguage = navigator.language.split('-')[0];

Vue.use(VueI18n);
const i18n = new VueI18n({
    locale: browserLanguage,
    fallbackLocale: '',
    messages: {
        en: english,
        ru: russian,
        uk: ukrainian
    }
});

Vue.use(VueRouter);
let routes = [
    {
        name: 'ru',
        path: '/ru',
        component: HomePage,
        props: true,
        options:{
            loc:'ru'
        }
    },
    {
        name: 'uk',
        path: '/uk',
        component: HomePage,
        props: true,
        options:{
            loc:'uk'
        }
    },
    {
        name: 'en',
        path: '/en',
        component: HomePage,
        props: true,
        options:{
            loc:'en'
        }
    },
    {
        name: 'error',
        path: '/public/vue',
        redirect: "/"+browserLanguage,
    },
    {
        name: 'home',
        path: '/',
        redirect: "/"+browserLanguage,
    },
    {
        path: '*',
        component: Close404
    },
];

const router = new VueRouter({
    base: '/vue/',
    // base: process.env.BASE_URL,
    mode: 'history',
    routes,
});

Vue.directive('on-scroll', {
    inserted: function (el, binding) {
        let f = function (evt) {
            if (binding.value(evt, el)) {
                window.removeEventListener('scroll', f)
            }
        }
        window.addEventListener('scroll', f)
    }
})

new Vue({
    store,
    router,
    i18n,
    components: {
        'app': App
    },
    render: h => h(App)
}).$mount('#app');
