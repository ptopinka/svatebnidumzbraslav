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
			<div class="titulek">Akce</div>
			<div class="masle">
				<img src="img/masle.png"/>
			</div>
			<h3>Svatební expo 2011</h3>
	
	
      <!-- prvni rada -->
  		<div align="center"> 
  				<a id="thumb1" href="img/akce/prgw2011/wedding expo 02.jpg" class="highslide" onclick="return hs.expand(this)">
  					<img src="img/akce/prgw2011/wedding expo 02_thumb.jpg" alt="Highslide JS"
  						title="Click to enlarge" height="99" width="150" /></a>
  				<div class="highslide-caption">
  				    svatební model xxx
  				</div>

  				<a id="thumb1" href="img/akce/prgw2011/wedding expo 03.jpg" class="highslide" onclick="return hs.expand(this)">
  					<img src="img/akce/prgw2011/wedding expo 03_thumb.jpg" alt="Highslide JS"
  						title="Click to enlarge" height="99" width="150" /></a>
  				<div class="highslide-caption">
  				    svatební model xxx
  				</div>

  				<a id="thumb1" href="img/akce/prgw2011/wedding expo 04.jpg" class="highslide" onclick="return hs.expand(this)">
  					<img src="img/akce/prgw2011/wedding expo 04_thumb.jpg" alt="Highslide JS"
  						title="Click to enlarge" height="99" width="150" /></a>
  				<div class="highslide-caption">
  				    svatební model xxx
  				</div>


  			</div>
        <br/>



        <!-- DRUHA RADA -->
        <div>
  				<a id="thumb1" href="img/akce/prgw2011/wedding expo 06.jpg" class="highslide" onclick="return hs.expand(this)">
  					<img src="img/akce/prgw2011/wedding expo 06_thumb.jpg" alt="Highslide JS"
  						title="Click to enlarge" height="202" width="135" /></a>
  				<div class="highslide-caption">
  				    svatební model xxx
  				</div>
  				<a id="thumb1" href="img/akce/prgw2011/wedding expo 07.jpg" class="highslide" onclick="return hs.expand(this)">
  					<img src="img/akce/prgw2011/wedding expo 07_thumb.jpg" alt="Highslide JS"
  						title="Click to enlarge" height="202" width="135" /></a>
  				<div class="highslide-caption">
  				    svatební model xxx
  				</div>
  				<a id="thumb1" href="img/akce/prgw2011/wedding expo 08.jpg" class="highslide" onclick="return hs.expand(this)">
  					<img src="img/akce/prgw2011/wedding expo 08_thumb.jpg" alt="Highslide JS"
  						title="Click to enlarge" height="202" width="135" /></a>
  				<div class="highslide-caption">
  				    svatební model xxx
  				</div>
  				<a id="thumb1" href="img/akce/prgw2011/wedding expo 13.jpg" class="highslide" onclick="return hs.expand(this)">
  					<img src="img/akce/prgw2011/wedding expo 13_thumb.jpg" alt="Highslide JS"
  						title="Click to enlarge" height="202" width="135" /></a>
  				<div class="highslide-caption">
  				    svatební model xxx
  				</div>
          
          
          
          
        </div>
        <br/>



        <!--treti rada-->
        <div align="center">
          <a id="thumb1" href="img/akce/prgw2011/wedding expo 11.jpg" class="highslide" onclick="return hs.expand(this)">
  					<img src="img/akce/prgw2011/wedding expo 11_thumb.jpg" alt="Highslide JS"
  						title="Click to enlarge" height="99" width="150" /></a>
  				<div class="highslide-caption">
  				    svatební model xxx
  				</div>
          <a id="thumb1" href="img/akce/prgw2011/wedding expo 12.jpg" class="highslide" onclick="return hs.expand(this)">
  					<img src="img/akce/prgw2011/wedding expo 12_thumb.jpg" alt="Highslide JS"
  						title="Click to enlarge" height="99" width="150" /></a>
  				<div class="highslide-caption">
  				    svatební model xxx
  				</div>
          <a id="thumb1" href="img/akce/prgw2011/wedding expo 21.jpg" class="highslide" onclick="return hs.expand(this)">
  					<img src="img/akce/prgw2011/wedding expo 21_thumb.jpg" alt="Highslide JS"
  						title="Click to enlarge" height="99" width="150" /></a>
  				<div class="highslide-caption">
  				    svatební model xxx
  				</div>
  				
        </div>
	
        <br/>

        <!--4 RADA -->
        <div align="center">
  				<a id="thumb1" href="img/akce/prgw2011/wedding expo 16.jpg" class="highslide" onclick="return hs.expand(this)">
  					<img src="img/akce/prgw2011/wedding expo 16_thumb.jpg" alt="Highslide JS"
  						title="Click to enlarge" height="202" width="135" /></a>
  				<div class="highslide-caption">
  				    svatební model xxx
  				</div>
  				<a id="thumb1" href="img/akce/prgw2011/wedding expo 17.jpg" class="highslide" onclick="return hs.expand(this)">
  					<img src="img/akce/prgw2011/wedding expo 17_thumb.jpg" alt="Highslide JS"
  						title="Click to enlarge" height="202" width="135" /></a>
  				<div class="highslide-caption">
  				    svatební model xxx
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