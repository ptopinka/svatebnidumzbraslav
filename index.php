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
  
    includeCSS_JS();
  ?>
  <script type="text/javascript" src="js/highslide/highslide.js"></script>		<!--FOTO ZOOM -->
<link rel="stylesheet" type="text/css" href="js/highslide/highslide.css" />		<!--FOTO ZOOM -->
  
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
		    
		      <p> 
		          Vítáme Vás na stránkách Svatebního domu Zbraslav.<br/>
		          Půjčujeme a prodáváme svatební šaty Agnes, pánské svatební a společenské obleky Masterhand a společenské šaty Jora.
		      </p>
			 
			
				  <div id="odkazy">
				      <a class="noborder2" href="sv_saty.php" title="Svatební šaty"><img src="img/O_svatebni.JPG" align="left"/></a> 
				     
				      <a class="noborder2" href="panska.php" title="Pánské obleky"><img src="img/O_panske.JPG" align="left"/></a> 
				        
				      <a class="noborder" href="spolecenska.php" title="Společenské šaty"><img src="img/O_spolecenske.JPG"align="left"/></a>

				  </div>
         
         
				<div id="obsahmasle">
					<img src="img/masle_bottom.png">
				</div>
				
				<p>Šaty AGNES jsou romantického vzhledu, které se vyznačují  elegancí a exklusivitou. Jsou vyšity  ručně zdobenou výšivkou z perel a Swarovski korálků. Materiály se střídají od klasického těžkého saténu, po lehkou organzu. Nechybí také oblíbené široké mnohovrstvé tylové sukně. Šaty nabízíme v bílé barvě ale i v barvě ivory.
        Na mezinárodním veletrhu v Essenu (Německo) obdržely šaty AGNES cenu Award za nejlepší  kolekci  roku 2011.</p>
            <div>
        				<img style="padding: 0 0 3px 0"src="img/sv_saty/agnes/1_cena.jpg">
        			</div>
		    
		  </div> <!-- end obsah-->
			  <?php
				printRightBanner();
			  ?>
		</div>  <!-- konec content  -->



	<div id="footer">
		<?php
		  printFooter();
		?>
	</div>
	
</body>	
	


