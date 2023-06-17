<?php

  try{
  $conn = mysqli_connect('localhost', 'root', '', 'userdb');}
  catch(exception $e){
    echo "Error :".$e;
  }
?>
