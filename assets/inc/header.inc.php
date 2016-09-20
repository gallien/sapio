<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<= $description ?>">
    <meta name="author" content="Syncery">
    <meta name="keywords" content="<?= $keywords ?>">
    <meta name="robots" content="index, follow">
    <meta property="og:locale" content="<?php if($lang=='de'){ echo "de_DE"; }else{ echo "en_US"; }; ?>">
    <meta property="og:locale:alternate" content="de_DE">
    <meta property="og:locale:alternate" content="de_AT">
    <meta property="og:locale:alternate" content="de_BE">
    <meta property="og:locale:alternate" content="de_CH">
    <meta property="og:locale:alternate" content="de_LI">
    <meta property="og:locale:alternate" content="en_GB">
    <meta property="og:locale:alternate" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $title ?>">
    <meta property="og:description" content="<?= $description ?>">
    <meta property="og:url" content="<?= $canonical ?? "" ?>">
    <meta property="og:site_name" content="<?= $title ?>">
    <meta property="og:image" content="<?= $image ?? "/assets/images/home-teaser@2x.png" ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="<?= $description ?>">
    <meta name="twitter:title" content="<?= $title ?>">
    <meta name="twitter:image" content="<?= $image ?? "/assets/images/home-teaser@2x.png" ?>">
    <link rel="shortcut icon" href="/favicon.ico">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/vendor/materialize/dist/css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="/assets/styles/custom.css">
    <title><?= $title ?></title>
</head>
<body class='<?= $lang ?>' <?php if (isset($body_id)): ?> id="<?= $body_id ?>"<?php endif; ?>>

<header class="navbar-fixed">
    <nav class="synceryblue">
        <div class="nav-wrapper">
            <a href="/<?= $lang ?>/" class="brand-logo">&nbsp;</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="hide-on-med-and-down">
                <?= getMenu($lang,$page,"left") ?>
            </ul>
            <ul class="right hide-on-med-and-down">
                <?= getMenu($lang,$page,"right") ?>
                <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><?= $lang ?><i class="material-icons right">keyboard_arrow_down</i></a></li>
            </ul>
            <ul class="side-nav right" id="mobile-demo">
                <li<?php if ($page == "index"): ?> class="active"<?php endif; ?>><a href="/<?= $lang ?>/">Start</a></li>
                <?= getMenu($lang,$page,"left") ?>
                <?= getMenu($lang,$page,"right",true) ?>
            </ul>
        </div>
    </nav>
    <ul id="dropdown1" class="dropdown-content">
        <?php
            $tmp = "";
            if(isset($page)){ if(!empty($page) && $page!="index"){ $tmp = $page."/"; }; };
            echo '<li><a href="/en/'.$tmp.'">en</a></li>';
            echo '<li><a href="/de/'.$tmp.'">de</a></li>';
        ?>
    </ul>
</header>