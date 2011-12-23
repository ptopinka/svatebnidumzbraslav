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
		<div class="titulek">Šaty pro družičky</div>
			<div class="masle">
				<img src="img/masle.png"/>
			</div>
	  
            <!-- 1 RADA -->
            <div>
      				<a id="thumb1" href="img/druzicky/druzicky1.jpg" class="highslide" onclick="return hs.expand(this)">
      					<img src="img/druzicky/druzicky1.jpg" alt="Highslide JS"
      						title="Click to enlarge" height="202" width="135" /></a>
      				<div class="highslide-caption">
      				    Šaty pro družicky
      				</div>
      				<a id="thumb1" href="img/druzicky/druzicky2.jpg" class="highslide" onclick="return hs.expand(this)">
      					<img src="img/druzicky/druzicky2.jpg" alt="Highslide JS"
      						title="Click to enlarge" height="202" width="135" /></a>
      				<div class="highslide-caption">
      				    Šaty pro družicky
      				</div>
      				<a id="thumb1" href="img/druzicky/druzicky3.jpg" class="highslide" onclick="return hs.expand(this)">
      					<img src="img/druzicky/druzicky3_thumb.jpg" alt="Highslide JS"
      						title="Click to enlarge" height="202" width="135" /></a>
      				<div class="highslide-caption">
      				    Šaty pro družicky
      				</div>
      				<a id="thumb1" href="img/druzicky/druzicky4.jpg" class="highslide" onclick="return hs.expand(this)">
      					<img src="img/druzicky/druzicky4_thumb.jpg" alt="Highslide JS"
      						title="Click to enlarge" height="202" width="135" /></a>
      				<div class="highslide-caption">
      				    Šaty pro družicky
      				</div>




            </div>
            <br/>


            <!-- 2 RADA -->
            <div align="center">
      				<a id="thumb1" href="img/druzicky/druzicky5.jpg" class="highslide" onclick="return hs.expand(this)">
      					<img src="img/druzicky/druzicky5_thumb.jpg" alt="Highslide JS"
      						title="Click to enlarge" height="202" width="135" /></a>
      				<div class="highslide-caption">
      				    Šaty pro družicky
      				</div>
      				

            </div>
            <br/>

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