<?php 

function canQueenAttack($qR, $qC, $oR, $oC) 
{ 
	
	if ($qR == $oR) 
		return true; 

	
	if ($qC == $oC) 
		return true; 

	
	if (abs($qR - $oR) == abs($qC - $oC)) 
		return true; 

	return false; 
} 

$qR = 0; $qC = 0; 
$oR = 0; $oC = 0;
$hasil="";
$stdin = fopen("php://stdin", "r");

echo "Start\n";
//var_dump($nk);exit;
$ke=0;
for($i=0;$i<4;$i++){
	//echo "I na ".$i."\n";
	$ke=$ke+1;
	echo "Masukan bidak ".$ke." (x,y):\n";
	fscanf($stdin, "%[^\n]", $qrqc_temp);
	$qrqc = explode(',', $qrqc_temp);
	$qR=intval($qrqc[0]);
	$qC=intval($qrqc[1]);
	
	$ke=$ke+1;
	echo "Masukan bidak ".$ke." (x,y):\n";
	fscanf($stdin, "%[^\n]", $oroc_temp);
	$oroc = explode(',', $oroc_temp);
	$oR=intval($oroc[0]);
	$oC=intval($oroc[1]);
	
	if (canQueenAttack($qR, $qC, $oR, $oC)) 
		$hasil.="(".$qr.",".$c.") "; 
	else
		$hasil="Tidak ditemukan ";
}

echo "Hasil\n";
echo $hasil;

?> 
