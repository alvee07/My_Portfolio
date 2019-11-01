<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Alvee's Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <style>
        body {
            font: 18px Montserrat, sans-serif;
            position: relative;
            line-height: 2.0;
            color: #ffffff;
        }
        .affix {
            top: 20px;
        }
        h1, h2{
            color: #555555;
        }
        p {font-size: 16px;}

        .margin {margin-bottom: 45px;}

        .bg-1 {
            background-color: white; /* Gray */
            color: #ffffff;
        }
        .bg-2 {
            background-color: #606060; /* fav color #2f2f2f */
            color: #ffffff;
        }
        .bg-3 {
            background-color: #ffffff; /* White */
            color: #555555;
        }
        .bg-4 {
            background-color: lightgray; /* Black Gray */
            color: black;
        }
        .container-fluid {
            padding-top: 70px;
            padding-bottom: 70px;
        }
        .top-heading{
            padding-top: 30px;
            padding-bottom: 30px;
        }
        .navbar {
            padding-top: 15px;
            padding-bottom: 15px;
            border: 0;
            border-radius: 0;
            margin-bottom: 0;
            font-size: 12px;
            letter-spacing: 5px;
            font-weight: bold;

        }
        .navbar-nav  li a:hover {
            color: #000000 !important;
            font-weight: bolder;
        }
        .blockquote p{
            color: #777;
        }
        .nav{
            font-size: 14px;
            font-weight: bold;
            color: black;
        }
    </style>
</head>

<?php
$page = basename($_SERVER['PHP_SELF']);
?>


<!-- Navbar -->
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php if ($page == "index.php") echo "index.php";else echo "../index.php";?>">Me</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php if ($page == "index.php") echo "inside/quotes.php";else echo "quotes.php";?>">Favourite Quotes</a></li>
                <li><a href="<?php if ($page == "index.php") echo "inside/education.php";else echo "education.php";?>">Education</a></li>
                <li><a href="<?php if ($page == "index.php") echo "inside/work.php";else echo "work.php";?>">Work</a></li>
                <li><a href="<?php if ($page == "index.php") echo "inside/assign.php";else echo "assign.php";?>">Assignments</a></li>
                <li><a href="<?php if ($page == "index.php") echo "inside/memoir.php";else echo "memoir.php";?>">Memoir</a></li>
                
            </ul>
        </div>
    </div>
</nav>
