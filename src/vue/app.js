require('./bootstrap');

window.Vue = require('vue').default;



Vue.component('hamperitems', require('./sendfood-components/Plugins/widgets/hamperitems.vue').default); //render hamper items
Vue.component('hamperimages', require('./sendfood-components/Plugins/widgets/hamperimages.vue').default); //render hamper images
Vue.component('shoporcheckout', require('./sendfood-components/Plugins/widgets/shoporcheckout.vue').default); //
Vue.component('addtocartbutton', require('./sendfood-components/Plugins/widgets/addtocartbutton.vue').default); //add to cart button, add to cart via axios 
Vue.component('cart', require('./sendfood-components/Plugins/widgets/cart.vue').default); //cart products
Vue.component('beneficiarymodal', require('./sendfood-components/Plugins/beneficiaries/beneficiarymodal.vue').default); //beneficiary modal

//packages imports
/*
import Swal from "sweetalert2"; //Swalt Msgs
Vue.use(Swal); //
*/

import { Form, HasError, AlertError } from 'vform';
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

const app = new Vue({
    el: '#wrapper',
});