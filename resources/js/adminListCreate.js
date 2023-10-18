/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({
    methods:{
        applySelected(items_selected){
            console.log(items_selected);
        }
    }
});

import ExampleComponent from './components/ExampleComponent.vue';
//import Loader from "./components/opencomponent/loader/Loader.vue";
import Progress from "./components/opencomponent/progress/Progress.vue";
//import FileUploader from "./components/opencomponent/file_upload/FileUploader.vue";
import Gallery from "./components/opencomponent/gallery_dialog/Gallery.vue";


app.component('example-component', ExampleComponent);
//app.component('loader', Loader);
//app.component('progress',Progress);
//app.component('fileuploader',FileUploader);
app.component('gallery',Gallery);
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#app');
