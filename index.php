<?php
include_once 'php/darkTheme/toggleSwitch.php';
global $theme;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/<?= $theme ?>.css">
</head>
<body class="<?= $theme ?>">
<?php include 'php/header.php'; ?>
<main>
    <section class="slides-container">
        <div class="slides-inner">
            <div class="slide fade">
                <img src="img/banner1.jpg">
                <div class="slide-text">Prvý nadpis</div>
            </div>
            <div class="slide fade">
                <img src="img/banner2.jpg">
                <div class="slide-text">Druhy nadpis</div>
            </div>
            <div class="slide fade">
                <img src="img/banner3.jpg">
                <div class="slide-text">Treti nadpis</div>
            </div>
        </div>
        <a id="prev" class="prev">❮</a>
        <a id="next" class="next">❯</a>
    </section>
    <section class="container1">
        <div class="row">
            <div class="col-100 text-center">
                <div class="greeting-box">
                    <?php
                    $hour = date('H');
                    if ($hour < 12) {
                        echo "<h3>Dobré ráno</h3>";
                    } elseif ($hour < 18) {
                        echo "<h3>Dobrý deň</h3>";
                    } else {
                        echo "<h3>Dobrý večer</h3>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row">
            <div class="col-50">
                <h2>Mollit cupidatat velit quis irure non eiusmod culpa cillum velit magna est aliquip.</h2>
            </div>
            <div class="col-50">
                <p>Nulla dolore sit esse pariatur culpa sint nulla fugiat nulla ut. Sit adipisicing fugiat id consequat qui est. Nulla ea aliquip culpa nulla mollit do excepteur ex ullamco consequat tempor consectetur. Tempor et ea voluptate irure est magna magna reprehenderit qui non dolore. Consequat id ad cillum do qui. Proident ipsum enim eiusmod fugiat quis anim consequat ullamco mollit excepteur. Eiusmod eu ad irure anim velit laborum commodo nostrud pariatur id ea ad.</p>
                <p>Incididunt pariatur ipsum in culpa sit cillum consequat nostrud do. Esse commodo ad qui ea. Pariatur elit mollit deserunt aute do culpa eu veniam pariatur in adipisicing qui adipisicing irure. Est minim sint ipsum nulla eiusmod. Amet do officia consectetur labore. Id aute labore culpa aliquip. Adipisicing mollit excepteur Lorem quis elit ipsum irure quis occaecat qui consectetur ad irure dolor.</p>
            </div>
        </div>
    </section>
</main>

<?php include 'php/footer.php'; ?>
<script src="js/loadSlides.js"></script>
<script src="js/menu.js"></script>
<script src="js/slider.js"></script>
</body>
</html>