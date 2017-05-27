<?php

   /*this section should include all the imports , thus making the
   import thing not much on all file, instead of writting require on all files
   the require is written here and file included in each file.
   */
   require_once("SessionManager.php");
   require_once("Database.php");
   require_once("FileHandler.php");
   require_once("SuperGlobal.php");
   require_once("BcryptPasswordEncoder.php");

   /*
   Bellow this comment all constants should be placed, and hence will be imported on all
   files automatic once this file is stated as required.
   */

   DEFINE("HOST","localhost");
   DEFINE("USERNAME","haikarose");
   DEFINE("PASSWORD","mkhaikarose");
   DEFINE("DATABASE_NAME","dbxhaikarose");
   DEFINE("FILE_UPLOAD_DIRECTORY","/var/www/html/folder");

?>
