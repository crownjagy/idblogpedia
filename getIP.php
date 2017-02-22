<?php

// fungsi utama adalah untuk mendapatkan IP dari pengunjung

function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

//pemakaian
$IP = get_client_ip();


//Jika mau banned seseorang via IPnya

$listblacklist = array(
'136.55.368', //contoh
'',
);

foreach ($listblacklist as $pengunjungnakal){

    if($IP == $pengunjungnakal){
      echo "Anda di banned"; //ini utk keluarkan kata
      header("Location: Banned.php"); //buat halaman Banned.php untuk di tunjukkan kepada pengunjung
    }


}




?>
