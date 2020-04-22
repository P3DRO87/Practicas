<template>
  <div class="container-fluid mt-5">
    <section class="section">
      <nav class>
        <div class="container">
          <div class="row">
            <div class="col-lg-12 d-flex justify-content-between">
              <input
                v-model="searchQuery"
                type="text"
                class="form-control w-60 mr-2"
                placeholder="Search Track"
              />
              <button @click="search" class="btn btn-dark mr-2">Buscar</button>
              <button class="btn btn-danger">X</button>
            </div>
          </div>
          <div class="row mt-5">
            <div v-for="(item, index) in tracks" :key="index" class="col-lg-4 mb-3">
              <Track :track="item" />
            </div>
            <div class="w-50">
              <small class="ml-3">{{ serchMessage }}</small>
            </div>
          </div>
        </div>
      </nav>
    </section>
  </div>
</template>

<script>
import trackService from "../services/track";
import Track from "../layouts-components/Track";

export default {
  name: "Home",

  components: {
    Track
  },

  data() {
    return {
      tracks: [],
      searchQuery: ""
    };
  },

  computed: {
    serchMessage() {
      return `Econtrados: ${this.tracks.length}`;
    }
  },

  methods: {
    search() {
      trackService
        .search(this.searchQuery)
        .then(response => (this.tracks = response.tracks.items));
    }
  }
};
</script>
