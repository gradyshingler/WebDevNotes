<?php 
    require_once(__DIR__.'/../core/config.php');
    require_once(__DIR__.'/../includes/+basic_header.php');
    
    include_once(__DIR__.'/+topic_links.php');

    $bootstrapheader = <<<EOT
    <!-- Bootstrap -->
            <link href="/assets/css/app.css" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="/core/webDev.css">

            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
EOT;

?>
    
<h2> Bootstrap YO!</h2>

<p>Some really good documentation can be found here: <a href="http://getbootstrap.com/">http://getbootstrap.com/</a></p>

<p>To get started with Bootstrap you will need:</p>
<ul>
    <li>In the header of your html: <code><?php print_r(htmlspecialchars($bootstrapheader)); ?></code></li>
</ul>


<?php require_once(__DIR__.'/../includes/+basic_footer.php'); ?>
