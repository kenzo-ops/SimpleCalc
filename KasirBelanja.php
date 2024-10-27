 <?php

 error_reporting(0);
 ini_set('display_errors',0);

  $namaPembeli = $_POST['nama'];
    $brng1 = $_POST['barang1'];
    $brng2 = $_POST['barang2'];
    $brng3 = $_POST['barang3'];
    $brng4 = $_POST['barang4']; 

    
    $total = $brng1 + $brng2 + $brng3 + $brng4;
    $diskon = $total - ($total * (5/100));
 

    
    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Kasir Belanja</title>
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="/CSS/Kasir.css">
 </head>

 <body>

    <div class="title">
        <h1>Kasir<span>Belanja</span></h1>
    </div>
    
 <div class="content">
    <form method="POST" autocomplete="off"> 
        <h2>Masukkan Data</h2>
         <label for="name">Nama Pembeli</label>
         <input type="text" name="nama" placeholder="Nama">
         <label for="name">Barang 1</label>
         <input type="number" name="barang1" placeholder="Harga">
         <label for="name">Barang 2</label>
         <input type="number" name="barang2" placeholder="Harga">
         <label for="name">Barang 3</label>
         <input type="number" name="barang3" placeholder="Harga">
         <label for="number">Barang 4</label>
         <input type="number" name="barang4" placeholder="Harga">
         <button type="submit" name="submit">Submit</button>
     </form>

     <div class="outp">
         <h2>Output</h2>
     <h4>
        Nama Pembeli : </br>
        <?php 
            echo $namaPembeli;
        ?>
     </h4>
     <h4>
        Barang 1 : </br>
        Rp.<?php 
            echo  $brng1;
        ?>
     </h4>
     <h4>
        Barang 2 : </br>
        Rp.<?php 
            echo $brng2;
        ?>
     </h4>
     <h4>
        Barang 3 : </br>
        Rp.<?php 
            echo $brng3;
        ?>
     </h4>
     <h4>
        Barang 4 :  </br>
        Rp.<?php 
            echo $brng4;
        ?>
     </h4>
     <h4>
        Total Harga Barang </br>
        Rp.<?php 
            echo $total;
        ?>
     </h4>
     <h4>
        Diskon 5% : </br>
        Rp.<?php 
            echo $diskon;

        ?>
     </h4>
     </div>
    
 </div>
     

 </html>