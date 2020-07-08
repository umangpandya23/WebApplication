<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Surfit Discover New Websites ">
    <meta name="keywords" content="Surfit, Discover, Music, Games, Videos, Fun">
    <meta name="author" content="Dhruv Pandya, Jay A Patel, Jay K Patel">

    <link rel='shortcut icon' type='image/x-icon' href='images/icon.png' />

    <title>Surfit</title>

    <link href="css/metro.css" rel="stylesheet">
    <link href="css/metro-icons.css" rel="stylesheet">
    <link href="css/metro-responsive.css" rel="stylesheet">

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>

    <script src="js/metro.js"></script>
	
    <style>
        html, body {
            height: 100%;
        }
        body {
		 overflow-y:hidden;
		 background-color:#fff;
        }
        .page-content {
            padding-top: 3.125rem;
            min-height: 100%;
            height: 100%;
        }
        .table .input-control.checkbox {
            line-height: 1;
            min-height: 0;
            height: auto;
        }

        @media screen and (max-width: 800px){
            #cell-sidebar {
                flex-basis: 52px;
            }
            #cell-content {
                flex-basis: calc(100% - 52px);
            }
        }
    </style>

 
</head>
<body>
<div>
<img src="images/click.png" alt="click here to surf" height="100" width="100"></div>
    <br><br>
	<br><br>
	<br><br>
	<br><br>
	<h1><center>Welcome to Surfit, <?php echo $_SESSION['usr_name']; ?></center></h1>
	<h5><center>Click on Surfit to Discover Awesome Websites</center></h5>
	
</body>
</html>