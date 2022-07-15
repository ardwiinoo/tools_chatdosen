<?php
    date_default_timezone_set("Asia/Jakarta");


    $nomor = $_POST['vnomor'];
    $add = 62;
    if(!preg_match('/[^+0-9]/',trim($nomor))){
        // cek apakah no hp karakter 1-3 adalah +62
        if(substr(trim($nomor), 0, 3)=='+62'){
            $hp = trim($nomor);
        }
        // cek apakah no hp karakter 1 adalah 0
        elseif(substr(trim($nomor), 0, 1)=='0'){
            $hp = '+62'.substr(trim($nomor), 1);
        }
    }
    
    $jenis = $_POST['vjenis'];
    if($jenis == "L"){
        $call = "pak";
    }elseif ($jenis == "P"){
        $call = "bu";
    }
    
    $nama  = $_POST['vnama'];
    $kelas = $_POST['vkelas'];
    $nim   = $_POST['vnim'];
    $prodi = $_POST['vprodi'];
    $tujuan = $_POST['vtujuan'];
    $tanya = $_POST['vtanya'];
    $ucap = $_POST['vucapan'];

    

    //ambil jam dan menit
    $jam = date('H:i');

    if ($jam > '05:30' && $jam < '10:00') {
        $greet = 'pagi';
    } elseif ($jam >= '10:00' && $jam < '15:00') {
        $greet = 'siang';
    } elseif ($jam < '18:00') {
        $greet = 'sore';
    } else {
        $greet = 'malam';
    }
    
    if(!isset($_POST['vsalam'])) ($_POST['vsalam'] = 0);
    
    $cek = $_POST['vsalam'];
    
    // if(is_null($cek)){
    //     $cek = 0;
    // }

    if($cek == 1) {
        header("location:  https://api.whatsapp.com/send?phone=$hp&text=Assalamualaikum Warahmatullahi Wabarakatuh,%0A%0ASelamat%20$greet%20$call,%20Mohon%20maaf%20mengganggu%20waktunya,%20Saya%20$nama%20nim%20$nim%20dari%20kelas%20$kelas%20prodi%20$prodi.%0A%0A$tujuan%20$tanya%0A%0A$ucap%0A%0AWassalamualaikum Warahmatullahi Wabarakatuh", true, 301);
        exit();
    }elseif($cek == 0){
        header("location:  https://api.whatsapp.com/send?phone=$hp&text=Selamat%20$greet%20$call,%20Mohon%20maaf%20mengganggu%20waktunya,%20Saya%20$nama%20nim%20$nim%20dari%20kelas%20$kelas%20prodi%20$prodi.%0A%0A$tujuan%20$tanya%0A%0A$ucap", true, 301);
        exit();
    }
