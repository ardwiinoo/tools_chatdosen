<?php
date_default_timezone_set("Asia/Jakarta");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatDosen | Web</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- ICON -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="shortcut icon" href="./img/logo.png">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        img[alt="www.000webhost.com"] {
            display: none;
        }
    </style>
</head>

<body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000)">

    <nav class="navbar sticky-top navbar-light bg-light">
        <a class="navbar-brand" href="#">chatdosen.ga</a>
    </nav>

    <div class="container">
        <div class="left">
            <div class="clock-container">
                <p>Sekarang Pukul</p>
                <div id="clock">
                    <h1></h1>
                </div>
                <?php
                $jam = date('H:i');
                if ($jam > '07:00' and $jam < '21:00') {
                    $mess = 'Waktu yang tepat untuk menghubungi Dosen';
                    echo '<p id="mess1">' . $mess . '</p>';
                } elseif ($jam >= '21:00' or $jam < '07:00') {
                    $mess = 'Waktu yang tidak tepat untuk menghubungi Dosen';
                    echo '<p id="mess2">' . $mess . '</p>';
                }

                ?>
            </div>
            <form action="./redirect/redirect.php" method="POST">
                <div class="dosen">
                    <label for="nomordosen"><b>Masukkan nomor Dosen</b></label><br>
                    <input type="tel" name="vnomor" id="nomordosen" required>
                    <label id="jkdosen">
                        <input type="radio" name="vjenis" value="L" checked />
                        <span>Dosen Pria</span>
                    </label><br>
                    <label>
                        <input type="radio" name="vjenis" value="P" />
                        <span>Dosen Wanita</span>
                    </label>
                </div>
                <div class="salam">
                    <input type="checkbox" name="vsalam" value="1" id="salam"><label for="salam">Gunakan salam untuk muslim</label>
                </div>
        </div>
        <div class="right">
            <div class="siswa">
                <label for="first"><b>Masukkan pesan anda</b></label>
                <input type="text" name="vnama" placeholder="Siapa nama anda" id="first" required>
                <input type="text" name="vkelas" placeholder="Dari kelas apa" required>
                <input type="text" name="vnim" placeholder="Masukkan nim anda" required>
                <input type="text" name="vprodi" placeholder="Dari prodi apa" required>
                <input type="text" name="vtujuan" placeholder="Tujuan menghubungi Dosen" required>
                <small>Contoh: "Saya ingin bertanya...", "Saya ingin assasement ..."</small>
                <input type="text" name="vtanya" placeholder="Masukkan pertanyaan anda" required>
                <small>Contoh: "Apakah bapak ada waktu minggu ini?"</small>
                <input type="text" name="vucapan" placeholder="Masukkan ucapan maaf dan terima kasih" required>
                <small>Contoh: "Mohon maaf telah mengganggu waktunya, Terima kasih sebelumnya."</small>
                <button type="submit">Kirim</button>
            </div>
        </div>
        </form>
    </div>

    <div>
        <footer>
            <p><a href="https://github.com/ardwiinoo" target="blank"><i class="fab fa-github-alt"></i> ardwiinoo</a></p>
        </footer>
    </div>

    <script src="./clock/timestamp.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>