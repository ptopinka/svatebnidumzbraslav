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
	
    <div class="obsah">  <!-- obsah je levy sirsi sloupec contentu-->
				
				<div class="titulek">Společenská móda</div>
				<div class="masle">
					<img src="img/masle.png"/>
				</div>			
					<div align="center">
					<table>
					<tr>
						<td ><a  href="sp_kokt.php" title="Koktejlové šaty"><img  height="300" src="img/sp_saty/koktejlky/kokt (1).jpg" align="left"/></a></td> 
				        <td>&nbsp;</td>
						<td><a  href="sp_vecerni.php" title="Večerní šaty"><img height="300" src="img/sp_saty/vecerni/vecer (2).jpg"align="left"/></a></td>
					</tr> 
				    <tr>
						<td align="center">Koktejlky</td>
				        <td>&nbsp;</td>

						<td align="center">Večerní šaty</td>
						
					</tr>
					</table>
					</div>
				<!-- GALERIE 
				<div class="titulek">Společenské šaty</br>IVAMODA</div>
				<div class="masle">
					<img src="img/masle.png"/>
				</div>



    
		<div> 
				<a id="thumb1" href="img/sp_saty/ivamoda/01.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/ivamoda/th/01_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
 

				<a id="thumb1" href="img/sp_saty/ivamoda/02.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/ivamoda/th/02_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>

				<a id="thumb1" href="img/sp_saty/ivamoda/03.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/ivamoda/th/03_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/04.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/ivamoda/th/04_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
			
			</div>

  
		  <div> 
				<a id="thumb1" href="img/sp_saty/ivamoda/05.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/ivamoda/th/05_thumb.jpg" alt="Highslide JS"
					title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
 
				<a id="thumb1" href="img/sp_saty/ivamoda/06.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/ivamoda/th/06_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>

				<a id="thumb1" href="img/sp_saty/ivamoda/07.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/ivamoda/th/07_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/08.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/ivamoda/th/08_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>

			</div>
 
		  <div> 


					<a id="thumb1" href="img/sp_saty/ivamoda/09.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/ivamoda/th/09_thumb.jpg" alt="Highslide JS"
					title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
 

				<a id="thumb1" href="img/sp_saty/ivamoda/10.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/ivamoda/th/10_thumb.jpg" alt="Highslide JS"
					title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>

				<a id="thumb1" href="img/sp_saty/ivamoda/11.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/ivamoda/th/11_thumb.jpg" alt="Highslide JS"
					title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/12.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/ivamoda/th/12_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>

  			</div>

  
  		  <div> 

  					<a id="thumb1" href="img/sp_saty/ivamoda/13.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/ivamoda/th/13_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/14.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/ivamoda/th/14_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>	
				
				<a id="thumb1" href="img/sp_saty/ivamoda/15.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/ivamoda/th/15_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/16.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/ivamoda/th/16_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
      	</div>
    
    	  <div> 

				<a id="thumb1" href="img/sp_saty/ivamoda/17.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/ivamoda/th/17_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/18.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/ivamoda/th/18_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>	
				
				<a id="thumb1" href="img/sp_saty/ivamoda/19.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/ivamoda/th/19_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/20.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/ivamoda/th/20_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>

      	</div>
  
      	<div> 

				<a id="thumb1" href="img/sp_saty/ivamoda/21.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/ivamoda/th/21_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/22.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/ivamoda/th/22_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/23.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/ivamoda/th/23_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/24.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/ivamoda/th/24_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>

  			</div>

 
    		<div> 

  				<a id="thumb1" href="img/sp_saty/ivamoda/25.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/ivamoda/th/25_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/26.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/ivamoda/th/26_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/27.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/27_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/28.jpg" class="highslide" onclick="return hs.expand(this)">
					<img src="img/sp_saty/ivamoda/th/28_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
   			</div>
			
     		<div> 

  				<a id="thumb1" href="img/sp_saty/ivamoda/29.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/29_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/30.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/30_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/31.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/31_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="275" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				
   			</div>
			
 
    		<div> 
				
				<a id="thumb1" href="img/sp_saty/ivamoda/32.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/32_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>

				
  				<a id="thumb1" href="img/sp_saty/ivamoda/33.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/33_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/34.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/34_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/35.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/35_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
			</div>	
				

    		<div>			
				
				<a id="thumb1" href="img/sp_saty/ivamoda/36.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/36_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
   			

  				<a id="thumb1" href="img/sp_saty/ivamoda/37.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/37_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/38.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/38_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/39.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/39_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
			</div>
			
			
		<div>	
				<a id="thumb1" href="img/sp_saty/ivamoda/40.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/40_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
   			
				<a id="thumb1" href="img/sp_saty/ivamoda/41.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/41_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/42.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/42_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/43.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/43_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
			</div>
			
			
			
		<div>	
				<a id="thumb1" href="img/sp_saty/ivamoda/44.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/44_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/45.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/45_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/46.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/46_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/47.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/47_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
			
			</div>
			
			
			
			
			
		<div>
				<a id="thumb1" href="img/sp_saty/ivamoda/48.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/48_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/49.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/49_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/50.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/50_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/51.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/51_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
			
			</div>


			
		<div>
				<a id="thumb1" href="img/sp_saty/ivamoda/52.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/52_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/53.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/53_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/54.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/54_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/55.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/55_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
			
			</div>


			
		<div>
				<a id="thumb1" href="img/sp_saty/ivamoda/56.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/56_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/57.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/57_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/58.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/58_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/59.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/59_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
			
			</div>

			
		<div>
				<a id="thumb1" href="img/sp_saty/ivamoda/60.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/60_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/61.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/61_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/62.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/62_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/63.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/63_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
			
			</div>
			
			
		<div>
				<a id="thumb1" href="img/sp_saty/ivamoda/64.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/64_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/65.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/65_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/66.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/66_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
				
				<a id="thumb1" href="img/sp_saty/ivamoda/67.jpg" class="highslide" onclick="return hs.expand(this)">
						<img src="img/sp_saty/ivamoda/th/67_thumb.jpg" alt="Highslide JS"
						title="Click to enlarge" height="202" width="135" /></a>
				<div class="highslide-caption">
				    svatební model xxx
				</div>
			
			</div>
			
			-->
			
    </div> <!-- end of div obsah -->



    <?php
      printRightBanner();
    ?>

			
	</div> <!-- konec content-->
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