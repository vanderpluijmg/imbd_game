<?php
require "Model.php";
class Screenshot extends Model
{
    function getAllSC(){
        $sql = "SELECT GAMES.GAME_ID, SCREENSHOTS.SCREENSHOT_URL
FROM GAMES
JOIN SCREENSHOTS ON GAMES.GAME_ID= SCREENSHOTS.GAME_ID
ORDER BY RAND()
LIMIT 9;";
        return $this->executeRequest($sql);
    }
}