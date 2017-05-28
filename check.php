<?php
    require_once("./HaikarosePhp/SettingAndApiLoader.php");
    require_once("namespaceTrial.php");
    SessionManager::prepare();
    echo SessionManager::get("id");
    SessionManager::set("name","value");


    use SuperGlobalPhp as pos;
    pos\post("Haikarose lab");
    echo "<br/>";


?>
