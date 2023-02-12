require('./bootstrap');

import { createApp} from 'vue';

import App from './vue/app';
import Admin from './vue/components/admin.vue';

createApp(App).mount("#app");
createApp(Admin).mount("#admin");