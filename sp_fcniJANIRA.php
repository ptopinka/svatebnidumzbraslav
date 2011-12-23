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
			<div class="titulek">Fukční prádlo JANIRA</div>
			<div class="masle">
				<img src="img/masle.png"/>
			</div><p>MANENT CASANOVAS vyrábí spodní prádlo a punčochové zboží španělské značky JANIRA již 50. let.
JANIRA dbá na maximální pohodlí, zpracování a také výběr prvotřídních materiálů.
Nyní je nejoblíbenější řadou Secrets – opravdu skutečná revoluce v dámském spodním prádle, která
v jediném kuse skrývá pohodlí kalhotek a důmyslnost tang. Nová série kalhotek bez lemů z funkčního materiálu se nerýsuje pod ošacením.
Kolekce zahrnuje několik různých variant. Novinkou je také „Silueta“ – tedy vysoké stahovací kalhotky korzetového typu napomohou k perfektní siluetě a redukují až o jednu velikost.<br/>
<a href="http://www.janira.es">www.janira.es</a></p> <a class="noborder" href="http://www.janira.es"><img style="padding: 0px;" src="img/janira/janira.jpg"align="right"/></a>
<a class="noborder"><img src="img/janira/1.jpg"align="left"/></a>
<a class="noborder"><img src="img/janira/2.jpg"align="left"/></a>

	
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