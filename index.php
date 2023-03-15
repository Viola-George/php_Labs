<?php
require_once './vendor/autoload.php';

$parameter = isset($_GET["page"]) ? $_GET["page"] : "";

$error="";
if (!empty($_POST)) {

    $error = validate_form();
    
    if(empty($error)){
       save_to_file();
       die();
    }   
}

if ($parameter === "users"){
    require_once("views/users.php");
}   
else{
    require_once("views/form.php");
}
