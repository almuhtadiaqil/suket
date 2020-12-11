<?php
if (!isset($_SESSION["login"])) {
    redirect('auth/index');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="<?= base_url('assets/'); ?>/user/images/munding.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?= base_url('assets/'); ?>/user/images/munding.png" sizes="16x16" />
    <title><?= $title; ?></title>

    <!--stylesheet-->

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,900" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>/user/styles/styles.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>/user/styles/password.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>/user/styles/custom-responsive-styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>/user/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>/user/bootstrap/css/bootstrap.min.css">

    <!--scripts-->
    <script type="text/javascript" src="<?= base_url('assets/'); ?>/user/scripts/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>/user/scripts/all-plugins.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>/user/scripts/plugins-activate.js"></script>
    <script src="<?= base_url('assets/'); ?>/user/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/'); ?>/jquery.min.js"></script>
    <script>
        function yesnoCheck(that) {
            if (that.value == "cerai_mati") {
                document.getElementById("lajang").style.display = "none";
                document.getElementById("cerai_hidup").style.display = "none";
                document.getElementById("cerai_mati").style.display = "block";
            } else if (that.value == "cerai_hidup") {
                document.getElementById("lajang").style.display = "none";
                document.getElementById("cerai_hidup").style.display = "block";
                document.getElementById("cerai_mati").style.display = "none";
            } else if (that.value == "...") {
                document.getElementById("lajang").style.display = "none";
                document.getElementById("cerai_hidup").style.display = "none";
                document.getElementById("cerai_mati").style.display = "none";
            } else {
                document.getElementById("lajang").style.display = "block";
                document.getElementById("cerai_hidup").style.display = "none";
                document.getElementById("cerai_mati").style.display = "none";
            }
        }
    </script>
</head>

<body id="page-top">