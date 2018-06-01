import Laroute from './commons/laroute';
import Vue from 'vue';

window.Vue     = Vue;
window.laroute = Laroute;
// components Vue
require('./components/bootstrap');
// bootstrap
require('./bootstrap');
require('./vue/bootstrap');
require('./jquery.scrollTo-master/jquery.scrollTo.min');
require('./jquery.localScroll-master/jquery.localScroll.min');
require('./jquery.mask.min');
require('./script');
$('html, body').localScroll();


window.App = new Vue({
    el: '#app',
    data() {
        return {}
    },
    created() {
       console.log('app created');
    }
});



