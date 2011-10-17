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
		  <div class="obsah"> <h4> Srdečně Vás vítáme </br>&nbsp; &nbsp; &nbsp; na stránkách nově otevřeného Svatebního domu Zbraslav, </br>
		&nbsp; &nbsp; &nbsp; kde najdete vše, co potřebujete pro Vaši svatbu pod jednou </br>&nbsp; &nbsp; &nbsp;střechou.</h4>
				<div id="odkazy"><a class="noborder2" href="sv_saty.php" title="Svatební šaty"><img src="img/O_svatebni.JPG" align="left"></a> 
				&nbsp; &nbsp; &nbsp;
				<a class="noborder2" href="panska.php" title="Pánské obleky"><img src="img/O_panske.JPG" align="left"></a> 
						
				 &nbsp;  &nbsp; &nbsp;
				<a class="noborder" href="spolecenska.php" title="Společenské šaty"><img src="img/O_spolecenske.JPG"align="left"></a>
				
					</div>
              Svatební dům Zbraslav se nachází na Zbraslavském náměstí
					</div>
		    
		    <div class="banner">
					<a href="img/Pruhonice.png" class="highslide" onclick="return hs.expand(this)">
								<img src="img/Pruhonice.png" alt="Highslide JS"
									title="Click to enlarge" height="200" width="200" />
									</a>
              Svatební festival v Průhonicích je skvělá akce kde si můžete prohlédnout vybrané kolekce našich předních návrhářů.
				</div>
		
			 
				<!--  

			<div id="letak">
			<a class="noborder"><img src="img/letakA.png" align="left"></a> 
			
			<a class="noborder"><img src="img/letak.png" align="middle"></a> 
						
				
				<a class="noborder"><img src="img/letakB.png"align="right"></a>
				</div>
			
			
			 <div id="banner2"><a href="https://www.facebook.com/pages/Svatebn%C3%AD-d%C5%AFm-Zbraslav/138554529553318" target="_TOP" style="font-family: &quot;lucida grande&quot;,tahoma,verdana,arial,sans-serif; font-size: 11px; font-variant: normal; font-style: normal; font-weight: normal; color: #3B5998; text-decoration: none;" title="Svatební dům Zbraslav">Svatební dům Zbraslav</a><br/><a href="https://www.facebook.com/pages/Svatebn%C3%AD-d%C5%AFm-Zbraslav/138554529553318" target="_TOP" title="Svatební dům Zbraslav"><img src="https://badge.facebook.com/badge/138554529553318.1243.1211758484.png" style="border: 0px;" /></a><br/><a href="http://www.facebook.com/business/dashboard/" target="_TOP" style="font-family: &quot;lucida grande&quot;,tahoma,verdana,arial,sans-serif; font-size: 11px; font-variant: normal; font-style: normal; font-weight: normal; color: #3B5998; text-decoration: none;"></a> 
		
			</div>  -->
		
  </div>  <!-- konec content  -->
	<div id="footer">
		<?php
		  printFooter();
		?>
	</div>
	
</body>	
	


