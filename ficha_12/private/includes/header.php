<?php
require_once __DIR__ . '/../../config/config.php';
?> 

<!doctype html>
<html lang="pt">

<head>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo APP_NAME; ?></title>
  <!-- favicon -->
  <link rel="shortcut icon" href="<?= BASE_URL ?>/private/assets/img/gym125.png" type="image/png" />
  <!-- folha de estilos CSS -->
  <link rel="stylesheet" href="<?= BASE_URL ?>/private/assets/css/app.css" />
  <link rel="stylesheet" href="<?= BASE_URL ?>/private/assets/css/bootstrap.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,300;0,700;1,400&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="<?= BASE_URL ?>/private/assets/fontawesome/all.min.css">
   
  <!-- jQuery -->
  <script src="<?= BASE_URL ?>/private/assets/jquery/jquery-3.6.0.min.js"></script>

  <!-- DataTables CSS + JS -->
  <link rel="stylesheet" href="<?= BASE_URL ?>/private/assets/datatables/datatables.min.css">
  <script src="<?= BASE_URL ?>/private/assets/datatables/datatables.min.js"></script> 

  <!-- CSS do Flatpickr -->
  <link rel="stylesheet" href="<?= BASE_URL ?>/private/assets/flatpickr/flatpickr.min.css">
  
  <!-- JS do Flatpickr -->
  <script src="<?= BASE_URL ?>/private/assets/flatpickr/flatpickr.js"></script> 
</head>

<body>