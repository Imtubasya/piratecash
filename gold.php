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
$lis1=$putih2. "\n ======================================== \n";
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
$input=$input.$cek." CREATED BY : ".$hijau2."IAM TUBASYA ".$plus."SPIN \n".$lis."\n";
$baner=$baner.$cek." CREATED BY : ".$hijau2."IAM TUBASYA ".$plus."SPIN \n".$lis."\n";;
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
system("clear"); sleep(1); echo $input;
echo $plus."Masukan ".$kuning2."COOKIE".$putih2." Anda : " .$hijau2."Cookie:";
	$cookie=trim(fgets(STDIN)); sleep(1);
$header=array(
"Host:piratecash.io",
"user-agent:Mozilla/5.0 (Linux; Android 9; Mi A1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36",
"Cookie:".$cookie
);
system("clear"); echo $baner;
echo $plus."LOADING ".$kuning2."--> "; sleep(1); echo "--> "; sleep(1); echo "--> ";
$url="https://piratecash.io/refill.php";
	get($url, $header);
echo "--> "; sleep(1); echo "--> "; sleep(1); echo "--> "; sleep(1); echo "--> ";
$url1="https://piratecash.io/refill.php?requestrefill=1";
	$req=get($url1, $header);
$a= explode( '<a onclick="waitRefill();" class="btn btn-lg bg-gradient-btn-d mb-0 requestlink">' , $req);
$b = explode( '</a>' , $a[1]);
	$status=$cek."STATUS : ".$kuning2.$b[0];
echo "\n".$plus."LOADING ".$kuning2."--> "; sleep(1); echo "--> "; sleep(1); echo "--> "; sleep(1); echo "--> "; sleep(1); echo "--> "; sleep(1); echo "--> "; sleep(1);  echo $putih2." OK! ";
sleep(1); echo $lis1;
for ($×=1800;$×>0;$×--){
echo "\r   \r";
echo $putih2."\r   • WAITING FOR =>| ".$kuning2.$×.$putih2." |=> SECOND ";
sleep(1);
}
echo $lis1.$plus."LOADING ".$kuning2."--> "; sleep(1); echo "--> "; sleep(1); echo "--> "; sleep(1); echo "--> "; sleep(1); echo $putih2." OK! ";
$url2="https://piratecash.io/refill.php";
	$refil=get($url2, $header);
$aa= explode( '<br />
<a href="', $refil);
$bb= explode( '" class="', $aa[1]);
	$refclaim=$bb[0];
echo "\n".$plus."LOADING ".$kuning2."--> "; sleep(1); echo "--> "; sleep(1); echo "--> "; sleep(1); echo "--> "; sleep(1); echo $putih2." OK! ";
$url3="https://piratecash.io/refill.php".$refclaim;
get($url3, $header); sleep(1);
echo $lis1.'        SUKESESS!!';
