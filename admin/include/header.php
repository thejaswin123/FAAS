<!DOCTYPE html>
<html lang="en" <?php if(!isset($_GET['page']) || $_GET['page'] == 'dashboard'){ echo 'class="perfect-scrollbar-on js-focus-visible nav-open" data-js-focus-visible';}?>>

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=<?php echo rand(10,1000);?>" rel="stylesheet" />
  <link href="../assets/demo/demo.css?v=<?php echo rand(10,1000);?>" rel="stylesheet" />
  <script src="../assets/js/plugins/sweetalert.js"></script>
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/alerts.js?v=<?php echo rand(10,1000);?>"></script>
</head>
<body class="">
  <div class="wrapper ">