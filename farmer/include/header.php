<!DOCTYPE html>
<html lang="en" <?php if(!isset($_GET['page']) || $_GET['page'] == 'dashboard'){ echo 'class="perfect-scrollbar-on js-focus-visible nav-open" data-js-focus-visible';}?>>

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Farmer Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=<?php echo rand(10,1000);?>" rel="stylesheet" />
  <link href="../assets/demo/demo.css?v=<?php echo rand(10,1000);?>" rel="stylesheet" />
  <script src="../assets/js/plugins/sweetalert.js"></script>
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/alerts.js?v=<?php echo rand(10,1000);?>"></script>
  <style type="text/css">
    body.chat-box-open {
    position: relative;
}

.chat-box-container {
    position: fixed;
    width: 320px;
    background: #fff;
    height: 100%;
    top: 0px;
    right: -300px;
    border-left: 1px solid #c5c5c5;
    opacity: 0;
    visibility: hidden;
    z-index: 999999;
}

.chat-outer-box {
    position: relative;
    height: 100%;
}


.chat-box-section {
    padding: 0px 0 65px 0;
    width: 100%;
    height: 100%;
}

.chat-box-header h4 {
    overflow: hidden;
    padding: 0px 15px;
    margin-top: 0;
    margin-bottom: 0;
}


.chat-box-header {
    position: absolute;
    width: 100%;
    padding-top: 10px;
}
.chat-box-body {
    position: absolute;
    width: 100%;
    top: 60px;
    bottom: 65px;
    padding: 10px;
    overflow-y: auto;
}

.chat-box-footer {
    position: absolute;
    bottom: 0px;
    width: 100%;
    padding-bottom: 10px;
    background: #fff;
}

.message-sender {
    padding: 4px 10px;
    border-radius: 7px;
    display: inline-block;
}

.message-to {
    background: #c6d7ff;
}

.message-from {
    background: #f5f5f5;
}
.sender-to {
    text-align: left;
}
.sender-from {
    text-align: right;
}
.message-date {
    font-family: sans-serif;
    font-size: 10px;
}
.message-text * {
    font-weight: normal;
    margin: 0;
}

.chat-single-message {
    overflow: hidden;
    margin: 5px 0px;
}

.chat-close-btn {
    cursor: pointer;
}

.chat-box-container.open-chat-box-animate {
    animation: openchat .9s forwards;
}

@keyframes openchat {
  from {right: -300px;opacity: 0}
  to {right: 0px;opacity: 1;visibility: visible;}
}

.chat-box-container.close-chat-box-animate {
    animation: closechat .9s forwards;
}

@keyframes closechat {
  to {right: -300px;opacity: 0}
  from {right: 0px;opacity: 1;visibility: visible;}
}
</style>

</head>
<body class="">
  <div class="wrapper ">