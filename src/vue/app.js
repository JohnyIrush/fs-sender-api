require('./bootstrap');

window.Vue = require('vue').default;


Vue.component('hamperitems', require('./sendfood-components/Plugins/widgets/hamperitems.vue').default);
Vue.component('hamperimages', require('./sendfood-components/Plugins/widgets/hamperimages.vue').default);

const app = new Vue({
    el: '#wrapper',
});
