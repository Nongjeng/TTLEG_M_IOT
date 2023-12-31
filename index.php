<?php
ob_start();
session_start();
include "./components/navbar.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TT-LEG </title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/st.css">
    <link rel="icon" href="./public/img/logoTATC.ico" class="rounded-circle" type="image/x-icon">
    <!-- Optional: Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.15.0/dist/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Optional: Bootstrap JavaScript (Popper.js and jQuery) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
    <?php

    // include "./controller/connect.php";
    $request = $_SERVER['REQUEST_URI'];
    // echo $request;

    switch ($request) {
        case "/login":
            include "./pages/login.php";
            break;
        case "/":
            include "./pages/test.php";
            break;
        case "/home":
            include "./pages/home.php";
            break;
            //     case"/test1":
            //         include "test.php";
            //             break;
    }
    ?>