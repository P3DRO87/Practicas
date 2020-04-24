<template>
  <div id="tasksManagerApp" class="main container">
    <transition name="fade" mode="out-in">
      <router-view></router-view>
    </transition>
    <br />
    <router-link class="btn btn-primary" to="/">Back to Home</router-link>
    <br />
    <br />
    <router-link class="btn btn-primary" to="/single">Change page</router-link>
  </div>
</template>

<script>
export default {
  name: "TasksManagerApp"
};
</script>

<style lang="scss">
#productsApp {
  min-height: 100vh;
}
.fade-enter-active,
.fade-leave-active {
  transition-duration: 0.5s;
  transition-property: opacity;
  transition-timing-function: ease;
}

.fade-enter,
.fade-leave-active {
  opacity: 0;
}
</style>
