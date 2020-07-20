<?php
function url_actual(){
  if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $url = "https://"; 
  }else{
    $url = "http://"; 
  }
  echo $url . $_SERVER['HTTP_HOST'] .  $_SERVER['REQUEST_URI'];
 }
 ?>