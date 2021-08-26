/**
 * Searches games in function of input.
 * @param name Input of user into form.
 */
function search(name) {
    var settings = {
        "url": "./index.php?action=search&query=" + name,
        "method": "GET",
        "timeout": 0,

    };
    $.ajax(settings).done(function (response) {
        displayResult(JSON.parse(response));
    });
}

/**
 * Displays games in function of JSON result from webserver
 * @param results
 */
function displayResult(results) {
    $('#res').empty();
    if (results !== null) {
        for (var i = 0; i < results.length; ++i) {
            $('#res').append
            (`<a href="./index.php?action=getGame&id=${results[i].GAME_ID}"><img src="${results[i].GAME_COVER_URL}"></a>`)
        }
    }
}