<?php include "../includes/php/config.php";?><!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrator Panel - LCA</title>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Datepicker-->
    <script src="../js/moment.js"></script>
    <script src="../js/date_picker.js"></script>
    <link rel="stylesheet" href="../css/date_picker.css"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script src="ckeditor/ckeditor.js"></script>

</head>

<body>
    <?php
        if(!isset($_SESSION['ad_user'])||$_SESSION['ad_user']===NULL)
            header('Location:index.php');
    ?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php require "navigation.php";?>

    	<div id="page-wrapper">
            <?php 
				include "php/global.php";
				echo mainProcess();
			?>     
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
    <div class="scroll-top-wrapper ">
        <span class="scroll-top-inner">
            <i class="fa fa-2x fa-arrow-circle-up"></i>
        </span>
    </div>

     <!-- jQuery -->
    
    <script src="js/jquery.number.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
    
	<script src="admin.js"></script>
</body>

</html>