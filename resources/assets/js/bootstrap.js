import "./scripts/bootstrap.min"
import "./scripts/SmoothScroll"
import "./scripts/isotope.pkgd.min"
import "./scripts/theia-sticky-sidebar"
import "./scripts/jquery.slicknav"
import "./scripts/owl.carousel"
import "./scripts/main"


window.Vue = require('vue');

window.axios = require('axios');

window.moment=require('moment');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


import VueRouter from 'vue-router'
Vue.use(VueRouter); //telling vue to use this object for routing

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    // console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}
