require('./bootstrap');

import Vue from 'vue'
import axios from 'axios';

import VForm from './components/VForm.vue'

Vue.prototype.$http = axios;

const app = new Vue({
    el: '#app',
    components: { VForm }
});

export default app;
