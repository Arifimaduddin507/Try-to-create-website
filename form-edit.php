<?php
include 'koneksi.php';
$data_edit = mysqli_query($conn, "SELECT * FROM ac WHERE Nama = '".$_GET['Nama']."'");
$result = mysqli_fetch_array($data_edit);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Halaman edit data</title>

    
    <style>
        * {
    text-decoration: none;
    margin: 0;
    padding: 0px;
}

body {
    margin: 100px 150px 100px 80px;
    
    padding: 50px 30px 50px 80px;
    font-family: 'open sans ', sans-serif;
    font-size: 25px;
    text-align: center;
    

}



input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


input[type=submit]:hover {
    background-color :#45a049;
}



	


label {
    margin: 12px;
    font-family: sans-serif;
    font-size: 10px;
    text-align: center;
    color: black;
    padding: 10px;
	
	
}






input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;

}

body{
    background-image: url('sora.jpg');
}

    </style>
</head>
<body>

<nav class="navbar navbar-expand-sm fixed-top navbar-light">
    <div class="container">
        <a class="navbar-brand" href="home.php">HOME</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">DATA PESANAN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">ABOUT US</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="form-input.php">PESAN DISINI</a>
                </li>
            </ul>
        </div>
    </div>
</nav><br>
<a href="index.php"style ="padding:0.4% 0.8%;background-color:#009900 ; color:#fff;border-radius:2px;text-decoration:none">Data pesanan</a>
    <h2>Edit data</h2>
    <form action=""method ="POST">
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text"name="Nama" value="<?php echo $result['Nama']?>" required></td>
        </tr>
        
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text"name="Alamat"value="<?php echo $result['Alamat']?>" required></td>
        </tr>
       
        <tr>
            <td>Phone</td>
            <td>:</td>
            <td><input type="text"name="Phone"value="<?php echo $result['Phone']?>" required></td>
        </tr>
        
        <tr>
            <td>Opsi</td>
            <td>:</td>
            <td>
                <select name =" Opsi">
                    <option value="<?php echo $result['Opsi']?>"><?php echo $result['Opsi']?></option>
                    <option value="Service AC">Service AC</option>
                    <option value="Cuci AC">Cuci AC</option>
                    <option value="Spearpart">Spearpart</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit"name="edit"value="simpan"></td>
        </tr>
    </table>
    </form>
    <?php
    include 'koneksi.php';
    if(isset($_POST['edit'])){
     $update = mysqli_query($conn,"UPDATE ac SET Nama ='".$_POST['Nama']."',
     Alamat = '".$_POST['Alamat']."', Phone = '".$_POST['Phone']."',Opsi = '".$_POST['Opsi']."'
     WHERE Nama ='".$_GET['Nama']."'");
     if($update){
        echo "<script>alert('Transaksi Sukses.Data Sudah ada dalam Laporan');window.location='index.php'</script>";


     }else{
         echo'gagal edit';
     }
     }    
    ?>
</body>
</html>