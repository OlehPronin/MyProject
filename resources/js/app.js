import { createApp } from 'vue';
import App from './App.vue';

// Создание приложения Vue.js
createApp(App).mount("#app");

// Импорт и инициализация CKEditor
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

document.addEventListener('DOMContentLoaded', () => {
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
});
