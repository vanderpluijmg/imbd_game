$(document).ready(function() {
    $("#carouselHome").lightSlider({
        item:4,
        controls: false,
        speed: 400,
        auto: true,
        loop: true
    });
});

/**
 * Filters game in function of genre.
 * @param genre Genre to filter games by.
 */
function filter (genre){
    var settings = {
        "url": "./index.php?action=filter&genre=" + genre,
        "method": "GET",
        "timeout": 0,
    };
    $.ajax(settings).done(function (response) {
        console.log(JSON.parse(response))
        displayGallery(JSON.parse(response));
    });
}

var rowOne = $("#rowOne");
var rowTwo = $("#rowTwo");

/**
 * Displays game gallery
 * @param response Json respons from server
 */
function displayGallery (response) {
    rowOne.empty();
    rowTwo.empty();
    var rowToDisplay=rowOne;
    for (var i = 0; i<6; i++){
        if (i===3){
         rowToDisplay=rowTwo
        }
        rowToDisplay.append('<a href="./index.php?action=getGame&id='+response[i].GAME_ID+'"><img src="'+response[i].GAME_COVER_URL+'"></a>');
    }
}
