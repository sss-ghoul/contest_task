<template>
<div id = "app">
  <Navbar/>
  <router-view/>
  </div>
</template>


<script>
import Navbar from '@/components/NavigationBar.vue'

export default({
  components: {
    Navbar,
  }
})



</script>




<style lang="scss">
@import "~bootstrap/scss/bootstrap";
</style>
