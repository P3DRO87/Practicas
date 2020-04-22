import trae from "trae";
import configServie from "./config";

const musicService = trae.create({
  baseUrl: configServie.apiUrl,
});

export default musicService;
