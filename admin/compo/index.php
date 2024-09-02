<?php
include_once "vendor/autoload.php";
$getID3 = new getID3;
$ThisFileInfo = $getID3->analyze("file.wav");
echo "<pre>";
// print_r($ThisFileInfo);
echo "Sample Rate : " . $ThisFileInfo['audio']['streams'][0]['sample_rate'];
echo "<br>BitRate : " . $ThisFileInfo['audio']['streams'][0]['bitrate'];
echo "</pre>";
