



<?php
$nama ="ajitirto";


$hari = array("Senin", "Selasa", "Rabu",
"Kamis", "Jumat", "Sabtu", "Minggu");

  // cara baru
$bulan = ["Januari", "Februari","Maret", "April", "Mei",
"Juni","Juli", "Agustus","September","Oktober","November",
"Desember"];
// var_dump($bulan);
// echo "<br/>";
// var_dump($hari);
// echo "<br/>";
// print_r($bulan);
//   //var_dump($hari);
// echo "<br> Menmpilkan pesan pembatas <br/>";
// $hari[]="rabu";
// var_dump($hari);
// echo $hari[1];


// var_dump($hari);
// $hari[]="lol";
// echo "<br/><br/><br/>";
// var_dump($hari);
?>

<?php $angka=[4,3,2,5,3,2,3,5,4,3]; ?>
<!DOCTYPE html>
<html>
  <head>
    <title>latihan 5 </title>
    <style>
      .kotak{
        width: 50px;
        height: 50px;
        background-color: salmon;
        text-align: center;
        line-height: :50px;
        margin:30px;
        float: left;
      }
      .clear{clear:both;

      }
    </style>
  </head>
  <body>

    <?php for ($i=0; $i < count($angka); $i++) { ?>
      <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>

    <?php foreach ($angka as $a) { ?>
      <div class="kotak"><?php echo $a;?></div>
    <?php } ?>

    <?php foreach ($angka as $a) : ?>
      <div class ="kotak" ><?= $a;?></div>
    <?php endforeach; ?>

  </body>
</html>
