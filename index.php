<?php
    // php kodlarımızı Yazıyoruz
    //imagecreate(); fonksiyonumuzu kullanacağız..


    // bu alanda bir resim bulunacağını ve türünü bildiriyoruz //-> header();
    header("Content-type: image/png");
    // imagecreate fonksiyonu iki parametre alır ve ilk parametre genişlik ikinci parametre ise yükseklik değeridir.
    $image = imagecreate(640,480);
 ?>
