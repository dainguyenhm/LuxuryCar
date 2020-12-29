<!DOCTYPE html>
<html>
<head>
	<title>Trang quản trị</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

	<link rel="shortcut icon" type="image/png" href="<?php echo URL_BASE;?>assets/images/logo.jpg"/>

	<link rel='stylesheet' href='https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css'>

	<script src='https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js'></script>

	<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE;?>assets/css/layout.css">

	<link rel="stylesheet" type="text/css" href="<?php echo URL_BASE;?>assets/css/customer.css">

	<script type="text/javascript" src="<?php echo URL_BASE;?>assets/ckeditor/ckeditor.js"></script>

	<script type="text/javascript" src="<?php echo URL_BASE;?>assets/ckeditor/ckfinder/ckfinder.js"></script>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
	<!-- <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet"/> -->

	<script>
		new WOW().init();
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
		  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		    document.getElementById("myBtn").style.display = "block";
		  } else {
		    document.getElementById("myBtn").style.display = "none";
		  }
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
		  document.body.scrollTop = 0;
		  document.documentElement.scrollTop = 0;
		}
	</script>

</head>
<body>
	<div id="header"></div>

	<div id="content">
		<?= @$contentadmin ?>
	</div>

	<div id="footer">
		<button onclick="topFunction()" id="myBtn" title="Go to top"><img style="width: 20px;height:20px;top: 5px;" src="<?php echo URL_BASE;?>assets/images/chevron-up.png"></button>
	</div>
</body>
</html>