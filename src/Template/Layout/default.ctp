<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Datalab Hosting';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $titleAction ?>
    </title>

	<!-- FAV ICON -->
    <?php //echo $this->Html->meta('icon'); ?>
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- FONTS -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel='stylesheet' type='text/css'>	
	<link href='https://fonts.googleapis.com/css?family=Orbitron:400,900' rel='stylesheet' type='text/css'>	
	
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="/css/default.css" rel="stylesheet">
    <link href="/css/header.css" rel="stylesheet">
    <link href="/css/footer.css" rel="stylesheet">
    <link href="/css/faq.css" rel="stylesheet">
	
</head>
<body>

<!--------------------------------------------------------------------------------->			
<!-- Nav Bar ---------------------------------------------------------------------->			
<!--------------------------------------------------------------------------------->			

<?php echo $this->element('main-menu', ['frontPage' => true]); ?>
           
<!---------------------------------------------------------------------------------!>			
<!-- Page Content -----------------------------------------------------------------!>			
<!---------------------------------------------------------------------------------!>			
	
<div class="clearfix headerHeightOffset"></div>
	
<div class="" style="position: relative; min-height: 500px;">
    
	<?= $this->Flash->render() ?>
	
	<?= $this->fetch('content') ?>
	
</div>
		
<!--------------------------------------------------------------------------------->			
<!-- Footer ---------------------------------------------------------------------->			
<!--------------------------------------------------------------------------------->			

<?php echo $this->element('footer', ['frontPage' => true]); ?>

<!--------------------------------------------------------------------------------->			
<!-- Scroll Up thumbnail ---------------------------------------------------------->			
<!--------------------------------------------------------------------------------->			

<!--
<div id="scrollUp">
	<img src="css/images/arrow.png" width=11 height=11 align=absmiddle />
	<a href="/" class="">TOP</a>
</div>
-->

<!--------------------------------------------------------------------------------->			
<!-- JavaScript / jQuery / Bootstrap ---------------------------------------------->			
<!--------------------------------------------------------------------------------->			
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
	
	<script>
				
		$(document).ready(function(){		
		});

		$(window).resize(function(){
		});
				
		$("#slider").click(function(){
	
		});

	</script>
	
  </body>
</html>
