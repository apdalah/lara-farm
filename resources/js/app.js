/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue';
import Vuetify from 'vuetify';
import VueRouter from 'vue-router';

import 'vuetify/dist/vuetify.min.css';

// import Auth from './auth';

// Vue.prototype.$auth = new Auth(window.user);

Vue.use(VueRouter);
Vue.use(Vuetify);

console.log('users', window.user);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('admin', require('./components/Admin.vue').default);

import Dashboard from './pages/Dashboard';
import Settings from './pages/Settings';
import Users from './pages/Users';
import Activities from './pages/Activities';
import Plants from './pages/Plants';
import Categories from './pages/Categories';

const routes = [

	{
		path: '/admin',
		component: Dashboard
	},

	{
		path: '/admin/users',
		component: Users
	},

	{
		path: '/admin/activities',
		component: Activities
	},

	{
		path: '/admin/plants',
		component: Plants
	},

	{
		path: '/admin/categories',
		component: Categories
	},

	{
		path: '/admin/settings',
		component: Settings
	},

];

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
*/

const app = new Vue({
    el: '#app',
    vuetify : new Vuetify(),
    router : new VueRouter({
    	mode: 'history',
    	routes
    }),
});
