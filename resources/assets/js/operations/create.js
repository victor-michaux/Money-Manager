require('../bootstrap');
window.Vue = require('vue');

Vue.component('operation-form', require('../components/operations/OperationForm.vue'));

const app = new Vue({
    el: '#app',
});