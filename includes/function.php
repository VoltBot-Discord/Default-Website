<?php
function headhtml($title){  
    echo'
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VoltBot - '. $title . '</title>
    <meta property="og:site_name" content="VoltBot">
    <meta name="author" content="Freiik">
    <meta property="og:description" content="VoltBot • A french discord bot for moderation and utilities.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="assets/img/logo.png">
    <meta property="og:locale" content="en_US">
    <link rel="shortcut icon" href="assets/img/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    </head>';
}

?>