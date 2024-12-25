<?php
$kulladi = $_POST['kulladi'];
$sifre = $_POST['sifre'];


$servername = "localhost";
$username = "root";
$password = "";
$database = "ckrestaurant";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Veritabanına bağlantı sağlanamadı: " . $conn->connect_error);
}

if(isset($_POST["girisyap"])){
    $kulladi = $_POST["kulladi"];
    $sifre = $_POST["sifre"];
}

$sql = "SELECT * FROM yonetici WHERE kulladi='$kulladi' AND sifre='$sifre'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    session_start();

    $_SESSION["ssifre"] = $sifre;
    $_SESSION["skulladi"] = $kulladi;
    
    echo "<script>alert('Giriş Başarılı !'); window.location='yoneticirez.php';</script>";
    exit();
} else {
    
    echo "<script>alert('Kullanıcı Adı veya Şifre Yanlış !'); window.location='yoneticipaneli.php';</script>";
}


$conn->close();
?>
