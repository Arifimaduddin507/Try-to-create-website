<?php 
session_start();
include 'koneksi.php';


 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">HALAMAN LOGIN ADMIN</h3>

            <div class="form-outline mb-4">
                <form  method ="post">
              <input type="text" name="username" class="form-control form-control-lg" />
              <label class="form-label" for="typeEmailX-2">username</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" name="password" class="form-control form-control-lg" />
              <label class="form-label" for="typePasswordX-2">Password</label>
            </div>

           

            <button class="btn btn-primary btn-lg btn-block" type="submit" name="masuk">Login</button>
            </form>

            <?php 
    if(isset($_POST['masuk'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      $qry = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");
      $cek = mysqli_num_rows($qry);
      if($cek==1){
        $_SESSION['userweb']=$username;
        header ("location:index-admin.php");
        exit;
      }
      else {
        echo"maaaf username dan password anda salah ";
      }
    }

   ?>

           

            

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>