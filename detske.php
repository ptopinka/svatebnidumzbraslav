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
			<div class="titulek">Chlapecké obleky</div>
			<div style="text-align:center;">
				<img src="img/masle.png"/>
			</div>
      <br/>
      <!-- +RADA -->
      <div align="center">
				<a id="thumb1" href="img/chlapecke_obleky/404-238-X47s.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/chlapecke_obleky/404-238-X47s.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				<a id="thumb1" href="img/chlapecke_obleky/oblek1.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/chlapecke_obleky/oblek1.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				<a id="thumb1" href="img/chlapecke_obleky/20110623_22.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/chlapecke_obleky/20110623_22.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
       
      </div>
      <br/>

	
		</div> <!-- end obsah-->
  		
  	
		  <?php
			printRightBanner();
		  ?>
	</div>  <!-- konec contentu-->
	
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