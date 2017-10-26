<?php
if(isset($_POST['audio'])){
  $audio = $_POST['audio'];
  $audio = str_replace('data:audio/wav;base64,', '', $audio);
  $decoded = base64_decode($audio);
  $file_location = "/usr/local/freeswitch/recordings/recorded_audio.wav";
 
  file_put_contents($file_location, $decoded);
}
?>