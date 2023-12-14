<?php


try
{
    $db=new PDO("mysql:host=localhost; dbname=otomasyon; charset=utf8", 'root', '5835529');
    //echo 'veritabanı bağlantısı başarılı';
} catch (exception $e)

{
    echo $e->getMessage();
}

?>