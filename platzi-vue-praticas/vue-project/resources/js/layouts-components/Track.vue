<template>
  <div v-if="track && track.album" class="container d-flex justify-content-center">
    <div class="col mb-3">
      <div class="card">
        <img :src="track.album.images[0].url" class="img-fluid" alt="comming soon :u" />
        <div class="card-body">
          <h5 class="card-title">{{ track.name }}</h5>
          <p>
            <b>Artist:</b>
            {{ track.artists[0].name }}
          </p>
          <p class="card-text">
            <b>Album:</b>
            {{ track.album.name }}
          </p>
          <p>
            <b>Duration:</b>
            {{ track.duration_ms | ms-to-mm }}s
          </p>
          <button class="btn btn-dark" @click="selectTrack">‎Play</button>
          <button @click="goToTrack(track.id)" class="btn btn-dark">Details</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import trackMixin from "../mixins/track";

export default {
  name: "Track",

  mixins: [trackMixin],

  props: {
    track: { type: Object, required: true }
  },

  methods: {
    goToTrack(id) {
      if (!this.track.preview_url) {
        return;
      }
      this.$router.push({ name: "TrackDetail", params: { id } });
    }
  }
};
</script>
