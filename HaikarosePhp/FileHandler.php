<?php

  require_once("SettingAndApiLoader.php");

  class FileHandler{

    ////this function upload only a single file from the request///
    public static function uploadSingleFile($path,$resource){
        $fileName=$path.((string)(round(microtime(true) * 1000)))
        .str_replace('.','-',uniqid('78442',true))."."
        .pathinfo(basename($_FILES[$resource]["name"]), PATHINFO_EXTENSION);

        if (move_uploaded_file($_FILES[$resource]["tmp_name"],$fileName)) {
            return $fileName;
        }
        return null;

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

     public static function deleteFile($filePath){
       if(unlink($filePath)){
          return true;
       }
       return false;
     }

  }
?>
