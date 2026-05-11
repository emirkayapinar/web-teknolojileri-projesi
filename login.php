<?php
// HTML'den gelen verileri çekiyoruz
$gelenMail = $_POST['kullaniciAdi'];
$gelenSifre = $_POST['sifre'];

//  doğru bilgiler
$dogruMail = "b251210090@sakarya.edu.tr";
$dogruSifre = "b251210090";

// 1. KONTROL: Boş bırakılmışsa
if ($gelenMail == "" || $gelenSifre == "") {
    echo "<script>
            alert('HATA: Kullanıcı adı veya şifre boş bırakılamaz!');
            window.location.href = 'login.html';
          </script>";
} 
// 2. KONTROL: Bilgiler doğruysa (Yeşil Başarılı Sayfası)
else if ($gelenMail == $dogruMail && $gelenSifre == $dogruSifre) {
    echo "<!DOCTYPE html>
    <html lang='tr'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Başarılı Giriş</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
    </head>
    <body class='bg-light'>
        <div class='container mt-5 text-center'>
            <div class='alert alert-success shadow-lg p-5 rounded-4 mt-5'>
                <h1 class='display-5 fw-bold mb-3'>Hoşgeldiniz b251210090</h1>
                <p class='lead'>Sisteme başarıyla giriş yaptınız.</p>
                <a href='index.html' class='btn btn-success mt-3 fw-bold'>Ana Sayfaya Git</a>
            </div>
        </div>
    </body>
    </html>";
} 
// 3. KONTROL: Bilgiler yanlışsa
else {
    echo "<script>
            alert('HATA: Bilgiler hatalı. Lütfen tekrar deneyin!');
            window.location.href = 'login.html';
          </script>";
}
?>