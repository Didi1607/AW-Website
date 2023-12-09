<?php
session_start();

if (
    isset($_SESSION['user_id']) && isset($_SESSION['user_email'])
    && $_GET['user_ad']
) {

    $user_ad = $_GET['user_ad'];

    include_once("./UserCon.php");
    include_once("./dbcon.php");
    $res = deleteById($conn, $user_ad);
    if ($res) {
        $sm = "Successfully deleted!";
        header("Location: ./user.php");
        exit;
    } else {
        $em = "Unknown error occurred";
        header("Location: ./user.php");
        exit;
    }
} else {
    header("Location: ./user.php");
    exit;
}
