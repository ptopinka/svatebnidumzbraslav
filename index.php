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
		    
		      <h4> Srdečně Vás vítáme na stránkách nově otevřeného Svatebního domu Zbraslav</h4>
				  <div id="odkazy">
				      <a class="noborder2" href="sv_saty.php" title="Svatební šaty"><img src="img/O_svatebni.JPG" align="left"/></a> 
				        &nbsp; &nbsp; &nbsp;
				      <a class="noborder2" href="panska.php" title="Pánské obleky"><img src="img/O_panske.JPG" align="left"/></a> 
				        &nbsp;  &nbsp; &nbsp;
				      <a class="noborder" href="spolecenska.php" title="Společenské šaty"><img src="img/O_spolecenske.JPG"align="left"/></a>
				  </div>

					<div>
              Svatební dům Zbraslav se nachází na Zbraslavském náměstí
					</div>
		    
		  </div>
  		
  		
      <div class="banner">
    		<a href="img/Pruhonice.png" class="highslide" onclick="return hs.expand(this)">
    						<img src="img/Pruhonice.png" alt="Highslide JS"
    								  title="Click to enlarge" height="200" width="200" />
        </a>
              Svatební festival v Průhonicích je skvělá akce kde si můžete prohlédnout vybrané kolekce našich předních návrhářů.
      </div>

		
  </div>  <!-- konec content  -->



	<div id="footer">
		<?php
		  printFooter();
		?>
	</div>
	
</body>	
	


