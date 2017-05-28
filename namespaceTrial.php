<?php

  namespace SuperGlobalPhp;

  function post($key){
    $date=new \DateTime();
    echo $date->format("Y-m-d");
    echo"<br/>";
    echo "hello $key";
  }

  function getData($key){
    return $_GET[$key];
  }



?>
