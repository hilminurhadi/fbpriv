<?php
# by koenurf
# fb.com/koe.nurf
echo "\n# k{}enurf #\n\n";
$date = date("Y-m-d");
function yt($jumlah,$jeda,$token,$phone,$text){
    $x = 0; 
    while($x < $jumlah) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://ayogram.com/apisms/sms.php");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"token=$token&phone=$phone&text=$text");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
        $output = curl_exec($ch);
        curl_close($ch);
        echo $output."\n";
        sleep($jeda);
        $x++;
        flush();    
    }
}
$token = "hihihohe";
echo "Nomor HP: ";
$phone = trim(fgets(STDIN));
echo "Text: ";
$text = "🤙".trim(fgets(STDIN));
echo "Jumlah: ";
$jumlah = trim(fgets(STDIN));
echo "Jeda: ";
$jeda = trim(fgets(STDIN));
$do = yt($jumlah,$jeda,$token,$phone,$text);
print $do;
?>
