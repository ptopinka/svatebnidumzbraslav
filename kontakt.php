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
		<div align="center">
		<p><br>
		<p><blockquote>Zbraslavské nám. 463
		<br>156 00 Praha 5 - Zbraslav
		
		 <p><hr>
		<table border="0" width="250px" float="left" text-align="center" >
					<CAPTION><b>Otevírací doba</b></CAPTION>
		<tr> <td>po - pá <td>12.00 - 18.00
			</tr>
		<tr>	<td>	so
			<td>9.00  -	14.00 </tr>
		<tr>		<td><td>	(dle tel. objednávek)</table>
		<p><blockquote>tel.:&nbsp; &nbsp; &nbsp; 257 313 288
		<br>mobil: &nbsp;&nbsp;&nbsp;731 109 628
		<p><blockquote>e-mail: &nbsp;&nbsp; info@svatebnidumzbraslav.cz</blockquote> </blockquote></blockquote>
		</div>
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