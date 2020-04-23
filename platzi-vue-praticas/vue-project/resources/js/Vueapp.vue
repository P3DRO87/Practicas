<template>
  <div class="app">
    <Header />
    <transition name="fade" mode="out-in">
      <router-view></router-view>
    </transition>
    <Footer />
  </div>
</template>

<script>
import Header from "./layouts-components/Header";
import Footer from "./layouts-components/Footer";
export default {
  name: "VueInstance",

  components: {
    Header,
    Footer
  }
};
</script>

<style lang="scss">
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

