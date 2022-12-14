<? include 'assets.php' ?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <div class="wrap">
        <header class="Header">
            <div class="top">
                <div class="container">
                    <strong><?= $e_slogan ?></strong>
                    <ul>
                        <li><a href="">QNA / NOTICE</a></li>
                        <li><a href="">LOGIN</a></li>
                    </ul>
                </div>
            </div>

            <div class="bottom">
                <div class="container">
                    <h1>
                        <a href="">
                            <img src="./img/logo.png" alt="<?= $title ?>">
                        </a>
                    </h1>

                    <nav class="Gnb">
                    <? include 'nav.php' ?>
                    </nav>
                </div>
            </div>
        </header>