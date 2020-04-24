import Vue from "vue";
import Vueapp from "./Vueapp.vue";
import VueRouter from "vue-router";
import routes from "./routes";
import store from "./store";
import eventBus from "./event-bus";
import msToMm from "./filter/ms-to-mm";
import blur from "./directives/blur";

Vue.use(VueRouter);
Vue.use(eventBus);
Vue.use(msToMm);
Vue.use(blur);

const router = new VueRouter({
  routes,
});

new Vue({
  el: "#vueApp",
  render: (h) => h(Vueapp),
  store,
  router,
  mode: "history",
});
