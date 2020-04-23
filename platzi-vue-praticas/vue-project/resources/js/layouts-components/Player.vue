<template>
  <div class="content d-flex justify-content-center align-items-start">
    <div>
      <div class="d-flex justify-content-center">
        <img
          class="rounded img-fluid track-hero-img"
          v-if="track && track.album"
          :src="track.album.images[0].url"
          alt
        />
      </div>
      <div class="d-flex justify-content-center">
        <h5 class="mt-4">
          <b>{{track.name}}</b>
        </h5>
      </div>
      <div class="d-flex justify-content-center">
        <audio controls :src="track.preview_url"></audio>
      </div>
    </div>
  </div>
</template>

<script>
import { mapState } from "vuex";
export default {
  name: "Player",

  computed: {
    ...mapState(["track"])
  }
};
</script>
