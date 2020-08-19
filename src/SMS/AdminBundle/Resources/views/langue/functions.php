<?php
function generer($file,$data){	
	$handle = fopen("$file", "w");
	foreach($data as $ligne){
		fwrite($handle,$ligne);
	}
	fclose($handle);		
	return true;
}


function getData($langue){
$base = mysql_connect ('localhost', 'root', '');
mysql_select_db ('commune_souassi', $base) ;
$sql = "SELECT `id`, `FR_fr`, `EN_en`, `AR_ar` FROM `langue`"; 
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
			
$retour = "\n";
$data[] = 'front:';
$data[] = $retour;
$data[] = '    textes:';
			
while ($dat =mysql_fetch_array($req)) {
	$ar=$dat['AR_ar'];
	$fr=$dat['FR_fr'];
	$en=$dat['EN_en'];
	$id=$dat['id'];
     switch($langue){
		case 'ar':
			$data[] = $retour;
			$data[] = '        texte_'.$id.': '.$ar.'';			
			break;
		case 'fr':
			$data[] = $retour;
			$data[] = '        texte_'.$id.': '.$fr.'';
			break;
		default:
			$data[] = $retour;
			$data[] = '        texte_'.$id.': '.$en.' ';
			break;
			
	}
	
}
return $data;
}

if(isset($_POST['myFunction'])){
	if($_POST['myFunction'] == 'generer'){
		/// 
		$files['fr'] = "messages.fr.yml";
		$files['ar'] = "messages.ar.yml";
		$files['en'] = "messages.en.yml";
		foreach($files as $data => $file){
			$data = getData($data);
			$ok = generer($file,$data); 
		}
		if ($ok) echo 'OK';
		else echo 'KO';
	}
}

?>