



<?php
// $mahasiswa = [["ajitirto","200164008",
//               "Teknik Informatika","ajiwoke@gmail.com"],
//               ["rio","200164008",
//               "Teknik Informatika","ajiwoke@gmail.com"],
//               ["udin","200164008",
//               "Teknik Informatika","ajiwoke@gmail.com"]]
//

$mahasiswa=[
  [
    "judul" =>"Anatoni Rasa",
    "no" =>"1",
    "penulis"=>"Ayu Utami",
    "penerbit"=>"Gramedia",
    "gambar"=>"ayu.jpg"
  ],
  [
    "judul" =>"pengakuan eks",
    "no" =>"2",
    "penulis"=>"Ayu Utami",
    "penerbit"=>"Marjin Kiri",
    "gambar"=>"ayu2.jpg"
  ],
];

// echo "Nama = ",$mahasiswa[1]["tugas"][1];

?>
 <html>
  <head>
    <title>array</title>
  </head>
  <body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $a) {?>
      <ul>
        <li>
          <img src="img/<?php echo $a["gambar"]; ?>">
        </li>
        <li>Judul = <?php echo $a["judul"]?></li>
        <li>No = <?php echo $a["no"]?></li>
        <li>Penulis =<?php echo $a["penulis"]?></li>
        <li>Penerbit = <?php echo $a["penerbit"]?></li>
      </ul>
      <?php } ?>
