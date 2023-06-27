const audio_nya = new Audio("./audio/audio.mp3");
function play_audio() {
   if (!audio_nya.paused) audio_nya.pause();
   else audio_nya.play();   
}