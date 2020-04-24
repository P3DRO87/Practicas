<template>
  <div class="p-3 container-fluid bg-dark text-white">
    <nav class="d-flex justify-content-center navbar navbar-light bg-dark">
      <a class="navbar-brand" href="#">
        <router-link class="text-white" to="/">
          <h4 class="text-white">Search your music :D</h4>
        </router-link>
      </a>
    </nav>
    <Player />
  </div>
</template>

<script>
import Player from "./Player";
export default {
  name: "Header",

  components: {
    Player
  }
};
</script>
