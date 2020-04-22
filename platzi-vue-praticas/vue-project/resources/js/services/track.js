import musicService from "./api-tracks";

const trackService = {};
trackService.search = function(q) {
  const type = "track";

  return musicService
    .get("/search", {
      params: { q, type },
    })
    .then((response) => response.data);
};

export default trackService;
