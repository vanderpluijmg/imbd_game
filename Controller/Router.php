<?php
require "ControllerActions.php";

/**
 * Control web page in function of action, if no action is found returns default home.
 */
function routeRequest (){
    $action = isset($_GET["action"]) ? $_GET["action"]: "getHome";
    try {
        function_exists($action)? $action() : require "../View/viewError.php";
    } catch (Exception $e) {require "../View/viewError.php";}
}
