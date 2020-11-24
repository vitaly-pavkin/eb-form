require('./bootstrap');

import Vue from 'vue'
import axios from 'axios';

import Form from './components/Form.vue'

Vue.prototype.$http = axios;

const app = new Vue({
    el: '#app',
    components: { VForm: Form }
});

export default app;
