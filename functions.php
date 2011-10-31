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
          <div class="headerlogo">
  	    	  <a class="noborder1" href="index.php" alt="Svatebni dům Zbraslav" title="Svatební dům Zbraslav"><img src="img/web_zahlavi_logo.png"></a> 
          </div>
		      <div class="headerbanner">
		        <a class="noborder" href="index.php" alt="Svatebni dům Zbraslav" title="Svatební dům Zbraslav"><img src="img/header.png"></a>
          </div>

          <div id="headercontact">
              <!--<div class="contacthead">
                Zbraslavské nám. 463<br/>
                156 00 Praha 5 Zbraslav<br/>
                tel: 257 313 288, mobil: 731 109 628<br/>
                email: info@svatebnidumzbraslav.cz
              </div>
              <div class="contactfoot">
              <br/>
              po-pá 12:00-18:00 hodin, so 9:00-14:00 hodin<br/>
              (dle tel. objednávek)
              </div> --> 
			  
			  <a class="noborder1" href="kontakt.php" alt="Svatebni dům Zbraslav" title="Svatební dům Zbraslav"><img src="img/kontakt.gif"></a> 
              
            
          </div>
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
		
		  <li><a href="index.php">Úvod</a></li></b>
		  <li class="fly"><a href="#">Svatební móda</a>
					<ul>
					  <li><a href="sv_saty.php">Svatební šaty</a></li>
						<li><a href="sv_zavoje.php">Závoje</a></li>
						<li><a href="sv_korunky.php">Korunky</a></li>
						<li><a href="sv_bizu.php">Bižuterie</a></li>
						<li><a href="sv_druzicky.php">Družičky</a></li>
						<li><a href="sv_bolerka.php">Bolerka</a></li>
						<li><a href="sv_boty.php">Boty</a></li>
					</ul>
      </li>
      <li class="fly"><a href="#">Společenská móda</a>

      					<ul>
							<li><a href="spolecenska.php">Společenské šaty</a>
      					    <li><a href="sp_vecerni.php">Večerní šaty</a></li>
      						<li><a href="sp_kokt.php">Koktejlové šaty</a></li>

      						<li><a href="doplnky.php">Doplňky</a></li>
      						<li><a href="sv_bizu.php">Bižuterie</a></li>
      						<li><a href="sp_boty.php">Boty</a></li>
      					</ul>
      		<li>
					
					
		  <li class="fly"><a href="panska.php">Pánská móda</a>
					<ul>
						<li><a href="p_svat.php">Svatební obleky</a></li>
						<li><a href="p_spol.php">Společenské obleky</a></li>
						<li><a href="p_business.php">Business obleky</a></li>
						<li><a href="p_chlapecke.php">Chlapecké obleky</a></li>
					</ul>
		  </li></br>
			<li><a href="krejcovstvi.php">Krejčovství</a></li>
			<li><a href="cistirna.php">Čistírna</a></li></br>
		  
		  
		  
		  
		  <li><a href="partneri.php">Spolupracujeme</a></li>
		  <li><a href="akce.php">Akce</a></li>
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
   						<img src="img/akce.JPG"
   								 height="229" width="200" />
       </a>
             <!--Svatební festival v Průhonicích je skvělá akce kde si můžete prohlédnout vybrané kolekce našich předních návrhářů.-->
     </div>
    <div class="banner" style="text-align:right;">
     <a href="https://www.facebook.com/pages/Svatebn%C3%AD-d%C5%AFm-Zbraslav/138554529553318" target="_blank"><img src="img/facebook_badge.jpg" alt="Check us out on Facebook!" /></a>
		
    </div> 
    
END;
}



function printFooter() {
	print <<<END
      <div  class="company">
      <p>Created By Veroo &copy; <a href="mailto:ptopinka@gmail.com">email</a></p>
      </div>
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