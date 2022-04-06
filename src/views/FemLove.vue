<template>
  <div class="first">
    <img src = "img/f.jpg" width= "500" height="500">
  </div>
  <div class="audio">
      <audio src="audio/P.mp3" controls></audio>
      <audio src="audio/S.mp3" controls></audio>
      <audio src="audio/V.mp3" controls></audio>
  </div>
</template>


// <script>
// import Comment from '@/index.php'


 </script>



<style lang="sass">
.first
  display: block
  justify-content: center
  align-items: center
  height: 50vh

.audio
  margin-top: 70px
  display: flex
  flex-direction: column

.audio audio
  margin-top:50px
</style>