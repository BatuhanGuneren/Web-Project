

<!DOCTYPE html>
<html>
    <head>
        <title>Hakkında</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="..\CSS\Main.css">
        <link rel="stylesheet" type="text/css" href="..\CSS\bootstrap.min.css">
    </head>
    <body>
        <div id="login">
            <br><br><br>
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <form id="login-form" class="form" action="Login.php" method="post">
                                <br>
                                <h3 class="text-center text-info">HOŞGELDİNİZ</h3><br><br>
                                <div class="form-group">
                                    <label for="email" class="text-info">Kullanıcı Adı:</label><br>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Email 'abc@sakarya.edu.tr'" required="required">
                                </div>
                                <div class="form-group">
                                    <br>
                                    <label for="password" class="text-info">Şifre:</label><br>
                                    <input type="text" name="password" id="password" class="form-control" placeholder="Şifre '123'" required="required">
                                </div>
                                <div class="form-group">
                                    <br><br>
                                    <input type="submit" name="submit" class="btn btn-info btn-md" value="Gönder" >
                                </div>
                                <div><br><br>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>