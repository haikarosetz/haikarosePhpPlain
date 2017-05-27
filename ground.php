<?php
  require_once("./HaikarosePhp/SettingAndApiLoader.php");

  //here is the test for SessionManager , and it worked
  SessionManager::prepare();
  SessionManager::set("id",4);
  echo SessionManager::get("id");

  //here is the test of BcryptPasswordEncoder, and it worked
  echo BcryptPasswordEncoder::isValid("HaikarosePhps",
  BcryptPasswordEncoder::encrypt("HaikarosePhp"));


  $name=SuperGlobal::get("name");
  $age=SuperGlobal::get("age");
  $program=SuperGlobal::get("program");

  $results=SuperGlobal::notNull($name,$age,$program);

  if($results){
      echo "<br/> Every item is not null <br/>";
      echo "hello ".$name." ".$age;
  }else{
      echo "<br/>some items are null<br/>";
  }



  //test for database , not done..

  //test for File handler, not done.

  //test for SuperGlobal, not done.

 ?>
