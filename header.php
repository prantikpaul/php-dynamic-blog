<?php

if (file_exists(__DIR__ . '/autoload.php')) {
    require_once __DIR__ . '/autoload.php';
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/default/default.css" type="text/css" media="screen" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="jquery.nivo.slider.pack.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <title><?php echo $title["title"]; ?> </title>
</head>

<body id="home">
    <div id="wrapper">

        <!--__--__--__--__--__--  L O G O  &   N A V    B A R --__--___--__--__--__-->
        <header>
            <div id="logo">
                <h1><?php echo $title["title"]; ?><span id="iisrt"><span id="ii">Tech</span> <span id="srt">HUB</span></span></h1>
                <div id="tagline">
                    <h2><?php echo $title["des"]; ?></h2>
                </div>
            </div>
            <nav>
                <ul>
                    <?php foreach ($menu as $m): ?>
                        <li><a href="<?php echo $m["link"]; ?>" id="<?php echo $m["id"]; ?>"><?php echo $m["title"]; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </header>