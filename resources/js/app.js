/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueSweetalert2 from 'vue-sweetalert2';

Vue.use(VueSweetalert2);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */



const app = new Vue({
    el: '#app',
    data: {
        form: {
            deparatamento: '',
            ciudad: '',
            nombre: '',
            correo: ''
        },
        departamentos: [],
        ciudades: []
    },
    mounted() {

        axios.get("http://localhost:8000/api/departamentos").then(response => {
            console.log(response);
            this.departamentos = response.data;
        }).catch(error => {
            console.log(error);
        });

    },
    methods: {
        cargarCiudades() {
            this.ciudades = this.departamentos[this.form.deparatamento];
        },

       /* cargarDepartamentos() {
            axios.get("http://localhost:8000/api/departamentos").then(response => {
                this.departamentos = response.data;
            }).catch(error => {
                console.log(error);
            });
        },*/

        enviarFormulario:function (e){
            if (this.form.deparatamento && this.form.ciudad && this.form.nombre && this.form.correo) {
                return true;
                /*this.vaciarFormulario();
                this.cargarDepartamentos();*/
            } else {
                e.preventDefault();
                this.$swal({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Completa todos los campos para enviar el formulario',
                });
            }
        },

        vaciarFormulario() {
            this.ciudades = [];
            this.departamentos = [];
            this.form.departamento = "";
            this.form.ciudad = "";
            this.form.nombre = "";
            this.form.correo = "";
        }

    }
});
