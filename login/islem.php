<?php
    /*
    define('access',"True");
    */
    session_start(); /* kullanıcı giriş çıkış bilgi ve kontrollerinin sağlanabilmesi için oturum başlatır  */


    $kuladi = $_POST["username"];
    $parola = $_POST["pass"];

    $hatavarmi = false;

    if($kuladi==" ")
    {
        echo "kullanıcı adı boş olamaz";
        $hatavarmi=true;
    }
    else if(strlen($kuladi) < 3)
    {
        echo "kullanıcı adı 3 karakterden küçük olamaz";
        $hatavarmi=true;
    }
    else if($parola=="")
    {
        echo "parola boş olamaz";
        $hatavarmi=true;
    }
    else if(strlen($parola) < 1)
    {
         echo "şifre en az 1 karekter olmalı";
         $hatavarmi=true;
    }
    else
    {
        include "baglanti.php";
        $sorgu = "SELECT * FROM kullanici_oturum_bilgisi WHERE kullaniciadi = '$kuladi' AND sifre = '$parola'";
        $sonuc = mysqli_query($conn, $sorgu);
        $row = mysqli_fetch_assoc($sonuc); /* ne kadar çalışan varsa kontrol eder */

        if(empty($row))
        {
             echo "<script>alert('hatalı giriş')</script>";
             header("location:panelgiris.php");
        }
        else
        {
            $_SESSION["user"]=$_POST["username"];

            $sorgu2 = "SELECT * FROM kullanici_oturum_bilgisi WHERE kullaniciadi = '$kuladi'";

            // $sorgu2 = "SELECT * FROM kullanici_profili WHERE kullanici_profili.id = (SELECT id FROM kullanici_oturum_bilgisi WHERE kullanici_oturum_bilgisi.kullaniciadi = '$kuladi' AND kullanici_oturum_bilgisi.sifre = '$parola')";
             
            $sorgu=mysqli_query($conn,$sorgu2);
            
            while( $sonuc=mysqli_fetch_row($sorgu) )
            {
                
                $_SESSION["ad"] = $sonuc[1];
                $_SESSION["soyad"] = $sonuc[2];
                $_SESSION["fotograf"] = $sonuc[3];
            }
                              
               header("location:../admin/panel.php");
            
        }
    }
           
?>