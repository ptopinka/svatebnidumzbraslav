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
			<div class="titulek">Spodní prádlo SELMARK</div>
			<div class="masle">
				<img src="img/masle.png"/>
			</div>
			<p>Firma SELMARK se formuje již v sedmdesátých letech jako malá krejčovská dílna ve španělském městě Vigo.
V průběhu osmdesátých let se věnuje aplikaci nových technologií, specializuje se na bezešvé vyztužené košíčky ve větších velikostech.
V devadesátých letech je posílen export, a prádlo značky Selmark se vyváží do více než 30 zemí světa.
Úspěch tohoto prádla je hlavně ve skloubení pohodlí (perfektní střih, ale i velmi pečlivý výběr materiálu), atraktivního designu s důrazem na kvalitu a častou inovaci.
Dvakrát ročně jsou představeny nové kolekce – bohaté na různorodost střihů a také na barevnou škálu. 
Prádlo firmy Selmark nabízíme jak pro nevěsty tak i ve společenské sekci.<br/><a class="noborder" href="http://www.selmark.es"><img style="padding: 15px;" src="img/selmark/selmark.jpg"align="right"/></a>
<a href="http://www.selmark.es">www.selmark.es</a></p>
		<br/><br/><br/>
		<div align="center">
				<a id="thumb1" href="img/Selmark/sp (1).jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/Selmark/sp (1).jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="150" /></a>
				<div class="highslide-caption">
spodní prádlo Selmark				</div>

				<a id="thumb1" href="img/Selmark/sp (3).jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/Selmark/sp (3).jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="150" /></a>
				<div class="highslide-caption">
spodní prádlo Selmark				</div>
				
				<a id="thumb1" href="img/Selmark/sp (4).jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/Selmark/sp (4).jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="150" /></a>
				<div class="highslide-caption">
spodní prádlo Selmark				</div>
		</div>
	
	
		<div align="center">
				<a id="thumb1" href="img/Selmark/sp (2).jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/Selmark/sp (2).jpg" alt="Highslide JS"
						title="Click to enlarge" height="150" width="202" /></a>
				<div class="highslide-caption">
spodní prádlo Selmark				</div>

				<a id="thumb1" href="img/Selmark/sp (7).jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/Selmark/sp (7).jpg" alt="Highslide JS"
						title="Click to enlarge" height="150" width="202" /></a>
				<div class="highslide-caption">
spodní prádlo Selmark				</div>
			
		</div>
	
	<div align="center">
				<a id="thumb1" href="img/Selmark/sp (5).jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/Selmark/sp (5).jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="150" /></a>
				<div class="highslide-caption">
spodní prádlo Selmark				</div>

				<a id="thumb1" href="img/Selmark/sp (6).jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/Selmark/sp (6).jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="150" /></a>
				<div class="highslide-caption">
spodní prádlo Selmark				</div>
			
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