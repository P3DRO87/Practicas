<template>
  <div class="container d-flex justify-content-center">
    <div class="col mb-4">
      <div class="card">
        <img :src="track.album.images[0].url" class="card-img-top" alt="comming soon :u" />
        <div class="card-body">
          <h5 class="card-title">{{track.name}}</h5>
          <p>
            <b>Artist:</b>
            {{track.artists[0].name}}
          </p>
          <p class="card-text">
            <b>Album:</b>
            {{track.album.name}}
          </p>
          <p>
            <b>Duration:</b>
            {{track.duration_ms}}ms
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Track",

  props: {
    track: { type: Object, required: true }
  }
};
</script>