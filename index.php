<?php

$path = 'images/';
$dirs = scandir($path);
$dirs = array_diff( $dirs, ['..', '.', '.DS_Store', '.git', '.htaccess'] );

$slider = '';
$thumbs = '';
$gallery = '';
foreach ($dirs as $key => $entry) {
	$imgsrc = $path . $entry;

	// Build Slider
	$slider .= '<div class="pan" data-big="'.$imgsrc.'" data-text="'.$entry.'"><img src="' . $imgsrc . '" alt="'.$imgsrc.'" class="" /></div>';

	$thumbs .= '<button class="owl-thumb-item" title="'.$imgsrc.'"><div class="img" style="background-image: url(\''.$imgsrc.'\');" ></div><div class="text">'.$entry.'</div></button>';

	$gallery .= '<div class="pan" data-big="'.$imgsrc.'" data-text="'.$entry.'">';
	$gallery .= ' 	<h5>'.$entry.'</h5>';
	$gallery .= ' 	<img src="'.$imgsrc.'" alt="'.$entry.'" title="'.$entry.'" />';
	// $gallery .= '';
	$gallery .= '</div>';
}




?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

	<title>Image Show</title>

	<link rel="stylesheet" type="text/css" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

	<link rel="stylesheet" type="text/css" href="node_modules/materialize-css/dist/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="node_modules/jquery.pan/dist/css/jquery.pan.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div id="page">

		&nbsp;
			<h1> Image Gallery </h1>

		<button class="btn waves-effect grey darken-1" onclick="jQuery('body').removeClass('dark');"> Light Mode </button>
		<button class="btn waves-effect waves-light grey darken-4" onclick="jQuery('body').addClass('dark');"> Dark Mode </button>

		<br><br><br>

		<!-- OWL -->
		<div class="image-gallery owl-carousel owl-theme"  data-slider-id="1">
			<?php echo $slider; ?>
		</div>

		<div class="owl-thumbs" data-slider-id="1">
		    <?php echo $thumbs; ?>
		</div>


		<!-- Pan -->	
		<div class="image-gallery blank">
			<?php echo $gallery; ?>
		</div>



	</div>

	<script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
	<script type="text/javascript" src="node_modules/owl.carousel2.thumbs/dist/owl.carousel2.thumbs.min.js"></script>
	<script type="text/javascript" src="node_modules/materialize-css/dist/js/materialize.min.js"></script>

	<script type="text/javascript" src="node_modules/jquery.pan/dist/jquery.pan.min.js"></script>

	<script type="text/javascript" src="script.js"></script>

</body>
</html>
