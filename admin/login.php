<?php
session_start();
ob_start();

include "controllers/LoginController.php";
$menter = new LoginController();
$menter->login();
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Sign Up</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/team.jpg" alt="IMG">
                </div>
                <!--=====TIÊU ĐỀ======-->

                <form action="" method="post" class="login100-form validate-form">
                    <span class="login100-form-title ">
                        <b>Sign Up</b>
                    </span>
                    <?php if (isset($_GET['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?= htmlspecialchars($_GET['error']) ?>
                        </div>
                    <?php } ?>

                    <div class="wrap-input100 validate-input">
                        <input name="username" class="input100" required type="text" placeholder="Username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class='bx bx-user'></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input">
                        <input name="password" class="input100" type="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class='bx bx-key'></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <input type="submit" class="btn btn-primary" value="Login">
                            
                        </input>
                    </div>

                    <!--=====FOOTER======-->
                    <div class="text-center p-t-70 txt2">
                        The Animal World App Manager <i class="far fa-copyright" aria-hidden="true"></i>
                        <script type="text/javascript">
                            document.write(new Date().getFullYear());
                        </script>
                        <a class="txt2"> </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Javascript-->
    <script src="../admin/js/main.js"></script>
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
</body>

</html>