<?php

header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
function url_actual(){
  if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $url = "https://"; 
  }else{
    $url = "http://"; 
  }
  echo $url . $_SERVER['HTTP_HOST'] .  $_SERVER['REQUEST_URI'];
 }
  //Se utiliza para mantener el anterior option en el selectlist
  function optionSelected($value , $comboBox){
      if (isset($_POST) && $_POST[$comboBox]==$value || isset($_GET) && $_GET[$comboBox]==$value)  {
          echo " selected";
      }
  }
 ?>