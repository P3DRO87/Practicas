<template>
  <div class="container-fluid mt-5">
    <Loader v-if="isLoading" />
    <section v-show="!isLoading" class="section">
      <nav class>
        <div class="container">
          <div class="row">
            <div class="col-lg-12 d-flex justify-content-between">
              <input
                v-model="searchQuery"
                @keyup.enter="search"
                type="text"
                class="form-control w-60 mr-2"
                placeholder="Search Track"
              />
              <button @click="search" class="btn btn-dark mr-2">Buscar</button>
              <button class="btn btn-danger">X</button>
            </div>
            <Notification v-show="showNotification" class="mt-2">
              <p slot="body">No results</p>
            </Notification>
          </div>
          <div class="row mt-5">
            <div v-for="(item, index) in tracks" :key="index" class="col-lg-4 mb-3">
              <Track v-blur="item.preview_url" @select="setSelectedTrack" :track="item" />
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
import Loader from "../shared/Loader";
import Notification from "../shared/Notification";

export default {
  name: "Home",

  components: {
    Track,
    Loader,
    Notification
  },

  data() {
    return {
      tracks: [],
      searchQuery: "",
      isLoading: false,
      selectedTrack: "",
      showNotification: false
    };
  },

  computed: {
    serchMessage() {
      return `Econtrados: ${this.tracks.length}`;
    }
  },

  watch: {
    showNotification() {
      if (this.showNotification) {
        setTimeout(() => {
          this.showNotification = false;
        }, 3000);
      }
    }
  },

  methods: {
    search() {
      if (!this.searchQuery) {
        return;
      }
      this.isLoading = true;

      trackService.search(this.searchQuery).then(response => {
        this.showNotification = response.tracks.total === 0;
        this.tracks = response.tracks.items;
        this.isLoading = false;
      });
    },
    setSelectedTrack(id) {
      this.selectedTrack = id;
    }
  }
};
</script>
