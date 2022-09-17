import { createApp } from 'vue';
import ExampleComponent from './components/ExampleComponent.vue';
import ExampleDate from './components/ExampleDate.vue';

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
