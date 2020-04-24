<template>
  <div class="container">
    <div class="alert alert-danger w-50" role="alert">
      <div class="d-flex justify-content-between align-items-center">
        <slot class="mt-4" name="body">No results</slot>
        <h1 aria-hidden="true">&times;</h1>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Notification",
};
</script>
