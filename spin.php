<?php



// PARSHING

function fetch_value($str,$find_start,$find_end) {
$start = @strpos($str,$find_start);
if ($start === false) {
return "";
}
$length = strlen($find_start);
$end = strpos(substr($str,$start +$length),$find_end);
return trim(substr($str,$start +$length,$end));
}

//JSON PARSE

function json($namaakhir, $namatampil){
$json = json_decode($namaakhir);
$hasil = $json->$namatampil;
return $hasil;
}

// PERUBAH WARNA TEXT

/* START COLOR */
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$merah="\033[0;31m";
$merah2="\033[1;31m";
$hijau="\033[0;32m";
$hijau2="\033[1;32m";
$kuning="\033[0;33m";
$kuning2="\033[1;33m";
$biru="\033[0;34m";
$biru2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";
/* END COLOR */

//  KARAKTER KOTAK
$seru=$putih2." [".$kuning2."?".$putih2."] ";
$plus=$putih2." [".$kuning2."+".$putih2."] ";
$cek=$putih2." [".$kuning2."✓".$putih2."] ";
$lis=$putih2."======================================================";
$lis1=$putih2. "\n ==================================== \n";
//      BANNER      \\

$baner=$kuning2."
____  _           _          ____          _
|  _ \(_)_ __ __ _| |_ ___   / ___|__ _ ___| |__
| |_) | | '__/ _` | __/ _ \ | |   / _` / __| '_ \
|  __/| | | | (_| | ||  __/ | |__| (_| \__ \ | | |
|_|   |_|_|  \__,_|\__\___|  \____\__,_|___/_| |_|
".$putih2;

$input=$kuning2."
___                   _     ____        _
|_ _|_ __  _ __  _   _| |_  |  _ \  __ _| |_ __ _
 | || '_ \| '_ \| | | | __| | | | |/ _` | __/ _` |
 | || | | | |_) | |_| | |_  | |_| | (_| | || (_| |
|___|_| |_| .__/ \__,_|\__| |____/ \__,_|\__\__,_|
          |_|
".$putih2;
$input=$input.$cek." CREATED BY : ".$hijau2."IAM TUBASYA ".$plus."SPIN \n";
$baner=$baner.$cek." CREATED BY : ".$hijau2."IAM TUBASYA ".$plus."SPIN \n";
// FUNCTION CURL POST
function post($url, $header, $data){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$result = curl_exec($ch);
	curl_close($ch);
	return $result;
    }

// FUNCTION CURL GET
function get($url, $header){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$result = curl_exec($ch);
	curl_close($ch);
	return $result;
}
system("clear"); sleep(1);
echo $lis.$input.$lis."\n"; sleep(1);
/*echo $putih2."                           [".$hijau2."jd=63728273".$putih2."]<--Example".$seru." \n".$lis."\n";
echo $plus."Masukan ".$kuning2."DATA JD".$putih2." Anda : " .$hijau2."jd=";
$jd=trim(fgets(STDIN)); sleep(1);*/ 
$jd="3217490552";
echo $plus."Masukan ".$kuning2."COOKIE".$putih2." Anda : " .$hijau2."Cookie:";
$cookie=trim(fgets(STDIN)); sleep(1);
system("clear"); sleep(1);
echo $lis.$baner.$lis; sleep(1);
$post=array(
"Host:piratecash.io",
"x-requested-with:XMLHttpRequest",
"user-agent:Mozilla/5.0 (Linux; Android 9; Mi A1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36",
"referer:https://piratecash.io/dashboard.php",
"Cookie:".$cookie
);
$get=array(
"Host:piratecash.io",
"upgrade-insecure-requests:1",
"user-agent:Mozilla/5.0 (Linux; Android 9; Mi A1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36",
"accept-language:id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7",
"Cookie:".$cookie
);

while(true):
echo $putih2."\n\n ✓".$lblue2." AUTO SPIN PIRATECASH.IO ".$putih2."~~~~" ;
$url="https://piratecash.io/dashboard.php";
	$das=get($url, $get);
	$a= explode( '<span><i class="fa fa-user-circle-o"></i>' , $das);
	$b = explode( '</span>' , $a[1]);
$nama=$plus."NickName : ".$hijau2.$b[0];
	$c = explode( '<b><span id="topgold" style="color: #fff;">' , $das);
	$d = explode( '</span>' , $c[1]);
$spin=$plus."Gold Spins : ".$hijau2.$d[0].$kuning2." X";
	$e = explode( '<span id="topcash">' , $das);
	$f = explode( '</span>' ,  $e[1]);
$cash=$plus."CashBalance : ".$hijau2."$".$f[0];
$dasbor=$nama."\n".$cash."\n".$spin; //echo $dasbor.$lis1;
$urlsp="https://piratecash.io/a_whee12k.php";
$datasp="jd=".$jd."&txmm=2";
$spiner=post($urlsp, $post, $datasp);
	$blc=explode('::',$spiner);
	$blc=explode('::::<font color="red">',$blc[1]);
echo $lis1."    ".$cek."CRACK BY: ".$hijau2."I'AM TUBASYA".$lis1;
$dasbor=$nama."\n".$cash."\n".$spin; echo $dasbor.$lis1;
$spn=$plus."DAPAT : ".$hijau2."$".$blc[0]; echo $spn;
$urlsc="https://piratecash.io/a_scratch.php";
$urlscd="https://piratecash.io/a_scratch_done.php";
$urlat="https://piratecash.io/a_tiles.php";
$urlch="https://piratecash.io/a_chests.php";
$urloch="https://piratecash.io/a_chests_open.php";
$cc=mt_rand(1, 3);
$dataoch="chestid=".$cc;
$clik=mt_rand(1, 10);
$clik1=mt_rand(1, 4);
$dataat="jd=".$jd."&tileclick=".$clik."&cashout=2";
$datasc="jd=".$jd;

$sc=post($urlsc, $post, $datasc);
$scd=post($urlscd, $post, $datasc); echo $putih2."\n A.SCREET : ".$kuning2.$scd;
post($urlat, $post, $dataat);
$at=post($urlat, $post, $dataat); echo $putih2."\n A.TILES : ".$kuning2.$at;
$ch=post($urlch, $post, $datasc);
$och=post($urloch, $post, $dataoch); echo $putih2."\n A.CHESTS : ".$kuning2.$och;
endwhile;

