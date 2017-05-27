<?php

  require_once("SettingAndApiLoader.php");

  class FileHandler{

    ////this function upload only a single file from the request///
    public static function uploadSingleFile($path,$resource){

      $file=$resource;
      $directoryPath=$path;
      $resource=null;

      $directoryPath.=$resources['name']['tmp'];
      echo "directoryPath ".$directoryPath." the end";
      echo "before this after the end";

      if(move_uploaded_file($resources['tmp_name'][$i],$directoryPath)){
          //insert the url to the database.
          $ext = pathinfo($resources['name'][$i], PATHINFO_EXTENSION);
          $resource=pathinfo($resources['name'][$i],PATHINFO_EXTENSION);
      }else{
          return null;
      }
      return $resourcesList;
    }

    ////this function upload multiple files while returning the url//
     public static function doTheUPloadMultiple($path,$resources){

        $resourcesList=array();
        $fileCount=count($resources['name']);
        $files=$resources;
        print_r($resources);
        $directoryPath=$path;

        if($fileCount>0){
              $resource=null;
              for($i=0;$i<$fileCount;$i++){
                    $directoryPath.=$resources['name'][$i];
                        if(move_uploaded_file($resources['tmp_name'][$i],$directoryPath)){
                              $ext = pathinfo($resources['name'][$i], PATHINFO_EXTENSION);
                              $resource=pathinfo($resources['name'][$i],
                              PATHINFO_EXTENSION);
                         }else{
                              return null;
                         }
                              $resourcesList[]=$resource;
              }

        }
        return $resourcesList;

     }

     //this function is for making sure the files name are unique
     public static function uniqueName(){
         if(file_exists("check.php")){
             uniqueName();
         }
         $name=null;
         return $name;
     }

  }
?>
