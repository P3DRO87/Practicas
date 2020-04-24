<template>
  <div class="container">
    <h1>Single Task</h1>
    <input v-model="task.name" type="text" class="form-control" placeholder="type a new title" />

    <textarea v-model="task.description" class="form-control" id="taskDescription"></textarea>

    <button @click="editTask(task.id)" class="btn btn-primary">Edit task</button>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "EditTask",
  data() {
    return {
      task: [],
      taskId: this.$route.params.id,
      getTaskUrl: "/tasks/single/",

      newItem: {
        title: "",
        description: ""
      }
    };
  },
  methods: {
    getTask() {
      axios.get(`${this.getTaskUrl}${this.taskId}`).then(response => {
        if (response.data != "Task Does Not Exist") {
          this.task = response.data;
        } else {
          alert("task doesnt exist");
        }
      });
    },

    editTask(taskId) {
      // console.log(this.task);
      console.log("Id shoudl be: ", taskId);
      const editTaskUrl = `/tasks/update/${taskId}`;
      axios
        .post(editTaskUrl, {
          name: this.task.name,
          description: this.task.description
        })
        .then(response => {
          console.log(response);
        });
    }
  },
  created() {
    this.getTask();
  }
};
</script>