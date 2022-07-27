<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Layout 1 Kolom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

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
                
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="btn btn-primary" href="form-input.php">PESAN DISINI</a>
                </li>
            </ul>
        </div>
    </div>
</nav><br>
    <header class="container bg-primary text-white">
        <div class="row">
            <div class="col-12 py-4 text-center">
                <h1 class="display-1">TAWAQAL SERVICE AC</h1>
                <p class="lead">Daftar harga dan jenis service ac</p>
            </div>
        </div>
    </header>

    <main class="container border">
        <div class="row">
            <div class="col-md-8 py-5">
            <h1>Mengapa perlu melakukan service ac ? </h1>
                <p> Apakah AC-mu tak lagi mengeluarkan udara dingin? Atau bahkan AC mengeluarkan bunyi berisik dari dalam unit? Ini merupakan tanda-tanda adanya masalah pada AC. Penyebabnya beragam, mungkin karena komponen yang aus ataupun bagian dalam AC yang kotor. Agar AC dapat bekerja dengan maksimal tanpa masalah, sangat penting untuk menjaga AC dalam kondisi yang baik. Untuk itu sebaiknya lakukan pembersihan pada komponen AC dan lakukan servis secara rutin.

</p><br><br><br>
                <h2>Harga perbaikan Ac </h2>
                <p> <strong>Rp. 50.000 sampai Rp. 150.000</strong></p><br>
                <h2>Pasang AC </h2>
                <p> <strong>1/2pk - 1 1/2pk = Rp. 200.000</strong></p><br>
                <p> <strong>2pk = Rp. 250.000</strong></p><br>
                <p> <strong>2 1/2pk - 3pk = Rp 350.000</strong></p><br>
                <h2>Jasa bongkar pasang AC </h2>
                <p> <strong>1/2pk - 1 1/2pk = Rp. 250.000</strong></p><br>
                <p> <strong>2pk = Rp. 300.000</strong></p><br>
                

            </div>
            <div class="col-md-4 py-5">
                <img class="w-100" src="jasa.jpg" alt="gambar alam">
            </div>
        </div>
    </main>

    <footer class="container bg-primary text-white">
        <div class="row">
            <div class="col-12 py-4">
                &copy; 2022 Tawaqal service ac
            </div>
        </div>
    </footer>

</body>

</html>