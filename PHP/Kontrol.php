<?php 

    if (($_POST["email"] == "qwe") and ($_POST["password"] == "123"))
    {
    echo("HOŞGELDİNİZ G201210059 !!");
    header("Refresh: 2; http://localhost/Yeni%20klas%c3%b6r/Website/HTML/Main.html");                               
    }                            
    else 
    {
    echo "Kullancı Adı veya Şifre Yanlış.<br>";
    echo "!!!TEKRAR DENEYİN!!!";
    header("Refresh: 1; http://localhost/Yeni%20klas%c3%b6r/Website/HTML/Login.html");
    
    }
                                    
?>