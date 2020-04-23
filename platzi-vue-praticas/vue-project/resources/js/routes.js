import Home from "./views/Home";
import TrackDetail from "./layouts-components/TrackDetail";

const routes = [
  {
    path: "/",
    component: Home,
    name: "Home",
  },
  {
    path: "/track/:id",
    component: TrackDetail,
    name: "TrackDetail",
  },
];

export default routes;
