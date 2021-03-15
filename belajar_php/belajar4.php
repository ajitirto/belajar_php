<?php

  // echo date("d/m/y");
  // echo "<br/>";
  // echo date("D/M/YY");
  // echo "<br/>";
  // echo date("l, d-M-y");

  // echo date("l", time()+60*60*24*100);

  //jam,menit,detik, bulan ,tanggal. tahun
  echo date("l", mktime(0,0,0,9,30,1998)) ;

  echo date("l", strtotime("30 sep 1998"));

function salam($waktu, $nama){
  return ("Selamat  $waktu $nama ");
}

?>

<html>
  <head>
  </head>
  <body>
    <h1><?php echo salam("malam","ajitirto"); ?></h1>
  </body>
</html>
