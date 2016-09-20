<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<?php $site_title = "Gradys Notes" ?>
		<title><?= $page_title. " | " . $site_title ?></title>

		<!-- Bootstrap -->
		<link href="/assets/css/app.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="/core/css/webDev.css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="/core/webDev.js"></script>
		<script src="/core/jquery-1.12.0.js"></script>
		<script src="/core/jquery.js"></script>
	</head>

	<body id=<?php strtolower($page_title); echo '"'.$page_title.'"'; ?>>
		<div class="mother">

		<?php include_once(__DIR__."/+nav_links.php"); ?>