<template>
  <div v-if="track && track.album" class="container">
    <div class="row mt-3">
      <div class="col-lg-3">
        <div class="image-container">
          <img class="card-img-top" :src="track.album.images[0].url" alt />
          <div class="mt-2">
            <button @click="selectTrack" class="btn btn-dark">Play</button>
            <router-link class="btn btn-dark text-white" to="/">Back to Home</router-link>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="card mb-3">
          <div class="card-header">
            <h4>{{track.name}}</h4>
          </div>
          <div class="card-body">
            <p v-for="(item, index) in track" :key="index" class="card-title">
              {{item}}:&nbsp;
              <span>{{index}}</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import trackService from "../services/track";
import trackMixin from "../mixins/track";

export default {
  name: "TrackDetail",

  mixins: [trackMixin],

  data() {
    return {
      track: {}
    };
  },

  created() {
    const id = this.$route.params.id;

    trackService.getById(id).then(response => {
      this.track = response;
    });
  }
};
</script>