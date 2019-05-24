<!DOCTYPE html>
<html>
<head>
	<title>Image Show</title>
	<link rel="stylesheet" type="text/css" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

	<style type="text/css">
		html body {text-align: center;}
	</style>
</head>
<body>


	<?php

	$path = 'images/';
	$dirs = scandir($path);
	$dirs = array_diff( $dirs, ['..', '.', '.DS_Store'] );

	$slider = '';

	foreach ($dirs as $key => $entry) {
		$imgsrc = $path . $entry;
		
		$slider .= '<img src="' . $imgsrc . '" alt="'.$imgsrc.'" >';
	}

	?>


	<!-- OWL -->
	<div class="image-gallery ">
		<?php echo $slider; ?>
	</div>
	
	<div class="image-gallery blank">
		<?php echo $slider; ?>
	</div>





	<script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="node_modules/panzoom/dist/panzoom.min.js"></script>
	<script type="text/javascript" src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>

	<script type="text/javascript">
		
		// PanZoom 
		jQuery('.image-gallery').owl

	</script>

</body>
</html>