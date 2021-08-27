<?php $title = "Welcome the home page"; ?>
<?php ob_start(); ?>
<p class="title">Popular games at the moment</p>
<div class="wrapperCarousel">
    <div id="carouselHome">
        <?php foreach ($topGames as $games): ?>
            <div class="container">
                <div class="row ">
                    <div class="col ">
                        <a href="./index.php?action=getGame&id=<?= $games['GAME_ID'] ?>"><img style="width: 18vw" src="<?= $games['GAME_COVER_URL'] ?>"></a>
                    </div>
                </div>
                <!--<div class="row">
                    <div class="col">
                        <div class="container-fluid">
                            <div class="row ">
                                <div class="col-7 ">
                                    <p class="textCaption"><?= $games['GAME_NAME'] ?></p>
                                    <p class="textCaption"><?= $games['GENRE_NAME'] ?></p>
                                </div>
                                <div class="col ">
                                    <p class="textCaption"><?= $games['GAME_AGGREGATED_RATING'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->


            </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="underC">
<p class="title titleGallery">Discover new games by genre</p>
<div class="container select">
    <div class="row">
        <div class="col">
            <div class="form-check form-check-inline form-switch">
                <input class="form-check-input" type="radio" name="genre" value="Strategy" onclick="filter(this.value)" id="flexSwitchCheckDefault" checked>
                <label class="form-check-label" for="flexSwitchCheckDefault">Strategy</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-check-inline form-switch">
                <input class="form-check-input" type="radio" name="genre" value="Platform" onclick="filter(this.value)" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">Platform</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-check-inline form-switch">
                <input class="form-check-input" type="radio" name="genre" value="Racing" onclick="filter(this.value)" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">Racing</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-check-inline form-switch">
                <input class="form-check-input" type="radio" name="genre" value="Adventure" onclick="filter(this.value)" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">Adventure</label>
            </div>
        </div>
        <div class="col">
            <div class="form-check form-check-inline form-switch">
                <input class="form-check-input" type="radio"  name="genre" value="Shooter" onclick="filter(this.value)" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">Shooter</label>
            </div>
        </div>
    </div>
</div>
<!-- Photo gallery-->
<div class="galleryWrapper">
<div class="container-fluid gallery">
    <div id="rowOne" class="row myrow">
        <?php foreach ($get02games as $games): ?>
            <a href="./index.php?action=getGame&id=<?= $games['GAME_ID'] ?>"><img class="hoverCaption"src="<?= $games['GAME_COVER_URL'] ?>"></a>
        <?php endforeach; ?>
    </div>
    <div id="rowTwo" class="row  myrow">
        <?php foreach ($get35games as $games): ?>
            <a href="./index.php?action=getGame&id=<?= $games['GAME_ID'] ?>"><img src="<?= $games['GAME_COVER_URL'] ?>"></a>
        <?php endforeach; ?>
    </div>

</div>
</div>
</div>
<p class="title titleScreenshots">Discover new games randomly</p>

<button class="discorverGames" onclick="displaySC()">Click me to find random games</button>
<div class="container-fluid screenshotsDisplay">
    <div id="rowOneScreen" class="row myrow">

    </div>
    <div id="rowTwoScreen" class="row  myrow">

    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require "Template.php"; ?>
