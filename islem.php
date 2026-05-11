<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gelen Mesaj</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-lg p-4">
            <h2 class="text-center text-primary mb-4">Gönderilen İletişim Bilgileri</h2>
            
            <?php
            // Verilerin gelip gelmediğini kontrol edip ekrana tabloyla basıyoruz
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "<table class='table table-bordered table-striped'>";
                echo "<tr><th>Ad Soyad</th><td>" . $_POST['isim'] . "</td></tr>";
                echo "<tr><th>E-Posta</th><td>" . $_POST['email'] . "</td></tr>";
                echo "<tr><th>Telefon</th><td>" . $_POST['telefon'] . "</td></tr>";
                echo "<tr><th>Durum</th><td>" . $_POST['durum'] . "</td></tr>";
                echo "<tr><th>Konu</th><td>" . $_POST['konu'] . "</td></tr>";
                echo "<tr><th>Mesaj</th><td>" . $_POST['mesaj'] . "</td></tr>";
                
                $onay = isset($_POST['onay']) ? "Onaylandı" : "Onaylanmadı";
                echo "<tr><th>Bilgi Onayı</th><td>" . $onay . "</td></tr>";
                echo "</table>";
            } else {
                echo "<div class='alert alert-danger'>HATA: Veri gelmedi.</div>";
            }
            ?>
            <a href="iletisim.html" class="btn btn-dark mt-3">Geri Dön</a>
        </div>
    </div>
</body>
</html>