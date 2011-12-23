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
			<div class="titulek">Pánské obleky</div>
			<div class="masle">
				<img src="img/masle.png"/>
			</div>
			<h3>Nabízíme tyto obleky od značky Masterhand</h3>
			
			<!--
			<div id="odkazy">
				      <a class="noborder2"  title="Svatební šaty"><img src="img/O_svatebni.JPG" align="left"/></a> 
				     
				      <a class="noborder2"  title="Pánské obleky"><img src="img/O_panske.JPG" align="left"/></a> 
				        
				      <a class="noborder"  title="Společenské šaty"><img src="img/O_spolecenske.JPG"align="left"/></a>

				  </div>
				  -->
			<div style="padding: 30px 0 0 0">  
				<a id="thumb1" href="img/panska/mame/SandroLive3.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/panska/mame/SandroLive1.jpg" alt="Highslide JS"
						title="Click to enlarge" height="309" width="180" /></a>
				<div class="highslide-caption">
	
					Barva: Latte Macchiato</br>
					Kvalita látky: 54%  vlna, 46% polyester, 290g</br>
					Velikosti: 25-29, 46-58, 94-110</br>
					Doplňky: vesta, plastron + kapesníček nebo kravata</br>
				</div>
 

				<a id="thumb1" href="img/panska/mame/Celebration.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/panska/mame/th/Celebration.jpg" alt="Highslide JS"
						title="Click to enlarge" height="309" width="179" /></a>
				<div class="highslide-caption">
				    Barva: černá jemný proužek</br>
Kvalita látky: 61%  vlna, 39% polyester</br>Sako s rozparkem, zadní délka 76 cm</br>Kalhoty šíře nohavice dole 44 cm</br>Velikosti: 23-32, 44-64, 90-118</br>
Doplňky: vesta, plastron + kapesníček nebo kravata</br>
				</div>
				    
							<a id="thumb1" href="img/panska/mame/CelebrationBlack3.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/panska/mame/th/CelebrationBlack.jpg" alt="Highslide JS"
						title="Click to enlarge" height="309" width="180" /></a>
				<div class="highslide-caption">
				   Barva: černá nebo tmavě hnědá uni</br>
 Kvalita látky: 61%  vlna, 39% polyester</br>
Sako s rozparkem, zadní délka 76 cm</br>
Kalhoty šíře nohavice dole 44 cm</br>
Velikosti možné: 23-32, 44-64, 90-118</br>
Doplňky: vesta, plastron + kapesníček nebo kravata</br>

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