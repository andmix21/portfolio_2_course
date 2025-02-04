<?php
include "functions_db.php";
$inform = getAllInfo();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="reset.css">
    <title>Сайт-визитка Мазурова Андрея</title>
</head>
<body>
    <section class="home" id="home">
        <div class="title">САЙТ-ВИЗИТКА</div>
    </section>
    <div class="nav">
        <ul>
            <li><a href="#home">Начало</a></li>
            <li><a href="#author">Биография</a></li>
            <li><a href="#skills">Навыки</a></li>
            <li><a href="#music">Любимые исполнители</a></li>
            <li><a href="#games">Любимые игры</a></li>
            <li><a href="#end">Конец</a></li>
        </ul>
    </div>
    <section class="paragraph" id="author">
        <div class="title-1">БИОГРАФИЯ</div>
    </section>
    <section class="author">
        <div class="left">
            <img src="resources/avatarka.jpg" class="image-author">
        </div>
        <div class="right">
            <p class="author-title">Мазуров Андрей Андреевич</p>
            <p class="author-info">Возраст: <?= $inform[0] ["authorAge"]; ?></p>
            <p class="author-info">Место проживания: <?= $inform[0] ["authorCity"]; ?> </p>
            <p class="author-info">Место учебы: <?= $inform[0] ["authorStudy"]; ?></p>
            <p class="author-info">Интересы: <?= $inform[0] ["authorInterests"]; ?></p>
            <p class="author-info">Хобби: <?= $inform[0] ["authorHobby"]; ?></p>
        </div>
    </section>
    <section class="paragraph" id="skills">
        <div class="title-1">НАВЫКИ</div>
    </section>
    <section class="skills">
        <div class="C#">
            <img src="resources/C_sharp.png" class="C">
            <h1 class="bold">C#</h1>
            <h2><?= $inform[0] ["authorC#"]; ?>%</h2>
        </div>
        <div class="Python">
            <img src="resources/python.png" class="p-icon">
            <h1 class="bold">Python</h1>
            <h2><?= $inform[0] ["authorPython"]; ?>%</h2>
        </div>
        <div class="vs_code">
            <img src="resources/VS Code.png" class="p-icon">
            <h1 class="bold">VS Code</h1>
            <h2><?= $inform[0] ["authorVSCode"]; ?>%</h2>
        </div>
    </section>
    <section class="paragraph" id="music">
        <div class="title-1">ЛЮБИМЫЕ ИСПОЛНИТЕЛИ</div>
    </section>
    <section class="music">
        <div>
            <img src="resources/metallica.jpg">
            <h1 class="names">Metallica</h1>
        </div>
        <div>
            <img src="resources/korol_i_shut.jpg">
            <h1 class="names">Король и шут</h1>
        </div>
        <div>
            <img src="resources/sector_gaza.jpg">
            <h1 class="names">Сектор газа</h1>
        </div>
        <div>
            <img src="resources/rammshtein.jpg">
            <h1 class="names">Rammstein</h1>
        </div>
    </section>
    <section class="paragraph" id="games">
        <div class="title-1">ЛЮБИМЫЕ ИГРЫ</div>
    </section>
    <section class="games">
        <div>
            <img src="resources/HL.png">
            <h1 class="names">Half-Life</h1>
        </div>
        <div>
            <img src="resources/Quake.png" class="quake">
            <h1 class="names">Quake</h1>
        </div>
        <div>
            <img src="resources/Stalker.jpg">
            <h1 class="names">Stalker</h1>
        </div>
        <div>
            <img src="resources/Doom.png" class="doom">
            <h1 class="names">Doom</h1>
        </div>
    </section>
    <section class="paragraph" id="end">
            <div class="title-1">КОНЕЦ</div>
    </section>
    </section>
        <div class="end">
            <h1><?= $inform[0] ["cityAndYear"]; ?></h1>
        </div>
    </section>
    <section class="social-networks">
        <div>
            <a href="https://vk.com/andmix021"><img src="resources/vk.png"></a>
            <a href="http://t.me/andmix021"><img src="resources/telegram.png"></a>
        </div>
</body>
</html>
