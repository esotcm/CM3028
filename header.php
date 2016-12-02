<?php
/**
 * Created by PhpStorm.
 * User: duncanpogson
 * Date: 28/11/2016
 * Time: 22:38
 */
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Active Portlethen</title>
</head>
<body>
<header>
    <h1>Portlethen's guide to healthy living and keeping active</h1>
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="sportlethen.php">Sportlethen</a></li>
            <li><a href="health_wellbeing.php">Health and Wellbeing</a></li>
            <li><a href="about.php">about</a></li>
            <li><a href="contact.php">contact</a></li>
            <?
            if (isset($_SESSION['login_username'])) {
                echo "<li><a href='logout.php'>Logout</a></li>";
            } else {
                echo "<li><a href='login.php'>Login</a></li>";
            }
            ?>
        </ul>
    </nav>
</header>