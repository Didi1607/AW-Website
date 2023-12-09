<?php
session_start();
ob_start();

if (isset($_SESSION['admin'])) :
  include "controllers/ClientController.php";
  include "models/AnimalModel.php";
  include "controllers/AnimalController.php";

  $animalModel = new AnimalModel();
  $animals = $animalModel->get_all_animal();
  $cc = new ClientController();
?>
  <?php include "main_admin/header_admin.php"; ?>
  <?php include "main_admin/navtop_admin.php"; ?>
  <?php include "main_admin/quixnav_admin.php"; ?>

  <main class="app-content">
    <?php $cc->routes(); ?>
  </main>

  <?php include "main_admin/footer_admin.php"; ?>

<?php
else :
  header("Location: login.php");
endif;
?>