<?php

function printMeta() {
	print <<<END
		 <META HTTP-EQUIV="Pragma" CONTENT="no-cache"> 

		<META HTTP-EQUIV="Expires" CONTENT="-1"> 
		<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE"> 
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
END;
}


function printHeader() {
	print <<<END
  		 <div id="header">
  	    	<a class="noborder1" href="index.php" alt="Svatebni dům Zbraslav" title="Svatební dům Zbraslav"><img src="img/web_zahlavi_logo.png"></a> 
		      <!--
		      <a class="noborder" href="index.php" alt="Svatebni dům Zbraslav" title="Svatební dům Zbraslav"><img src="img/header.png"></a>
			    -->
				  <!-- 

			    <div id="new">
				    <a class="noborder" href="novinky.php" alt="tel: xxxx" title="Svatební dům Zbraslav"><img src="img/new.png"></a>
					    <div id="jazyk">
					      <b><a href="index.php">CZ</a>&nbsp;  <a href="EN.php">EN</a> &nbsp;<a href="DE.php">DE</a></b>
					    </div>
			  </div>
			   -->

			<div id="prouzek"> </div>
	</div>
			</div>
END;
}
function printMenu() {
	print <<<END
			<b>
				<ul class="level">
		
		  <li><a href="index.php">Home</a></li></b>
		  <li class="fly"><a href="#">Svatební móda</a>
					<ul>
					  <li><a href="sv_saty.php">Svatební Šaty</a></li>
						<li><a href="sv_zavoje.php">Závoje</a></li>
						<li><a href="sv_korunky.php">Korunky</a></li>
						<li><a href="sv_bizu.php">Bižuterie</a></li>
						<li><a href="sv_druzicky.php">Družicky</a></li>
						<li><a href="sv_bolerka.php">Bolerka</a></li>
						<li><a href="sv_boty.php">Boty</a></li>
					</ul>
      </li>
      <li class="fly"><a href="spolecenska.php">Společenská móda</a>

      					<ul>
      					    <li><a href="sp_vecerni.php">Večerní šaty</a></li>
      						<li><a href="sp_kokt.php">Koktejlové šaty</a></li>

      						<li><a href="doplnky.php">Doplňky</a></li>
      						<li><a href="sv_bizu.php">Bižuterie</a></li>
      						<li><a href="akce.php">Boty</a></li>
      					</ul>
      		<li>
					
					
		  <li class="fly"><a href="panska.php">Pánské móda</a>
					<ul>
						<li><a href="p_svat.php">Svatební</a></li>
						<li><a href="p_spol.php">Společenské</a></li>
						<li><a href="p_business.php">Business</a></li>
						<li><a href="p_chlapecke.php">Chlapecké obleky</a></li>
					</ul>
		  </li>
			<li><a href="krejcovstvi.php">Krejčovství</a></li>
			<li><a href="cistirna.php">Čistírna</a></li>
		  
		  
		  <li><a href="akce.php">Akce</a></li></br>
		  
		  <a href="partneri.php">Spolupracujeme</a></li>
		  <li><a href="onas.php">O nás</a></li>
     <li><a href="kontakt.php">Kontakt</a></li>
			
			
		</ul>
				
END;
}



function printTitle() {
	print <<<END
  	<title>Svatební dům Zbraslav</title>
END;
}



function printRightBanner() {

  print <<<END
    <div class="banner">
   		<a>
   						<img src="img/Pruhonice.png"
   								 height="200" width="200" />
       </a>
             Svatební festival v Průhonicích je skvělá akce kde si můžete prohlédnout vybrané kolekce našich předních návrhářů.
     </div>
END;
}



function printFooter() {
	print <<<END
      <p>Veroo (r)</p>
END;
}


function includeCSS_JS_noLeftMenu() {
	print <<<END

    <link href="css/layout_noleftmenu.css" rel="stylesheet">


    <script src="js/jquery/jquery.js"></script>
    <script src="js/jquery/jquery.tpl_layout.js"></script>
END;
} 

function includeCSS_JS() {
	print <<<END

<link href="css/layout.css" rel="stylesheet">
<link href="css/global.css" rel="stylesheet">


<script src="js/jquery/jquery.js"></script>
<script src="js/jquery/jquery.tpl_layout.js"></script>
END;
}



?>