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
		<div class="obsahcenter" >
		
			<div class="titulek">Kontakty</div>
			<div class="masle">
				<img src="img/masle.png"/>
			</div>
      
        
			<div align="center">
			  Zbraslavské nám. 463<br/>
		    156 00 Praha 5 - Zbraslav
		  </div>
			<div align="center" >
			<table width="250px">
			  <tr><td align="center">tel.: 257 313 288 </td></tr>
			  <tr><td align="center">mobil: 731 109 628 </td></tr>
			  <tr><td align="center">e-mail:  info@svatebnidumzbraslav.cz</td></tr>
			</table>
			</div> 
			 
			   <hr>
      <b>Otevírací doba</b><br/>
      <div align="center">
			<table border="0" width="250px"  >
			  <tr> 
			    <td align="left">po - pá </td>
			    <td align="right">12.00 - 18.00</td>
			  </tr>
			  <tr>	
			    <td align="left">	so</td>
			    <td align="right">9.00  -	14.00 </td>
			  </tr>
			  <tr>		
			    <td colspan="2" align="center">	(dle tel. objednávek)</td>
			  </tr></table>
			</div>
			<br/>
			

			<div>
				<img src="img/kontakt/prodejna.JPG">
			</div>
			
				
			
			
		</div> <!-- end obsah-->
  		
		  <?php
			printRightBanner();
		  ?>
	</div> <!-- end of content-->
	
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