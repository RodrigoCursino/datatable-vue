require('./shared/_register');
Vue.component('example', require('./Example'));

// Partials
Vue.component('top-header', require('./partials/top-header'));
Vue.component('main-body', require('./partials/main-body'));

// Doacoes
Vue.component('doacoes-list', require('./doacoes/doacoes-list'));
Vue.component('doador-cadastro', require('./doacoes/doador-cadastro'));
