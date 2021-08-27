<?php
require "Model/Home.php";

/**
 * Gets home page layout and queries;
 */
function getHome(){
    $sqlQueries = new Home();
    $topGames = $sqlQueries->getPopularGames();
    $get02games = $sqlQueries->get02TopStrategyGames();
    $get35games = $sqlQueries->get35TopStrategyGames();
    require "View/Home.php";
}

/**
 * Gets games layout page and queries
 */
function getGame(){
    $sqlQueries = new Home();
    $id = isset($_GET["id"])? $_GET["id"] : 0;
    $singleGame= $sqlQueries->getGame($id);
    $screenshots=$sqlQueries->getScreenShotGame($id);
    $platforms = $sqlQueries->getPlatforms($id);
    require "View/Game.php";
}

/**
 * Gets search page and queries
 */
function search(){
    $sqlQueries = new Home();
    if (isset($_GET['query']) && $_GET['query']!= null) {
        $result = $sqlQueries->search($_GET['query']);
        echo json_encode($result, JSON_PRETTY_PRINT);
    } else {
        echo json_encode(null);
    }
}

/**
 * Gets filter page and queries
 */
function filter(){
    $sqlQueries = new Home();
    if (isset($_GET['genre'])) {
        $result = $sqlQueries->filter($_GET['genre']);
        echo json_encode($result);
    } else {
        echo json_encode(null);
    }
}
function screenshots(){
    $sqlQueries = new Home();
    $result = $sqlQueries->getAllSC();
    echo json_encode($result);
}


/**
 * Gets error page
 */
function error(){
    require "View/viewError.php";
}

/**
 * Gets search game layout
 */
function searchGame(){
    require "View/search.php";
}
