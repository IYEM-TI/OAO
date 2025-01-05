<?php
  $host = "u3r5w4ayhxzdrw87.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
  $user = "s4qpw6q102xue4d8";
  $pass = "	do5ahltm6g0jnnob";
  $bd = "	j65m8y5wb6b076bv";

  $conectar = mysqli_connect($host,$user,$pass,$bd);

  if(!$conectar){
    echo "NO SE PUDO CONECTAR A LA BASE DE DATOS";
  }
?>
