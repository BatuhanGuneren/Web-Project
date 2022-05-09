<?php 

    if (($_POST["email"] == "g201210059@sakarya.edu.tr") and ($_POST["password"] == "g201210059"))
    {
    echo("HOŞGELDİNİZ G201210059 !!");
    header("Refresh: 2; ../HTML/Main.html");                               
    }                            
    else 
    {
    echo "Kullancı Adı veya Şifre Yanlış.<br>";
    echo "!!!TEKRAR DENEYİN!!!";
    header("Refresh: 1; ../HTML/Login.html");
    
    }
                                    
?>