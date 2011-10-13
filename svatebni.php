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

		<h2 align="center">Svatební móda </h2>
		<div> 
				<a id="thumb1" href="img/saty/483.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/saty/th/483.jpg" alt="Highslide JS"
						title="Click to enlarge" height="160" width="120" /></a>
				<div class="highslide-caption">
				    abc 
				</div>


				<a id="thumb1" href="img/saty/79.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/saty/th/79.jpg" alt="Highslide JS"
						title="Click to enlarge" height="160" width="120" /></a>
				<div class="highslide-caption">
				    abc				</div>

				<a id="thumb1" href="img/saty/483.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/saty/th/483.jpg" alt="Highslide JS"
						title="Click to enlarge" height="160" width="120" /></a>
				<div class="highslide-caption">
				    				    abc
				</div>
				
				<a id="thumb1" href="img/saty/79.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/saty/th/79.jpg" alt="Highslide JS"
						title="Click to enlarge" height="160" width="120" />
						</a>
				<div class="highslide-caption">
				    abc 
				</div>
				
				<a id="thumb1" href="img/saty/483.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/saty/th/483.jpg" alt="Highslide JS"
						title="Click to enlarge" height="160" width="120" /></a>
				<div class="highslide-caption">
				    jjj 
				</div>
			</div>
			
	</div>
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