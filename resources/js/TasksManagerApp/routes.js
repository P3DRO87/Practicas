import TasksList from "./components/TasksList";
import SingleTask from "./components/SingleTask";
import AddNewTask from "./components/AddNewTask";
import EditTask from "./components/EditTask";

const routes = [
  {
    path: "/",
    component: TasksList,
    name: "Tasks List"
  },
  {
    path: "/single/:id",
    component: SingleTask,
    name: "Single Task"
  },
  {
    path: "/add-new",
    component: AddNewTask,
    name: "Add New Task"
  },
  {
    path: "/edit-task/:id",
    component: EditTask,
    name: "Edit Task"
  }
];

export default routes;
