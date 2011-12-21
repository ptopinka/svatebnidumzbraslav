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
			<div class="titulek">Doplňky</div>
			<div class="masle">
				<img src="img/masle.png"/>
			</div>
      
        <h3 align="left">Bolerka</h3>
        <div>
  	      Velkým trendem pro svatební šaty jsou bolerka. Módní návrháři spojili něco moderního s praktickým využitím.
  	       Právě pro korzetové šaty jsou tyto bolerka hezkým optickým doplněním a chrání současně nevěstu před zimou.
  	    </div>
     
        <br/>

        <!-- prvni rada -->
    		<div> 
    				<a id="thumb1" href="img/bolerka/10052.jpg" class="highslide" onclick="return hs.expand(this)">
    					<img src="img/bolerka/10052_thumb.jpg" alt="Highslide JS"
    						title="Click to enlarge" height="202" width="135" /></a>
    				<div class="highslide-caption">
    				    Bolerka
    				</div>

    				<a id="thumb1" href="img/bolerka/10445  AB-121.jpg" class="highslide" onclick="return hs.expand(this)">
    					<img src="img/bolerka/10445  AB-121_thumb.jpg" alt="Highslide JS"
    						title="Click to enlarge" height="202" width="135" /></a>
    				<div class="highslide-caption">
    				    Bolerka
    				</div>

    				<a id="thumb1" href="img/bolerka/AB-118.jpg" class="highslide" onclick="return hs.expand(this)">
    					<img src="img/bolerka/AB-118_thumb.jpg" alt="Highslide JS"
    						title="Click to enlarge" height="202" width="135" /></a>
    				<div class="highslide-caption">
    				    Bolerka
    				</div>

    				<a id="thumb1" href="img/bolerka/E42_m.jpg" class="highslide" onclick="return hs.expand(this)">
    					<img src="img/bolerka/E42_m_thumb.jpg" alt="Highslide JS"
    						title="Click to enlarge" height="202" width="135" /></a>
    				<div class="highslide-caption">
    				    Bolerka
    				</div>


    			</div>


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