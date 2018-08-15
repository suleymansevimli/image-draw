<?php
    // php kodlarımızı Yazıyoruz
    //imagecreate(); fonksiyonumuzu kullanacağız..


    // bu alanda bir resim bulunacağını ve türünü bildiriyoruz //-> header();
    header("Content-type: image/png");
    // imagecreate fonksiyonu iki parametre alır ve ilk parametre genişlik ikinci parametre ise yükseklik değeridir.
    $image = imagecreate(640,480);

    // resmimize bir arka plan rengi tanımlayalım
    # Rgb renk kodu belirtmemiz gerekiyor
    $background_color = imagecolorallocate($image,0,0,0);

    // yazı rengimizi belirleyelim
    $text_color = imagecolorallocate($image,5,6,255);

    // yazımızı belirtelim
    imagestring($image,1,5,5,"Merhaba Selamlar",$text_color);

    // resim formatını belirleyelim
    imagepng($image);

    // ve resmimizi bellekten silmek için aşağıdaki komut kullanılır
    //imagedestroy($image);
 ?>
