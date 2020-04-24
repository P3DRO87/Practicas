import Vue from "vue";
import TasksManagerApp from "./TasksManagerApp";
import VueRouter from "vue-router";
import routes from "./routes.js";

Vue.use(VueRouter);

const router = new VueRouter({
  routes
});

new Vue({
  el: "#tasksManagerApp",
  render: h => h(TasksManagerApp),
  router
});
