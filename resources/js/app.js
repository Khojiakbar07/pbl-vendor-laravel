import './bootstrap';

/*import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();*/

import {createApp} from 'vue'
import './style.css'
import App from './App.vue'
import router from './router'


/* import the fontawesome core */
import { library } from '@fortawesome/fontawesome-svg-core'

/* import font awesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

/* import specific icons */
import { faAppleWhole, faArrowLeft, faBars, faBasketShopping, faBottleWater, faCarrot,faCircleXmark,faPlus,faRocket, faRotateLeft, faUserSecret } from '@fortawesome/free-solid-svg-icons'



/* add icons to the library */
library.add(faArrowLeft,faUserSecret,faBasketShopping,faRocket,faAppleWhole,faCarrot,faBottleWater,faBars,faCircleXmark,faPlus,faRotateLeft)


createApp(App).use(router).component('font-awesome-icon', FontAwesomeIcon).mount('#app')


//createApp(App).mount("#app")
