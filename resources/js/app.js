require('./bootstrap');

window.Vue = require('vue');

//Requiring vue-kompo after Vue has been set
require('vue-kompo');

//booting Vue
const app = new Vue({ el: '#app' });