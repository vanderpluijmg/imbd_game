<?php $title = "GAME"; ?>
<?php ob_start(); ?>
<?php foreach ($singleGame as $games): ?>
    <div class="cover" style="background:url('<?= $games['SCREENSHOT_URL'] ?>');
            background-attachment:fixed ;
            background-size: cover;
            background-position-y: center;
            height: 70vh"></div>
    <div id= "contain-scroll" class="container-fluid">
        <div class="row myrow">
            <div class="col mycol">
                <img class="coverImg" alt="gamePicture" src="<?= $games['GAME_COVER_URL'] ?>"></div>
            <div class="col-1.5 mycol">
                <div class="info"><h1 class="gameTitle"><?= $games['GAME_NAME'] ?></h1>
                    <h2 class="gameInfo"><?= $games['RELEASE_DATE'] ?></h2>
                    <h2 class="gameInfo"><?= $games['COMPANY_NAME'] ?></h2>
                </div>
            </div>
            <div class="col-4 mycol">
                <div class="container">
                    <div class="row myrow">
                        <h1 class="gameInfoTitle gameInfoSynopsis">Synopsis : </h1>
                    </div>
                    <div class="description">
                        <p class="gameSum"><?= $games['GAME_SUMMARY'] ?></p>
                        <h1 class="gameInfoTitle">Rating : </h1>
                        <div class="progress">
                            <div class="progress-bar"
                                 style="width:<?= $games['GAME_AGGREGATED_RATING'] ?>%; background:orange;">
                                <div class="progress-value"><span><?= (int)$games['GAME_AGGREGATED_RATING'] ?></span>%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mycol"></div>
        </div>
    </div>
<?php endforeach; ?>
<div class="carouselWrapper">
    <ul id="lightSlider">
        <?php foreach ($screenshots as $games): ?>
            <li>
                <img src="<?= $games['SCREENSHOT_URL'] ?>">
            </li>
        <?php endforeach; ?>
    </ul>
</div>
<?php $content = ob_get_clean(); ?>
<?php require "Template.php"; ?>

</body>
</html>