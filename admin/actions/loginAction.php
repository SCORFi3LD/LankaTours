<?php

session_start();

if (isset($_POST["un"])) {
    $un = $_POST["un"];
    $pw = $_POST["pw"];
    if ($un == "admin" && $pw == "123") {
        $_SESSION['admin'] = $un;
        header("location: ../home.php");
    } else {
        header("location: ../index.html?msg=unauthorized access");
    }
} else {
    header("location: ../index.html?msg=Unauthorized Access");
}
