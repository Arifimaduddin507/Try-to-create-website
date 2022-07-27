<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HOME</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface|Poppins">
    <style>
      h2  {
        font-family: 'Times New Roman', Times, serif;
      }
      .btn {
        border: 1px solid #fff;
      }
       h1{
        font-family: 'Abril Fatface', serif;
         font-size: 46px;  
       }
    </style>

    <style>
      .hidden-spacer {
    height: 56px
}



h2{
	font-family: sans-serif;
	font-weight: normal;
}
 
.malasngoding-slider { 
	border: 10px solid #efefef; 
	position: relative; 
	overflow: hidden; 
	background: #efefef;
}
 
.malasngoding-slider { 
	margin:20px auto;
	width: 768px;
	height: 450px; 
}
 
.isi-slider img { 
	width: 768px;
	height: 450px; 
	float: left;
}
 
.isi-slider { 
	position: absolute; 
	width:3900px;  
 
	/*pengaturan durasi lama tampil gambar bisa di atur di bawah ini*/
	animation-name:slider;
	animation-duration:16s;
	animation-timing-function: ease-in-out;
	animation-iteration-count:infinite;
	-webkit-animation-name:slider;
	-webkit-animation-duration:16s;
	-webkit-animation-timing-function: ease-in-out;
	-webkit-animation-iteration-count:infinite;
	-moz-animation-name:slider;
	-moz-animation-duration:16s;
	-moz-animation-timing-function: ease-in-out;
	-moz-animation-iteration-count:infinite;
	-o-animation-name:slider;
	-o-animation-duration:16s;
	-o-animation-timing-function: ease-in-out;
	-o-animation-iteration-count:infinite;
}
 
 
/*saat gambar di hover oleh cursor mouse maka berhenti slide*/
.isi-slider:hover { 
	-webkit-animation-play-state:paused; 
	-moz-animation-play-state:paused; 
	-o-animation-play-state:paused; 
	animation-play-state:paused; }
}
 
.isi-slider img { 
	float: right; 
}
 
.malasngoding-slider:after { 
	font-size: 150px; 
	position: absolute; 
	z-index: 12; 
	color: rgba(255,255,255, 0); 
	left: 300px; top: 80px; 
	-webkit-transition: 1s all ease-in-out; 
	-moz-transition: 1s all ease-in-out; 
	transition: 1s all ease-in-out; 
}
 
.malasngoding-slider:hover:after { 
	color: rgba(255,255,255, 0.6);  
}
 
 
 
@-moz-keyframes slider {     
	0% {
		left: 0; opacity: 0; 
	}     
	2% {
		opacity: 1; 
	}     
	20% {
		left: 0; opacity: 1; 
	}     
	21% {
		opacity: 0; 
	}     
	24% {
		opacity: 0; 
	}     
	25% {
		left: -768px; opacity: 1; 
	}       
	45% {
		left: -768px; opacity: 1; 
	}     
	46% {
		opacity: 0; 
	}     
	48% {
		opacity: 0; 
	}     
	50% {
		left: -1536px; opacity: 1; 
	}     
	70% {
		left: -1536px; opacity: 1; 
	}     
	72% {
		opacity: 0; 
	}     
	74% {
		opacity: 0; 
	}    
	75% {
		left: -2304px; opacity: 1; 
	}   	
	95% {
		left: -2304px; opacity: 1; 
	}   	
	97% { 
		left: -2304px; opacity: 0;
	}   	
	100% {
		left: 0; opacity: 0; 
	}
} 
 
@-webkit-keyframes slider {     
	0% {
		left: 0; opacity: 0; 
	}     
	2% {
		opacity: 1; 
	}     
	20% {
		left: 0; opacity: 1; 
	}     
	21% {
		opacity: 0; 
	}     
	24% {
		opacity: 0; 
	}     
	25% {
		left: -768px; opacity: 1; 
	}       
	45% {
		left: -768px; opacity: 1; 
	}     
	46% {
		opacity: 0; 
	}     
	48% {
		opacity: 0; 
	}     
	50% {
		left: -1536px; opacity: 1; 
	}     
	70% {
		left: -1536px; opacity: 1; 
	}     
	72% {
		opacity: 0; 
	}     
	74% {
		opacity: 0; 
	}    
	75% {
		left: -2304px; opacity: 1; 
	}   	
	95% {
		left: -2304px; opacity: 1; 
	}   	
	97% { 
		left: -2304px; opacity: 0;
	}   	
	100% {
		left: 0; opacity: 0; 
	}
} 
 
 
@keyframes slider {     
	0% {
		left: 0; opacity: 0; 
	}     
	2% {
		opacity: 1; 
	}     
	20% {
		left: 0; opacity: 1; 
	}     
	21% {
		opacity: 0; 
	}     
	24% {
		opacity: 0; 
	}     
	25% {
		left: -768px; opacity: 1; 
	}     
	45% {
		left: -768px; opacity: 1; 
	}     
	46% {
		opacity: 0; 
	}     
	48% {
		opacity: 0; 
	}     
	50% {
		left: -1536px; opacity: 1; 
	}     
	70% {
		left: -1536px; opacity: 1; 
	}     
	72% {
		opacity: 0; 
	}     
	74% {
		opacity: 0; 
	}    
	75% {
		left: -2304px; opacity: 1; 
	}   	
	95% {
		left: -2304px; opacity: 1; 
	}   	
	97% { 
		left: -2304px; opacity: 0; 
	} 
 
	100% {
		left: 0; opacity: 0; 
	}
}
    </style>
  </head>
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
    <div class="jumbotron jumbotron-fluid bg-white">
      <div class="container">
        <h1 class="display-4 text-center text-dark">MENYEDIAKAN JASA SERVICE AC</h1>
        <p class="lead text-center text-dark">AC ANDA BERMASALAH ? KAMI ADA SOLUSINYA ! </p>
        
          </div>
      </div>
      <div class="alert alert-info">
    <strong>Info!</strong> jika ingin pesan jasa kami ,mohon isi form di button atas  "pesan disini"
    </div>
    <div class="container-fluid">
      <h2 class = "bg-primary text-light">Rincian harga dan detail klik selngkapnya</h2>
      <h1 class="display-5 text-center mb-5">Categories</h1>
    <p  style="color: white;"> hari ini </p>
      <div class="card-deck mb-5">
        <div class="card">
          <img class="card-img-top img-thumbnail" src="service.jpg" alt="Card image cap" >
          <div class="card-body">
            <h5 class="card-title">SERVICE AC</h5>
            <p class="card-text">AC anda berkendala ? tidak berfungsi ? service kami jadi solusinya.</p>
            <a href="tentangservice.php" class="btn btn-success">Rincian dan Harga</a>
          </div>
        </div>
        <div class="card">
            <img class="card-img-top img-thumbnail" src="cuci.jpg" alt="Card image cap" >
            <div class="card-body">
              <h5 class="card-title">Cuci AC</h5>
              <p class="card-text">AC anda kotor ? atau kurang dingin ? cuci ac kami jadi solusinya! .</p>
              <a href="tentangcuciac.php" class="btn btn-success">Rincian dan Harga</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top img-thumbnail" src="jasa3.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Spearpart AC</h5>
              <p class="card-text">kami juga menyediakan Speartpart AC dan menjual berbagai merk AC.</p>
              <a href="tentangspearpart.php" class="btn btn-success">Rincian dan Harga</a>
             
            </div>

        </div> 
      </div>
    </div>  

    <div class=malasngoding-slider>
		<div class=isi-slider>
			<img src="cuci.jpg" alt="Gambar 1">
			<img src="ac.jpg" alt="Gambar 2">
			<img src="jasa3.png" alt="Gambar 3">
      
		</div>
	</div>
    
    
    <div class="container-fluid">
      <!-- Example row of columns -->
      <div class="row p-5 bg-dark text-light">
        <div class="col-md-12">
            <h1 class="display-5 text-center mb-5">tentang kami</h1>
        </div>
        <div class="col-md-4">
          <h2 style ="text-align: center">ALAMAT</h2>
          <h4><a href="https://goo.gl/maps/km7RKMXiiKukA64P7" style="color: white">JL.Ujung Pandang Gg.Hasan Usman Sungai Jawi Pontianak Kota..</a></h4> 
          
        </div>
        <div class="col-md-4">
                <h2 style ="text-align: center">NPWP</h2>
          <h4 style ="text-align: center"><p>86.279.744.6-701.000
               </p></h4>
         
        </div>
        <div class="col-md-4">
        <ul class="address">
          <h2 style ="text-align: center">NO.HP</h2>
          <h4 style ="text-align: center"><a href="whatsapp://send?text=Hello&phone=+081345284868" style="color: white">081345284868</a></h4>
          </ul>
        </div>
        <div class="col-md-4">
            <h2 style ="text-align: center">EMAIL</h2>
           <h4><a href="https://mail.google.com/mail/u/0/#inbox?compose=new "style="color: white" style ="text-align: center">suhaimitawaqal@yahoo.com</a></h4>
            
          </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>