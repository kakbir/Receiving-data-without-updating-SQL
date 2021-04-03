<?php
    // Session başlatır
    session_start();


$id=$_SESSION["id"]; //daha önceden get ile tanımlanmış değişken 
?>




//Çekeceğiniz Veriye göre SQL Komutu
       
                                      <?php 
//Veri Tabanı Bağlantısı
foreach($dbh->query("SELECT Sum(data1) FROM tablo WHERE data1='$benid'") as $row) {
$row['Sum(data1)'];
}
$a=$row['Sum(data)']
?>       Cüzdan: <?php echo $a?></a> 