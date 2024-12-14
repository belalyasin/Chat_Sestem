import './bootstrap';
import './js/bootstrap';
import './js/chat';
import './js/dropdown';
import './js/helper';
import './js/modal';
import './js/select2';
import './js/search';
import './js/mobile-menu';
import './js/show-modal';
import '../css/app.css';
import '../../public/dist/js/app.js';
import '../../public/dist/css/app.css';
// import './js/toast';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});

// import {createApp, h} from 'vue'
// import {createInertiaApp} from '@inertiajs/vue3'
// import {resolvePageComponent} from 'laravel-vite-plugin/inertia-helpers';
// import Index from './Pages/Conversations/Index.vue';
// createInertiaApp({
//     resolve: name => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
//     setup({el, App, props, plugin}) {
//         createApp({render: () => h(App, props)})
//             .use(plugin)
//             .component('Index', Index) // if using a layout component
//             .mixin({methods: {route}})
//             .mount(el);
//     },
// });
