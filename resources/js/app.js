import {createApp} from "vue";
import Home from "./Home.vue";
import axios from "axios";

axios.defaults.withCredentials = true;


createApp(Home).mount('#app')