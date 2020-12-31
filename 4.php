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
$lis1=$putih2. "\n =============================================================== \n";

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
$input=$input.$cek." CREATED BY : ".$hijau2."IAM TUBASYA ".$seru."GAME 0/1/2 \n".$lis."\n";
$baner=$baner.$cek." CREATED BY : ".$hijau2."IAM TUBASYA ".$seru."CLAIM JACKPOT \n".$lis."\n";;

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
/*echo $baner.$plus."Masukan ".$kuning2."COOKIE".$putih2." Anda : " .$hijau2."Cookie:";
$cookie=trim(fgets(STDIN)); sleep(1);*/

$cookie="__cfduid=d5ea3af6b4ce06c19c37a39cc5648c7e91609248601;_ga=GA1.1.34946308.1609248602;dom3ic8zudi28v8lr6fgphwffqoz0j6c=735e54b9-467e-4b8b-a353-75ad00d796b4%3A2%3A1;494668b4c0ef4d25bda4e75c27de2817=735e54b9-467e-4b8b-a353-75ad00d796b4:2:1;_puck=376068;_ptkr=L942Tn76OuzfdtWdaXVLm1t1JisgcNuDoKJVXawnq4j6gaPN7H9XLcH4Wdyr9Dn9;sb_main_08fb64879e8ea4baa9f0406b3192a188=1;ppu_main_2e4e8fae7056fefed4a0aed5e245985b=1;ppu_sub_2e4e8fae7056fefed4a0aed5e245985b=2;sb_count_08fb64879e8ea4baa9f0406b3192a188=4;_ga_MW112YYCBH=GS1.1.1609430677.8.1.1609432609.0;_PN_SBSCRBR_FALLBACK_DENIED=1609432611328";
system("clear");; echo $baner;
while(true):
$header=array(
"Host=piratecash.io",
"x-requested-with:XMLHttpRequest",
"user-agent:Mozilla/5.0 (Linux; Android 9; Mi A1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36",
"referer:https://piratecash.io/battleships.php",
"Content-Length: ",
"Cookie:".$cookie
);
	$url="https://piratecash.io/battleships.php";
$dta=get($url,$header);
$u=explode('"a_get_battleships.php?',$dta);
$u=explode('&t="',$u[1]);
$u=$u[0];

	$url="https://piratecash.io/a_get_battleships.php?".$u."&t=-1";
$st=get($url,$header);
$st=explode('<div class="',$st);
$st=$st[0];
echo $hijau2.$st."\n";
    get("https://piratecash.io/a_get_battleships.php?".$u."&t=6",$header);
     get("https://piratecash.io/a_get_battleships.php?".$u."&t=7",$header);
$st=get($url,$header);
$st=explode('<div class="',$st);
$st=$st[0];
echo $st."\n";
sleep(2);
$st=get($url,$header);
$st=explode('<div class="',$st);
$st=$st[0];
echo $st."\n";
sleep(2);
$st=get($url,$header);
$st=explode('<div class="',$st);
$st=$st[0];
echo $st."\n";
sleep(2);
endwhile;
