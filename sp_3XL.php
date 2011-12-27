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
		<div class="obsah"> 
			<div class="titulek">Společenská móda XXXL</div>
			<div class="masle">
				<img src="img/masle.png"/>
			</div>
	<!--  1 rada -->
		  <div> 
				<a id="thumb1" href="img/sp_saty/3XL/3XL (1).jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/3XL/th/3XL (1).jpg" alt="Highslide JS"
					title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    večerní šaty
				</div>
 
				<a id="thumb1" href="img/sp_saty/3XL/3XL (2).jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/3XL/th/3XL (2).jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    večerní šaty
				</div>

				<a id="thumb1" href="img/sp_saty/3XL/3XL (3).jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/3XL/th/3XL (3).jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    večerní šaty
				</div>
				
				<a id="thumb1" href="img/sp_saty/3XL/3XL (4).jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/3XL/th/3XL (4).jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				   večerní šaty
				</div>

			</div>
			
			<!--  2 rada -->
		  <div> 
				<a id="thumb1" href="img/sp_saty/3XL/3XL (5).jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/3XL/th/3XL (5).jpg" alt="Highslide JS"
					title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    večerní šaty
				</div>
 
				<a id="thumb1" href="img/sp_saty/3XL/3XL (6).jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/3XL/th/3XL (6).jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    večerní šaty
				</div>

					<a id="thumb1" href="img/sp_saty/3XL/3XL (7).jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/3XL/th/3XL (7).jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    večerní šaty
				</div>
				
				<a id="thumb1" href="img/sp_saty/3XL/3XL (8).jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/3XL/th/3XL (8).jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				   večerní šaty
				</div>

			</div>
			
			
		 
			
			<!--  3 rada -->
		  <div> 
				

				<a id="thumb1" href="img/sp_saty/3XL/3XL (9).jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/3XL/th/3XL (9).jpg" alt="Highslide JS"
						title="Click to enlarge" height="180" width="135" /></a>
				<div class="highslide-caption">
				    večerní šaty
				</div>
				
				

			</div>
		</div> <!-- end obsah-->
			  <?php
				printRightBanner();
			  ?>
	</div>  <!-- konec content  -->
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