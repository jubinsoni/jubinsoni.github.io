<?php
    session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MySecretCounsellor</title>
    <meta name="description" content="mysecretcounsellor" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/animate.min.css" />
    <link rel="stylesheet" href="./css/ionicons.min.css" />
    <link rel="stylesheet" href="./css/styles.css" />

    <style>
    /*
    body {
      background: #333;
      padding-top: 5em;
      display: flex;
      justify-content: center;
    }
    */

    /* DEMO-SPECIFIC STYLES */
    .typewriter h1 {
      color: #fff;
      font-family: monospace;
      overflow: hidden; /* Ensures the content is not revealed until the animation */
      white-space: nowrap; /* Keeps the content on a single line */
      margin: 0 auto; /* Gives that scrolling effect as the typing happens */
    }

    .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover {
        color: #ff1a8c;
        background-color: transparent;
    }
    .dropdown-menu{
        background-color: white;
    }
    .dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus {
        background-image:none !important;
    }
    .dropdown-menu > li > a{
        
    }
    .dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus {
        background-color:#ff1a8c;
        color: white;
    }
    /* actual dropdown animation */
    .dropdown .dropdown-menu {
        -webkit-transition: all 0.3s;
        -moz-transition: all 0.3s;
        -ms-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;

        max-height: 0;
        display: block;
        overflow: hidden;
        opacity: 0;
    }

    .dropdown.open .dropdown-menu {
        max-height: 200px;
        opacity: 1;
    }

    input:invalid + span:after {
        content: '✖';
        color: #f00;
        padding-left: 5px;
    }

    input:valid + span:after {
        content: '✓';
        color: #26b72b;
        padding-left: 5px;
    }
    </style>
</head>

  <body style="height: 80%;">
    <!--Nav bar ends-->
    <nav id="topNav" class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="./index.php"><img src="./assets/logo.jpg" alt="Smiley face" height="50" width="60"></a>
            </div>
            <div class="navbar-collapse collapse" id="bs-navbar">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Child help(below 13) <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="./child_about.php">About Children</a></li>
                        <li class="divider"></li>
                        <li><a href="./child_challenges.php">Challenges they face</a></li>
                        <li class="divider"></li>
                        <li><a href="./child_helping_them.php">Helping them</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Adolescence help(13-17)<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="./adolescence_about.php">About Adolescence</a></li>
                        <li class="divider"></li>
                        <li><a href="./adolescence_challenges.php">Challenges they face</a></li>
                        <li class="divider"></li>
                        <li><a href="./adolescence_helping_them.php">Helping them</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Adult help(18+)<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="./adult_about.php">About Adult</a></li>
                        <li class="divider"></li>
                        <li><a href="./adult_challenges.php">Challenges they face</a></li>
                        <li class="divider"></li>
                        <li><a href="./adult_helping_them.php">Helping them</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Organizational help <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="./organization_about.php">About Organization</a></li>
                        <li class="divider"></li>
                        <li><a href="./organization_challenges.php">Challenges they face</a></li>
                        <li class="divider"></li>
                        <li><a href="./organization_helping_them.php">Helping them</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Yoga & Diet <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="./about_yoga.php">About Yoga & Diet</a></li>
                        <li class="divider"></li>
                        <li><a href="./some_techniques.php">Some techniques</a></li>
                      </ul>
                    </li>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="./training_services.php">Training Services</a></li>
                    </ul>
                </ul>
            </div>
        </div>
    </nav>
    <!--Nav bar ends-->