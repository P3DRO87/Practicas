<template>
  <div class="container">
    <div class="form-group">
      <label for="exampleInputEmail1">Task Name</label>
      <input
        v-model="newItem.title"
        type="text"
        class="form-control"
        id="taskName"
        placeholder="Task Name"
      />
      <small
        id="emailHelp"
        class="form-text text-muted"
      >We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="taskDescription">Task Description</label>
      <textarea v-model="newItem.description" class="form-control" id="taskDescription"></textarea>
    </div>

    <div class="loop-container">
      <ul class="list-group mb-2" v-for="(item, index) in data" :key="index">
        <li class="list-group-item shadow p-3 mb-5 bg-white rounded">
          <b>title:</b>
          {{newItem.title}}
          <hr />
          <b>description:</b>
          {{newItem.description}}
        </li>
      </ul>
      <div
        v-show="show"
        class="alert alert-success w-50"
        role="alert"
      >Succesfuly! Task created plaease check the home page</div>
    </div>
    <button @click="addNewTask" class="btn btn-primary mt-2">Add Task</button>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "AddNewTask",

  data() {
    return {
      data: [],

      show: false,

      newItem: {
        title: "",
        description: ""
      },

      taskHomeUrl: "/tasks/create"
    };
  },

  methods: {
    addNewTask(e) {
      if (!this.newItem.title && !this.newItem.description) {
        alert("please, type something D:");
        e.preventDefault();
      } else {
        axios
          .post(this.taskHomeUrl, {
            name: this.newItem.title,
            description: this.newItem.description
          })
          .then(response => {
            // response.data;
          });
        this.newItem.title = "";
        this.newItem.description = "";

        this.show = true;
        setInterval(() => {
          this.show = false;
        }, 5000);
      }
    }
  }
};
</script>
