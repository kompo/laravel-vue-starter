require('./bootstrap');

//window.Vue = require('vue');
import Vue from 'vue/dist/vue'
window.Vue = Vue

//Requiring vue-kompo after Vue has been set
require('vue-kompo');

//booting Vue
const app = new Vue({ el: '#app' });