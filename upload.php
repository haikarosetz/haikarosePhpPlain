<?php

    require_once("./HaikarosePhp/SettingAndApiLoader.php");

    //File upload test, the upload will return null or path of uploaded file.
   //test-passsed//  echo FileHandler::uploadSingleFile("dfolder/","file");

    //file deletion test.
    //test-passsed//
    /*if(FileHandler::deleteFile(
      "dfolder/149604282975478442592bcd4db80578-69022163.png")){
        echo "file deleted";
      }*/

      //multiple file uploads.
      //test-not done.
      print_r(FileHandler::doTheUPloadMultiple("dfolder/","file"));

 ?>
