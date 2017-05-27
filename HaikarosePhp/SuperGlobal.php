<?php

class SuperGlobal{

    public static function post($value){
      $result=null;

      if(isset($_POST[$value])){
         return $_POST[$value];
      }
      return $result;
    }

    public static function get($value){
      $result=null;
      if(isset($_GET[$value])){
         return $_GET[$value];
      }
      return $result;
    }

    public static function file($value){
      $result=null;
      if(isset($_FILES[$value])){
         return $_FILES[$value];
      }
      return $result;
    }

}

?>
