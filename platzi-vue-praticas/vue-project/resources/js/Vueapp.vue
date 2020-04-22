<template>
  <div class="app">
    <Header />
    <router-view></router-view>
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

<style lang="scss"></style>
