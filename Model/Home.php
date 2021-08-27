<?php
require "Model.php";
class Home extends Model {
    /**
     * Sql queries for popular games.
     * @return array|false
     */
    function getPopularGames(){
        $sql = "SELECT DISTINCT GAMES.GAME_NAME, GAMES.GAME_COVER_URL, GAMES.GAME_ID
FROM GAMES LIMIT 8;";
        return $this->executeRequest($sql);
    }
    function getAllSC(){
        $sql = "SELECT GAMES.GAME_ID, SCREENSHOTS.SCREENSHOT_URL
FROM GAMES
JOIN SCREENSHOTS ON GAMES.GAME_ID= SCREENSHOTS.GAME_ID
ORDER BY RAND()
LIMIT 9;";
        return $this->executeRequest($sql);
    }

    /**
     * Sql queries for top row of default gallery games.
     * @return array|false
     */
    function get02TopStrategyGames (){
        $sql='SELECT *
FROM GAMES
JOIN GAME_GENRE ON GAMES.GAME_ID=GAME_GENRE.GAME_ID
JOIN GENRE ON GAME_GENRE.GENRE_ID = GENRE.GENRE_ID
WHERE GENRE.GENRE_NAME LIKE "strategy"
ORDER BY GAMES.GAME_AGGREGATED_RATING DESC
LIMIT 3';
        return $this->executeRequest($sql);

    }
    /**
     * Sql queries for bottom row of default gallery games.
     * @return array|false
     */
    function get35TopStrategyGames (){
        $sql='SELECT *
FROM GAMES
JOIN GAME_GENRE ON GAMES.GAME_ID=GAME_GENRE.GAME_ID
JOIN GENRE ON GAME_GENRE.GENRE_ID = GENRE.GENRE_ID
WHERE GENRE.GENRE_NAME LIKE "strategy"
ORDER BY GAMES.GAME_AGGREGATED_RATING DESC
LIMIT 3,3';
        return $this->executeRequest($sql);

    }

    /**
     * Sql queries to get game.
     * @return array|false
     */
    function getGame($id){
        $sql = "SELECT
    GAME.GAME_NAME,GAME.GAME_SUMMARY, GAME.GAME_AGGREGATED_RATING,GAME.GAME_COVER_URL, GAME_RELEASE.RELEASE_DATE, COMPANY.COMPANY_NAME, GENRE.GENRE_NAME, SCREENSHOTS.SCREENSHOT_URL
FROM
    `GAMES` AS GAME
    -- game release
JOIN GAME_RELEASE ON GAME.GAME_ID = GAME_RELEASE.GAME_ID
    -- company name
JOIN DEVELOPER ON GAME.GAME_ID = DEVELOPER.GAME_ID
JOIN COMPANY ON DEVELOPER.COMPANY_ID = COMPANY.COMPANY_ID
    -- genre
JOIN GAME_GENRE ON GAME.GAME_ID = GAME_GENRE.GAME_ID
JOIN GENRE ON GAME_GENRE.GENRE_ID = GENRE.GENRE_ID
	-- screenshots 
JOIN SCREENSHOTS ON GAME.GAME_ID = SCREENSHOTS.GAME_ID
WHERE
    GAME.GAME_ID = ".$id."
    GROUP BY GAME.GAME_NAME;";
        return $this->executeRequest($sql);
    }

    /**
     * Sql queries to search for a game.
     * @return array|false
     */
    function search($query){
        $sql = 'SELECT GAMES.GAME_NAME, GAMES.GAME_COVER_URL, GAMES.GAME_ID
        FROM GAMES
            WHERE GAMES.GAME_NAME LIKE "' . $query .'%"';
        return  $this->executeRequest($sql);
    }
    /**
     * Sql queries to filter games in function of genre.
     * @return array|false
     */
    function filter ($genre){
        $sql='SELECT *
FROM GAMES
JOIN GAME_GENRE ON GAMES.GAME_ID=GAME_GENRE.GAME_ID
JOIN GENRE ON GAME_GENRE.GENRE_ID = GENRE.GENRE_ID
WHERE GENRE.GENRE_NAME LIKE"' .$genre.'"
ORDER BY GAMES.GAME_AGGREGATED_RATING DESC
LIMIT 6'
;
        return $this->executeRequest($sql);
    }
    /**
     * Sql queries to get screenshot url of game.
     * @return array|false
     */
    function getScreenShotGame($id){
        $sql ='SELECT SCREENSHOTS.SCREENSHOT_URL
FROM GAMES
JOIN SCREENSHOTS ON GAMES.GAME_ID = SCREENSHOTS.GAME_ID
WHERE GAMES.GAME_ID = '.$id.'
GROUP BY SCREENSHOTS.SCREENSHOT_URL';
        return $this->executeRequest($sql);
    }

    /**
     * Sql queries to get platoform.
     * @return array|false
     */
    function getPlatforms($id){
        $sql ='SELECT PLATFORM.PLATFORM_NAME
FROM GAMES
JOIN GAME_PLATFORM ON GAMES.GAME_ID = GAME_PLATFORM.GAME_ID
JOIN PLATFORM ON GAME_PLATFORM.PLATFORM_ID = PLATFORM.PLATFORM_ID
WHERE GAMES.GAME_ID ='.$id.' ;';
        return $this->executeRequest($sql);
    }

}
