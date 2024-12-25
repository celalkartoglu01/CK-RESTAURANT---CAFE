
<html>
    <head>
        <meta charset="utf-8">
        <title>Şikayetler</title>
   
    </head>
    <body>
        <div style="width: 3000px; height:50px; background-color:orange;display: flex;align-items: center;">
            <img  style="display: inline-block;" src="telefon.svg" width="30" height="30">    
            <p style="display: inline-block; margin-right: 30px; font-size:20px; color: white;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;"> 05378115397</p>
            <img style="display: inline-block;" src="mail.svg" width="40" height="40">
            <p style=" display: inline-block; font-size:20px; color: white;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">celalkartoglu1923@gmail.com</p>
            <div style="width: 1300px; display: inline-block;"></div>
            <a href="x.com" style="display: inline-block;"><img src="twitter.svg" height="30" width="30"></a>
            <a href="instagram.com" style="display: inline-block;"><img src="insta.svg" height="40" width="40"></a>
            <a href="facebook.com" style="display: inline-block;"><img src="face.svg" height="30" width="30"></a>  
            </div>

            <div style="background-color:white; height: 150px;">
                <p style="display: inline-block; padding-right: 400px;"></p>
                <img src="LOGO.svg" width="120" height="120">
                <h1 style="display: inline-block; color:rgb(102, 17, 17);font-family: 'Courier New', Courier, monospace;font-size: 50px; padding-right: 500px;">CK RESTAURANT</h1>
                <p style="position: absolute; display: inline-block; right: 350px; top: 152px; font-family: fantasy;"><a href="yoneticirez.php" style="color: orange; font-size: 30px">Rezervasyonlar</a></p>
                <p style="top: 152px; position: absolute; display: inline-block; right: 200px;font-family: fantasy;"><a href="yoneticipaneli.php" onclick = "<?php session_destroy();?>" style="color: orange; font-size: 30px">Çıkış Yap</a></p>
                
                
                
            </div>
                
                <div style="width: 2200px; background-color: rgb(231, 102, 102); height: 180px;">
                    <br>
                    <h1 style="font-size: 50px; font-family: fantasy; color: white; text-align: center; width: 1840px;">ŞİKAYETLER</h1>
                    <a style="font-size: 20px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: white; display: inline-block; position: absolute; top: 335px; right: 1050px;" href="anasayfa.php">Ana Sayfa</a>
                    <ul style="font-size: 20px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: white; display: inline-block; position: absolute; right: 850px; margin-top: -19px;"><li>ŞİKAYETLER</li></ul>
                </div>

            
                <div style="height: 1200px;">
                <br>
                <p style="font-size: 40px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;  text-align: center; color:gray;">Mevcut Şikayetler</p>

                <table border="1" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; width: 600px; height: 100px; margin-left:650px; margin-top:100px;">
                  <tbody>
                    <tr>
                        <th>İsim</th>
                        <th>E-posta</th>
                        <th>Tel. No</th>
                        <th>Şikayet</th>
                    </tr>
                    <?php
            if (isset($_POST["goster"])) {

              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "ckrestaurant";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Bağlantı hatası: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM iletisim";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["ad"]."</td><td>".$row["eposta"]."</td><td>".$row["telno"]."</td><td>".$row["mesaj"]."</td></tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Henüz şikayet bulunmamaktadır.</td></tr>";
            }
            $conn->close();
        }
        ?>
                  </tbody>
                </table>
                 
                <form method="post" style="margin-top: 20px; margin-left: 1200px;">
                <input  type="submit" name="goster" value="Göster">
                </form>
                
           

                </div>
                



                    
                <div style="background-color: orange; height: 400px;">
                <img src="LOGO.svg" width="120" height="120" style="display: inline-block; margin-top:20px; margin-left: 400px;">
                <h1 style="margin-top: -40px; margin-left:530px;color:rgb(102, 17, 17);font-family: 'Courier New', Courier, monospace;font-size: 50px;">CK RESTAURANT</h1>
                <div style="margin-left: 530px; margin-top: -30px;display: inline-block; background-color:orange; width: 400px; height: 200px;">
                    <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: rgb(197,189,189);">Bu demo İnternet Sitesi içeriğinde yer alan tüm eserler (tasarım, kod, yazı, grafik, fotoğraf, video, müzik vb.) Celal Kartoğlu'na ait olup, 5846 sayılı Fikir ve Sanat Eserleri Kanunu ve 5237 sayılı Türk Ceza Kanunu kapsamında korunmaktadır.</p>
                </div>
                <a style="position: absolute; font-size: 20px; margin-left: 95px; margin-top: -80px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color:rgb(197, 189, 189);" href="anasayfa.php">Ana Sayfa</a>
                <a style="position: absolute; font-size: 20px; margin-left: 195px; margin-top: -80px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color:rgb(197, 189, 189);" href="hakkimizda.php">Hakkımızda</a>
                <a style="position: absolute; font-size: 20px; margin-left: 320px; margin-top: -80px;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color:rgb(197, 189, 189);" href="iletisim.php">İletişim</a>
                <p style="color: white; font-size: 25px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; margin-left: 1400px; margin-top: -250px; position: absolute;">İLETİŞİM</p>
                <img src="location.svg" width="20" height="20" style="position: absolute; margin-top: -35px; margin-left: 450px;">
                <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: rgb(197, 189, 189);position: absolute; margin-top: -206px; margin-left: 1410px;">Gazi Caddesi Elazığ/Merkez</p>
                <img src="telefon.svg" width="20" height="20" style="position: absolute; margin-top: 20px; margin-left: 450px;">
                <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: rgb(197, 189, 189);position: absolute; margin-top: -153px; margin-left: 1410px;">0537 811 53 97</p>
                <img src="telefon.svg" width="20" height="20" style="position: absolute; top: 1865px; right: 495px;">
                <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: rgb(197, 189, 189);position: absolute; margin-top: -90px; margin-left: 1410px;">0424 236 85 94</p>
                <img src="mail.svg" width="30" height="30" style="position: absolute; margin-top: 130px; margin-left: 444px;">
                <p style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color: rgb(197, 189, 189);position: absolute; margin-top: -36px; margin-left: 1410px;">celalkartoglu1923@gmail.com</p>
                <a href="instagram.com"><img src="insta.svg" width="40" height="40" style="position: absolute; margin-top: 160px; margin-left: 520px;"></a>
                <a href="x.com"><img src="twitter.svg" width="30" height="30" style="position: absolute; margin-top: 165px; margin-left: 570px;"></a>
                <a href="facebook.com"><img src="face.svg" width="30" height="30" style="position: absolute; margin-top: 165px; margin-left: 620px;"></a>

            </div>
                
              
               
    </body>
</html>