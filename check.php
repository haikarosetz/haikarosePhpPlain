<?php
    require_once("./HaikarosePhp/SettingAndApiLoader.php");
    SessionManager::prepare();
    echo SessionManager::get("id");
?>
