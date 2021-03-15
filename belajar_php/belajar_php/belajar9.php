








<?php
$buku=[
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
// $_GET["nama"]="ajitirto";
// $_GET["nim"]="200164008";

//superglobal milik php
//merupakan array assosiatif

//var_dump($_GET);
// var_dump($_POS);
// var_dump($_SERVER);
// var_dump($_GET);

// echo $_SERVER["SERVER_NAME"];

 ?>
 <html>
  <head>
    <title>array</title>
  </head>
  <body>
    <h1>Daftar Buku get</h1>
    <?php foreach ($buku as $b) {?>
      <ul>
        <li>
          <img src="img/<?php echo $b["gambar"]; ?>">
        </li>
        <li>Judul = <?php echo $b["judul"];?></li>
        <li>
          Link = <a href="belajar8.php?nama=<?php $b["judul"];?>">
            <?php echo $b["judul"];?>
        </li>
      </ul>
      <?php } ?>
    </body>
  </html>
