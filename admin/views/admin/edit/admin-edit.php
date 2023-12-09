<?php
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) {

    if (
        isset($_POST['full_name']) &&
        isset($_POST['email'])
    ) {

        include "./dbcon.php";
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];

        $id = $_SESSION['user_id'];

        if (empty($full_name)) {
            $em = "First name is required";
            header("Location: ./profile.php?error=$em");
            exit;
        } else if (empty($email)) {
            $em = "Last name is required";
            header("Location: ./profile.php?error=$em");
            exit;
        }

        $sql = "UPDATE users SET full_name=?, email=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $res = $stmt->execute([$full_name, $email, $id]);


        if ($res) {
            $_SESSION['username'] = $username;
            $sm = "Successfully edited!";
            header("Location: ./profile.php?success=$sm");
            exit;
        } else {
            $em = "Unknown error occurred";
            header("Location: ./profile.php?error=$em");
            exit;
        }
    } else {
        header("Location: ./profile.php");
        exit;
    }
} else {
    header("Location: ./admin-login.php");
    exit;
}
