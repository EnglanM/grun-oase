import "./bootstrap";
import "animate.css";

import { createApp } from "vue/dist/vue.esm-bundler.js";
import App from "./App.vue";
import "../css/app.css";
// import "./js_files/animate.js";

const app = createApp(App);

app.mount("#app");
