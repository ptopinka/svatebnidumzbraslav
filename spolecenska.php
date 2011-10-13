<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>

<?php 
  require("functions.php");
 ?>

<head>
	<?php
		printMeta () ;
		?>
		
	<?php
        printTitle();
        
        includeCSS_JS() 
  ?>
  <script type="text/javascript" src="js/highslide/highslide.js"></script>		<!--FOTO ZOOM -->
<link rel="stylesheet" type="text/css" href="js/highslide/highslide.css" />	


	<script>
	$.templateLayoutShowOnReady();
	
	$(function() {
		$.setTemplateLayout('css/layout.css');
	});
	</script>
	<script type="text/javascript">													<!--FOTO ZOOM -->
    hs.graphicsDir = 'js/highslide/graphics/';
    hs.outlineType = 'rounded-white';
</script>
</head>

<body>

	
		<?php
		  printHeader();
		?>
	<div id="pmenu">

		
		
				<?php
				
				printMenu();
				?>
				
	</div>
	
	<div id="content">
		<blockquote><blockquote><blockquote><p>
		<p><br> <br>  <br>
		<p>spolecenske saty</div></blockquote></blockquote></blockquote>
	
	<!--
	<ul id="nav1">
    <?php
      //printHorizontalMenu();
    ?>
	</ul>
	-->

	
	

	
	<div id="footer">
		<?php
		  printFooter();
		?>
	</div>


</body>