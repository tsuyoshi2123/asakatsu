import { createApp } from 'vue';
import ExampleComponent from './components/ExampleComponent.vue';
import ExampleDate from './components/ExampleDate.vue';
import SelectPicture from './components/SelectPicture.vue';

createApp({
    components: {
        ExampleComponent
    }
}).mount('#list-tag');

createApp({
    components: {
        ExampleDate
    }
}).mount('#date-current');

createApp({
    components: {
        SelectPicture
    }
}).mount('#othrer-wrap');
