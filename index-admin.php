<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman pesanan</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
    <style>
      h2  {
        font-family: 'Times New Roman', Times, serif;
      }
      .btn {
        border: 1px solid #fff;
      }
    </style>

<style>
	body
		.container{
			width: 800px;
			margin: auto;
		}
		.pembungkus{
			position: relative;
		}
		
		
		h1{
			color: white;
		}
		
		
	</style>

<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #04AA6D;
  color: white;
}

h2 {
  text-align: center;
  font-family: "Audiowide", sans-serif;
}

h1 {
  font-family: "Audiowide", sans-serif;


}

h3{
  font-family: "Sofia", sans-serif;
  font-size: 50px;
}

h4{
  text-align: center;
}
</style>


</head>
<body>

<body>
<nav class="navbar navbar-expand-lg navbar navbar-white bg-white">
        
        <a class="navbar-brand" href="detail.php"><img src="t.jpg" alt=width="100" height = "100">TAWAQAL</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
          
                <li class="nav-item active">
                    <a class="btn btn-primary" href="index.php">Daftar Pesanan<span class="sr-only">(current)</span></a>
                </li>
                
                
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary" href="form-input.php" tabindex="-1" aria-disabled="true">pesan disini</a>
                </li>
                
                  <li class="nav-item active">
                      <a class="btn btn-primary" href="login-admin.php">Login</a>
                  </li>
            </ul>
          </div>
        </nav>

	  
	  <h1 class = "bg-primary text-light">CUCI DAN SERVICE AC OLEH TEKNISI HANDAL</h1>
    <p  style="color: white;"> hari ini </p>

    <br>
    <br>
<h2> Daftar Pesanan</h2>
<a href="form-input.php"style ="padding:0.4% 0.8%;background-color:#009900 ; color:#fff;border-radius:2px;text-decoration:none">Tambah Data</a>
<br> <br>
<table border ="1" cellspacing="0" width="50%">
    <tr style="text-align:center;font-weight:bold;background-color:#eee">
        <td>Nama</td>
        <td>Alamat</td>
        <td>Phone</td>
        <td>Opsi</td>
        <td>keterangan</td>
        <td>Tanggal</td>
    </tr>
    <?php
    include 'koneksi.php';
    
    $select = mysqli_query($conn,"SELECT *FROM ac");
    if(mysqli_num_rows($select) > 0){
    while($hasil = mysqli_fetch_array($select)) {

    

    ?>
    <tr>
        <td><?php echo $hasil['Nama']?></td>
        <td><?php echo $hasil['Alamat']?></td>
        <td><?php echo $hasil['Phone']?></td>
        <td><?php echo $hasil['Opsi']?></td>
        <td><?php echo $hasil['keterangan']?></td>
        <td><?php echo $hasil['tanggal']?></td>
        <td>
            <a class="btn btn-primary"  href="form-edit.php?Nama=<?php echo  $hasil['Nama'] ?>">Edit</a>
            <a class="btn btn-danger" href="delete.php?Nama=<?php echo $hasil['Nama'] ?>">Hapus</a>
            

            
            
        </td>
    </tr>
    <?php  }}else{ ?>
        <tr>
        <td colspan ="6" align="center">duh lagi sepi :"( </td>
        </tr>
    <?php  } ?>
</table>

<br>

<br>
<br>
<br>
<br>
<br>

<div class="container-fluid">
      <!-- Example row of columns -->
      <div class="row p-5 bg-dark text-light">
        <div class="col-md-12">
            <h1 class="display-5 text-center mb-5">tentang kami</h1>
        </div>
        <div class="col-md-4">
          <h2>ALAMAT</h2>
          <h4><a href="https://g.page/um-pontianak?share" style="color: white">JL.Ujung Pandang Gg.Hasan Usman Sungai Jawi Pontianak Kota..</a></h4> 
          
        </div>
        <div class="col-md-4">
                <h2>NPWP</h2>
          <h4><p style ="text-align: center">86.279.744.6-701.000
               </p></h4>
         
        </div>
        <div class="col-md-4">
        <ul class="address">
          <h2>NO.HP</h2>
          <h4><a href="whatsapp://send?text=Hello&phone=+081345284868" style="color: white">081345284868</a></h4>
          </ul>
        </div>
        <div class="col-md-4">
            <h2>EMAIL</h2>
           <h4><a href="https://mail.google.com/mail/u/0/#inbox?compose=new "style="color: white" style ="text-align: center">suhaimitawaqal@yahoo.com</a></h4>
            
          </div>
</body>
</html>