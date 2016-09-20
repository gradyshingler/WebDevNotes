<?php
	require_once(__DIR__.'/../core/config.php');
?>

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
	<link rel="stylesheet" type="text/css" href="/core/webDev.css">

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
<body id="layout-1" class="main-page-container">
	<div class="trickery">
		<div id="admin-container">
			<div id="admin-title"><h2">Quick Layout 1</h2></div>
			<div id="admin-options">
				<ul>
					<li><button type="button" onclick="call_a_function()">Remove Backgrounds</button></li>
					<li><button type="button" onclick="call_a_function()" class="hide-text">Show Text</button></li>
					<li><button type="button" onclick="remove_admin()">Turn Off Admin</button></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="region-container">
		<div id="header-region">
			<div class="main-header">
				<div class="logo-image admin-text">LOGO</div>
				<div class="main-nav admin-text">
					<ul>
						<li>link 1 | </li>
						<li>link 2 | </li>
						<li>link 3 | </li>
						<li>link 4</li>
					</ul>
				</div>
			</div>
			<div class="sub-header admin-text">
				<div class="sub-nav">sub nav ( sub | nav | places | to | go )</div>
			</div>
		</div>
		<div id="slideshow">
			<div class="title admin-text"><h2>Heading Title Important Message</h2></div>
			<div class="description admin-text"><p class="filler-text">Lorem Ipsum and some other Latin Stuff as a filler so this placeHolder text looks like what it actually might look like when real content is placed here</p></div>
		</div>
		<div id="main-content-container">
			<div id="side-menu-container">
				<div class="feature-block admin-text">
					<div class="title">Overview TItle</div>
					<div class="data">
						<ul>
							<li>important data 1</li>
							<li>important data 2</li>
							<li>important data 3</li>
							<li>important data 4</li>
							<li>important data 5</li>
						</ul>
					</div>
				</div>
				<div class="feature-block admin-text">
					<div class="title">Overview TItle</div>
					<div class="data">
						<ul>
							<li>important data 1</li>
							<li>important data 2</li>
							<li>important data 3</li>
							<li>important data 4</li>
							<li>important data 5</li>
						</ul>
					</div>
				</div>
				<div class="feature-block admin-text">
					<div class="title">Overview TItle</div>
					<div class="data">
						<ul>
							<li>important data 1</li>
							<li>important data 2</li>
							<li>important data 3</li>
							<li>important data 4</li>
							<li>important data 5</li>
						</ul>
					</div>
				</div>
				<div class="feature-block admin-text">
					<div class="title">Overview TItle</div>
					<div class="data">
						<ul>
							<li>important data 1</li>
							<li>important data 2</li>
							<li>important data 3</li>
							<li>important data 4</li>
							<li>important data 5</li>
						</ul>
					</div>
				</div>
				<div class="feature-block admin-text">
					<div class="title">Overview TItle</div>
					<div class="data">
						<ul>
							<li>important data 1</li>
							<li>important data 2</li>
							<li>important data 3</li>
							<li>important data 4</li>
							<li>important data 5</li>
						</ul>
					</div>
				</div>
				<div class="feature-block admin-text">
					<div class="title">Overview TItle</div>
					<div class="data">
						<ul>
							<li>important data 1</li>
							<li>important data 2</li>
							<li>important data 3</li>
							<li>important data 4</li>
							<li>important data 5</li>
						</ul>
					</div>
				</div>
				<div class="feature-block admin-text">
					<div class="title">Overview TItle</div>
					<div class="data">
						<ul>
							<li>important data 1</li>
							<li>important data 2</li>
							<li>important data 3</li>
							<li>important data 4</li>
							<li>important data 5</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="content-container">
				<div class="content-node admin-text">
					<div class="title"><h3>Some Infomation that is good to know as a title</h3></div>
					<div class="data"><p class="sometext">Lorem Ipsum and some other Latin Stuff as a filler so this placeHolder text looks like what it actually might look like when real content is placed here</p></div>
				</div>
				<div class="content-node admin-text">
					<div class="title"><h3>Some Infomation that is good to know as a title</h3></div>
					<div class="data"><p class="sometext">Lorem Ipsum and some other Latin Stuff as a filler so this placeHolder text looks like what it actually might look like when real content is placed here</p></div>
				</div>
				<div class="content-node admin-text">
					<div class="title"><h3>Some Infomation that is good to know as a title</h3></div>
					<div class="data"><p class="sometext">Lorem Ipsum and some other Latin Stuff as a filler so this placeHolder text looks like what it actually might look like when real content is placed here</p></div>
				</div>
				<div class="content-node admin-text">
					<div class="title"><h3>Some Infomation that is good to know as a title</h3></div>
					<div class="data"><p class="sometext">Lorem Ipsum and some other Latin Stuff as a filler so this placeHolder text looks like what it actually might look like when real content is placed here</p></div>
				</div>
				<div class="content-node admin-text">
					<div class="title"><h3>Some Infomation that is good to know as a title</h3></div>
					<div class="data"><p class="sometext">Lorem Ipsum and some other Latin Stuff as a filler so this placeHolder text looks like what it actually might look like when real content is placed here</p></div>
				</div>
				<div class="content-node admin-text">
					<div class="title"><h3>Some Infomation that is good to know as a title</h3></div>
					<div class="data"><p class="sometext">Lorem Ipsum and some other Latin Stuff as a filler so this placeHolder text looks like what it actually might look like when real content is placed here</p></div>
				</div>
				<div class="content-node admin-text">
					<div class="title"><h3>Some Infomation that is good to know as a title</h3></div>
					<div class="data"><p class="sometext">Lorem Ipsum and some other Latin Stuff as a filler so this placeHolder text looks like what it actually might look like when real content is placed here</p></div>
				</div>
				<div class="content-node admin-text">
					<div class="title"><h3>Some Infomation that is good to know as a title</h3></div>
					<div class="data"><p class="sometext">Lorem Ipsum and some other Latin Stuff as a filler so this placeHolder text looks like what it actually might look like when real content is placed here</p></div>
				</div>
				<div class="content-node admin-text">
					<div class="title"><h3>Some Infomation that is good to know as a title</h3></div>
					<div class="data"><p class="sometext">Lorem Ipsum and some other Latin Stuff as a filler so this placeHolder text looks like what it actually might look like when real content is placed here</p></div>
				</div>
				<div class="content-node admin-text">
					<div class="title"><h3>Some Infomation that is good to know as a title</h3></div>
					<div class="data"><p class="sometext">Lorem Ipsum and some other Latin Stuff as a filler so this placeHolder text looks like what it actually might look like when real content is placed here</p></div>
				</div>
				<div class="content-node admin-text">
					<div class="title"><h3>Some Infomation that is good to know as a title</h3></div>
					<div class="data"><p class="sometext">Lorem Ipsum and some other Latin Stuff as a filler so this placeHolder text looks like what it actually might look like when real content is placed here</p></div>
				</div>
			</div>
		</div>
		<div id="footer-container">
			<div class="footer-block admin-text">
				<h4>Footer Links 1</h4>
				<ul>
					<li>link 1</li>
					<li>link 2</li>
					<li>link 3</li>
					<li>link 4</li>
					<li>link 5</li>
				</ul>
			</div>
			<div class="footer-block admin-text">
				<h4>Footer Links 1</h4>
				<ul>
					<li>link 1</li>
					<li>link 2</li>
					<li>link 3</li>
					<li>link 4</li>
					<li>link 5</li>
				</ul>
			</div>
			<div class="footer-block admin-text">
				<h4>Footer Links 1</h4>
				<ul>
					<li>link 1</li>
					<li>link 2</li>
					<li>link 3</li>
					<li>link 4</li>
					<li>link 5</li>
				</ul>
			</div>
			<div class="footer-block admin-text">
				<h4>Footer Links 1</h4>
				<ul>
					<li>link 1</li>
					<li>link 2</li>
					<li>link 3</li>
					<li>link 4</li>
					<li>link 5</li>
				</ul>
			</div>
		</div>
	</div>

	<script type="text/template" id="pShortTextTemplate">
		<p>Lorem Ipsum and some other Latin Stuff as a filler so this placeHolder text looks like what it actually might look like when real content is placed here</p>
	</script>

	<script src="js/js_layout_1.js"></script>
</body>
