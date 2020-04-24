<template>
  <div class="container">
    <h1>Single Task</h1>
    <p>{{task.description}}</p>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "SingleTask",
  data() {
    return {
      task: [],
      taskId: this.$route.params.id,
      getTaskUrl: "/tasks/single/"
    };
  },
  methods: {
    getTask() {
      axios.get(`${this.getTaskUrl}${this.taskId}`).then(response => {
        if (response.data != "Task Does Not Exist") {
          this.task = response.data;
        } else {
          alert("La tarea no existe upgrated 2.0");
        }
      });
    }
  },
  created() {
    this.getTask();
  }
};
</script>