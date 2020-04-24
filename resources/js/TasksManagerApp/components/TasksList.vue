<template>
  <div class="container">
    <h1>All Tasks</h1>
    <ul class="list-group">
      <li
        v-for="(task, index) in tasks"
        :key="index"
        class="list-group-item d-flex justify-content-between"
      >
        {{ task.name }}
        <div>
          <router-link class="btn btn-dark" :to="`/single/${task.id}`">Go to task</router-link>
          <router-link class="btn btn-warning" :to="`/edit-task/${task.id}`">edit task</router-link>
          <div @click="removeTask(task.id)" class="button btn btn-danger">remove task</div>
        </div>
      </li>
    </ul>
    <router-link class="btn btn-primary mt-2" to="/add-new">Add new task</router-link>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "TasksList",
  data() {
    return {
      tasks: []
    };
  },
  methods: {
    getTasks() {
      const tasksUrl = "/tasks/get-all";
      axios.get(tasksUrl).then(response => {
        this.tasks = response.data;
      });
    },

    removeTask(taskId) {
      if (confirm("remove task?")) {
        const taskRemoveUrl = `/tasks/delete/${taskId}`;
        axios.post(taskRemoveUrl).then(response => {
          this.getTasks();
        });
      }
    }
  },
  created() {
    this.getTasks();
  }
};
</script>
