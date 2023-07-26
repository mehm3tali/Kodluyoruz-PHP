<!DOCTYPE html>
<html lang="de en tr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php Bölüm Ödevi</title>
  </head>
  <body>
    <form method='POST'>
      <input type='number' name='num'/>
      <button type='submit'>Gönder</button>
    </form>
  </body>
</html>

<?php
  $num = $_POST['num'];

  function checkNum($num){
    $mesaj = '';

    $num == '' ? $mesaj = "Girilen değer boş olamaz!" : (
    $num % 3 == 0 ? $mesaj = "$num sayısının 3'e bölümünün sonucu: " . $num/3 : 
    (($num+1) % 3 == 0 ? $mesaj = "$num sayısı 3'e bölünemez. 3'e bölünebilecek en yakın sayı: " . $num + 1 :
      $mesaj = "$num sayısı 3'e bölünemez. 3'e bölünebilecek en yakın sayı: " . $num - 1)
    );
    
    return $mesaj;
  }

  echo checkNum($num);
?>