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
		
				<ul class="level">
		
		  <li class="fly"><a href="svatebni.php">Svatební móda</a></li>
					<ul>
						<li><a href="sv_saty.php">čaty</a></li>
						<li><a href="akce.php">Reference</a></li>
						<li><a href="akce.php">CSS Reference</a></li>
					</ul>
		  <li><a href="panska.php">Pánská móda</a></li>
		  
		  <li class="fly"> <a href="spolecenska.php">Společenská móda</a>
					<ul>
						<li><a href="saty.php">čaty</a></li>
						<li><a href="akce.php">Reference</a></li>
						<li><a href="akce.php">CSS Reference</a></li>
					</ul>
		<li><a href="partneri.php">Spolupracujeme</a></li>
		  <li><a href="onas.php">O nás</a></li>
		  <li><a href="doplnky.php">Doplňky</a></li></br>
		  <li><a href="novinky.php">Novinky</a></li>
		  <li><a href="akce.php">Akce</a></li></br>
		   <li><a href="kontakt.php">Kontakt</a></li>
			
			
		</ul>
		</div>		
	
	<div id="content">
		<p>jkokjojofiaojfhjffffffffffffffffffffffffffffffjkojfheifurfhgfghafuefahf fuehufuhfgefg feugf fgf f feuf eugf f efu f f</br></br>
		<div id="center"><h3> Srdečně Vás vítáme na stránkách nově otevřeného Svatebního domu Zbraslav, kde najdete vše, co potřebujete pro Vaši svatbu pod jednou střechou.</h3>
		</div>
			<div id="letak">
			<a class="noborder"><img src="img/letakA.png" align="left"></a> 
			
			<a class="noborder"><img src="img/letak.png" align="middle"></a> 
						
				
				<a class="noborder"><img src="img/letakB.png"align="right"></a>
				
			</div>
			
			<div id="banner"><a href="https://www.facebook.com/pages/Svatebn%C3%AD-d%C5%AFm-Zbraslav/138554529553318" target="_TOP" style="font-family: &quot;lucida grande&quot;,tahoma,verdana,arial,sans-serif; font-size: 11px; font-variant: normal; font-style: normal; font-weight: normal; color: #3B5998; text-decoration: none;" title="Svatební dům Zbraslav">Svatební dům Zbraslav</a><br/><a href="https://www.facebook.com/pages/Svatebn%C3%AD-d%C5%AFm-Zbraslav/138554529553318" target="_TOP" title="Svatební dům Zbraslav"><img src="https://badge.facebook.com/badge/138554529553318.1243.1211758484.png" style="border: 0px;" /></a><br/><a href="http://www.facebook.com/business/dashboard/" target="_TOP" style="font-family: &quot;lucida grande&quot;,tahoma,verdana,arial,sans-serif; font-size: 11px; font-variant: normal; font-style: normal; font-weight: normal; color: #3B5998; text-decoration: none;"></a> </div> 
		
	</div>

	
	
	<div id="footer">
		<?php
		  printFooter();
		?>
	</div>


</body>