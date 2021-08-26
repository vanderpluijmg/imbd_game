<?php $title = "Search game"; ?>
<?php ob_start(); ?>
<div class="container">
    <div class="row justify-content-center search">
        <input type="text" id="search" placeholder="Search" oninput="search(this.value)" value="<?php echo $_GET["query"]?>"/>
    </div>
</div>
    <div class="container-fluid ">
        <div id="res" class="row-fluid myrow">
        </div>
    </div>

<?php $content = ob_get_clean(); ?>
<?php require "Template.php"; ?>