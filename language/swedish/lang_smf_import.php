<?php

// smf_import.php language file

$language['charset']='ISO-8859-1';
$lang[0]='Ja';
$lang[1]='Nej';
$lang[2]='<center><u><strong><font size="4" face="Arial">Iscens�tta 1: Initialbokstav Krav</font></strong></u></center><br />';
$lang[3]='<center><strong><font size="2" face="Arial">SMF arkiv erbjuda i "smf" mappen?<font color="';
$lang[4]='">&nbsp;&nbsp;&nbsp; ';
$lang[5]='</font></center></strong>';
$lang[6]='<br /><center>sn�lla <a target="_new" href="http://www.simplemachines.org/download/">Ladda hem SMF</a> och ladda upp inneh�llet av de arkiv i "smf" mappen.<br />Om man har i "smf" mappen vars�god frambringa n�gon i ditt f�rf�ljare rot och ladda upp<br/>inneh�llet av de arkiv att det.<br /><br />n�r det v�l �r uppladdat s� ska det sluta med ett litet p f�r att anv�ndas med $lang[8]
$lang[7]='<br /><center>P'; //anv�nd P som versal f�r anv�ndning med $lang[8]
$lang[8]='arrendera installerare av SMF genom att <a target= '_new' href= 'smf/install.php' >Tryck h�r</a>*<br /><br /><strong>* Sn�lla anv�nd samma databas inloggning detaljer som dom anv�nt till din tracker,<br />du kan anv�nda vilken databas prefix du vill (undantaget som du anv�nde n�r<br />tracker blev installerad )<br /><br />';
$lang[9]='<font color= '#0000FF' size= '3' >Du f�r uppfriska den sida en g�ng s� du har de n�dv�ndig bestyr!</font></strong></center>';
$lang[10]='<center><strong>SMF installerad?<font color="';
$lang[11]='Fil hittades inte!';
$lang[12]='Filen hittades men det g�r inte att skriva till den!';
$lang[13]='<center><strong>Standard SMF Engelska error filen �r tillg�nglig och skrivbar?<font color="';
$lang[14]='<center><strong>smf.sql filen beh�vs i 'sql' mappen?<font color="';
$lang[15]='<br /><center><strong>spr�k fil (';
$lang[16]=')<br />saknas, g�r dig s�ker <font color="#FF0000"><u>alla SMF filer</u></font> blev uppladdade!<br /><br />';
$lang[17]=')<br />�r inte skrivbar, <font color="#FF0000"><u>sn�lla �ndra r�ttigheterna till 777</u></font><br /><br />';
$lang[18]='<br /><center><strong>smf.sql �r saknad, <font color="#FF0000"><u>sn�lla g�r dig s�ker p� att filen finns i "sql" mappen.</u></font><br />(det borde funka b�ttre med Xbtit!)<br /><br />';
$lang[19]='<br /><center>Alla krav �r uppfyllda, vars�god <a href="';
$lang[20]='">tryck h�r f�r att forts�tta</a></center>';
$lang[21]='<center><u><strong><font size="4" face="Arial">Iscens�tta 2: Initialbokstav System</font></strong></u></center><br />';
$lang[22]='<center>verifierat allt �r i ordning det �r dags att modifiera databasen<br />att medf�ra allt �verensst�mma med de f�ljande.</center><br />';
$lang[23]='<center><form name="db_pwd" action="smf_import.php" method="GET">skriv in databas l�snordet;<input name="pwd" size="20" /><br />'."\n".'<br />."\n".<strong>sn�lla <input type="submit" name="confirm" value="yes" size="20" /> f�r att forts�tta</strong><input type="hidden" name="act" value="init_setup" /></form></center>';
$lang[24]='<center><u><strong><font size="4" face="Arial">Iscens�tta 3: Importerande trackern's medlemmar</font></strong></u></center><br />';
$lang[25]='<center>Nu har databasen blivit installerat ordentligt det �r tid till att starta importering av trackern's medlemmar,<br />Det kan ta l�ng tid ifall du har stort medlemsantal i databasen, var sn�ll v�nta medans det h�ller p�<br />Scriptet gjorde det det skulle g�ra :)!<br /><br /><strong>sn�lla <a href="'.$_SERVER['PHP_SELF'].'?act=member_import&amp;confirm=yes">Tryck h�r</a> f�r att forts�tta</center>';
$lang[26]='<center><u><strong><font size="4" face="Arial">ledsen</font></strong></u></center><br />';
$lang[27]='<center>Ledsen, det �r menat att detta ska bli anv�nt en g�ng , sen �verge script och eftersom du redan har anv�nt denna fil s� har den blivit l�st!</center>';
$lang[28]='<center><br /><strong><font color="#FF0000"><br />';
$lang[29]='</strong></font> Forum kontona skapades precis som dom ska, sn�lla <a href="'.$_SERVER['PHP_SELF'].'?act=import_forum&amp;confirm=no">Tryck h�r</a> f�r att forts�tta</center>';
$lang[30]='<center><u><strong><font size="4" face="Arial">Iscens�tta 4: Importerande forum utsende & medelande</font></strong></u></center><br />';
$lang[31]='<center>Detta �r sista steget i foruminstallationen, detta kommer s�tta in alla BTI Forum till SMF,<br />dom kommer hamna i en ny kategori kallad "My BTI import",<br />sn�lla <a href="'.$_SERVER['PHP_SELF'].'?act=import_forum&amp;confirm=yes">Tryck h�r</a> f�r att forts�tta</center>';
$lang[32]='<center><u><strong><font size="4" face="Arial">Importering f�rdig</font></strong></u></center><br />';
$lang[33]='<center><font face="Arial" size="2">Please <a target="_new" href="smf/index.php?action=login">logga in till din nya smf forum</a> anv�nd dina torrent login detaljer f�r att logga in<br />the <strong>Admin Panel</strong> sen v�lj <strong>Forum Underh�ll</strong> och k�r<br /><strong>hitta n�gra fel och fixa dom.</strong> efterf�ljd av <strong>r�kna om alla forum<br />och statistik.</strong> st�da i importeringen och s� vidare.<br /><br /><strong><font color="#0000FF">sen s� borde din SMF forum vara f�rdig att anv�ndas!</font></strong></font></center>';
$lang[34]='<center><u><strong><font size="4" face="Arial" color="#FF0000">FEL!</font></strong></u></center><br />'."\n".'<br />'."\n".'<center><font face="Arial" size="3">Du skrev in fel l�snord eller s� �r du inte �garen av tracker'n!<br />'."\n".'notera att ditt IP har blivit loggad.</font></center>';
$lang[35]='</body>'."\n".'</html>'."\n";
$lang[36]='<center>kan inte skriva till:<br /><br /><b>';
$lang[37]='</b><br /><br />sn�lla var s�ker p� att filen �r skrivbar k�r sedan skriptet igen.</center>';
$lang[38]='<center><br /><font color= 'red' size= '4' ><b>Tillg�ng Nekad</b></font></center>';
?>