<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vending Machine Items</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Welcome!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            <!--</li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>-->
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3">Smart Vending Machine!!</h1>
        <p class="lead">A Warm Welcome!</p>
        <!--<a href="#" class="btn btn-primary btn-lg">Call to action!</a>-->
      </header>

      <!-- Page Features -->
	  <form method="POST" action="select.php">
      <div class="row text-center">
   
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="pepsi.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Pepsi</h4>
              <p class="card-text">Price - Rs 40</p>
            </div>
            <div class="card-footer">
              <input type="submit" class="btn btn-primary" value="BUY" name="n1"/>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="redbull.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">RedBull</h4>
              <p class="card-text">Price - Rs 110</p>
            </div>
            <div class="card-footer">
              <input type="submit" class="btn btn-primary"value="BUY" name="n2"/>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top"  src="hideandseek.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Hide And Seek</h4>
              <p class="card-text">Price - Rs 30</p>
            </div>
            <div class="card-footer">
              <input type="submit" class="btn btn-primary"value="BUY" name="n3"/>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="kurkure.jpg" style="height: 50%; width:70%;" alt="">
            <div class="card-body">
              <h4 class="card-title">Kurkure</h4>
              <p class="card-text">Price - Rs 20</p>
            </div>
            <div class="card-footer">
              <input type="submit" class="btn btn-primary" value="BUY" name="n4"/>
            </div>
          </div>
        </div>
      
      </div>
	  </form>    
      <!-- /.row -->

    </div>
    <!-- /.container -->
	
	<div class="container">

<br>
<label>Upload Picture To Get Order</label>
<input type="hidden" role="uploadcare-uploader" name="content" data-public-key="b658fe8a76a43c7279ab" data-images-only />
  <br>
<br>
<br>
<br>
</div>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
	<script>
  UPLOADCARE_LOCALE = "en";
  UPLOADCARE_TABS = "file url facebook gdrive gphotos dropbox instagram evernote flickr skydrive";
  UPLOADCARE_PUBLIC_KEY = "b658fe8a76a43c7279ab";
</script>
<script charset="utf-8" src="//ucarecdn.com/libs/widget/3.2.1/uploadcare.full.min.js"></script>
<script charset="utf-8" src="https://ucarecdn.com/libs/widget/3.2.1/uploadcare.full.min.js"></script>

  </body>

</html>
