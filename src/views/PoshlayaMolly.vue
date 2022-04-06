<template>
  <div class="second">
    <img src = "img/p.jpg" width= "500" height="500">
  </div>
  <div class="audio">
      <audio src="audio/D.mp3" controls></audio>
      <audio src="audio/K.mp3" controls></audio>
      <audio src="audio/N.mp3" controls></audio>
  </div>
</template>



<style lang="sass">
.second
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