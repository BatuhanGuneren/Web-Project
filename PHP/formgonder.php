<!DOCTYPE html>
<html>
    <head>
        <title>Hakkında</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="..\CSS\Main.css">
        <link rel="stylesheet" type="text/css" href="..\CSS\bootstrap.min.css">
        <script src="JS\bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>
        <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="../JS/formdogrula.js" type="text/javascript"></script>
    </head>
    <body class="bg-secondary bg-opacity-10">
        

        <nav class="navbar navbar-expand-lg navbar-dark renklendirme-main fixed-top">
            <div class="container-fluid">
                <a class="navbar text-decoration-none text-white h1" href="#">TEKİRDAĞ</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav h2">
                        <li class="nav-item">
                            <a class="nav-link" href="Main.html#hakkında"><i class="fa-solid fa-circle-info"></i> Hakkımda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Main.html#sehrim"><i class="fa-solid fa-tree-city"></i> Şehrim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Main.html#iletisim"><i class="fa-solid fa-file-signature"></i> İletişim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="..\HTML\Login.html"><i class="fa-solid fa-right-from-bracket"></i> Login</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>

        <div class="jumbotron"><br><br>
            <div class="container">
                <br><br><br><br><br><br>
            <?php
echo $_POST["adi"]. ' '. $_POST["soyadi"];
echo '<br/> Mesajınız alınmıştır.<br/>';
echo '<br/> Adınız : ' . $_POST["adi"];
echo '<br/> Soyadınız : ' . $_POST["soyadi"];
echo '<br/> Cinsiyetiniz : ' . $_POST["cinsiyet"];
echo '<br/> E-mailiniz : ' . $_POST["email"];
echo '<br/> Telefon Numaranız : ' . $_POST["telefonnumarasi"];
echo '<br/> Açıklamanız : ' . $_POST["aciklama"];
echo '<br/><br/> Yukarıdaki bilgiler doğru değilse bizimle iletişime geçiniz.  <br/>  bahri.guneren@ogr.sakarya.edu.tr';
echo '<br/><br/> Anasayfaya yönlendiriliyorsunuz.';
header("Refresh: 5; ../HTML/Main.html");
?>
<br><br><br><br>
            </div>
        </div>

 


        <footer class="bg-info bg-opacity-25 text-center">
            @Copyright 2022 || Bahri Batuhan Güneren
            <br><br>
        </footer>
    </body>
</html>


