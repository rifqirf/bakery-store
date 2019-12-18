<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon -->
  <link rel="shortcut icon" href="<?= base_url("assets/img/favicon.ico"); ?>" type="image/x-icon">
  
  <!-- Bootstrap 4 CSS -->
  <link rel="stylesheet" href="<?= base_url("assets/bootstrap/css/bootstrap.min.css"); ?>">
  
  <!-- Font Awesome JS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

  <!-- Custom Theme CSS -->
  <link rel="stylesheet" href="<?= base_url("assets/css/theme.css"); ?>">
  
  <title>Bakery Store</title>
</head>
<body>
  <!-- Topnav -->
  <header class="topnav">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary pl-5 pr-5">
      <a class="navbar-brand ml-lg-5" href="#">
        <img src="<?= base_url("assets/img/logo.png"); ?>" width="30" height="30" class="d-inline-block align-top" alt="Bakery Stores">
        Bakery Store
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Cakes
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Jenis Produk 1</a>
              <a class="dropdown-item" href="#">Jenis Produk 2</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Lainnya</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Galleries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0 mr-lg-5">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search something ..." aria-label="Search something ..." aria-describedby="basic-addon1">
            <div class="input-group-append">
              <button class="input-group-text btn-primary" id="basic-addon1">Search</button>
            </div>
          </div>
        </form>
      </div>
    </nav>
  </header>  

  <!-- Promos and Events -->
  <section class="container mt-4" id="slider">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div id="cakes-carousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#cakes-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#cakes-carousel" data-slide-to="1"></li>
            <li data-target="#cakes-carousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner bg-secondary">
            <div class="carousel-item active">
              <img class="d-block w-75 m-auto" src="<?= base_url("assets/img/carousel1.png"); ?>" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-dark">Image Carousel</h5>
                <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi obcaecati laudantium officia totam alias. Suscipit in esse veritatis quos earum eligendi magni assumenda sunt corporis, optio ex enim aspernatur quisquam.</p>
               </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-75 m-auto" src="<?= base_url("assets/img/carousel1.png"); ?>" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-dark">Image Carousel</h5>
                <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi obcaecati laudantium officia totam alias. Suscipit in esse veritatis quos earum eligendi magni assumenda sunt corporis, optio ex enim aspernatur quisquam.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-75 m-auto" src="<?= base_url("assets/img/carousel1.png"); ?>" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-dark">Image Carousel</h5>
                <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi obcaecati laudantium officia totam alias. Suscipit in esse veritatis quos earum eligendi magni assumenda sunt corporis, optio ex enim aspernatur quisquam.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#cakes-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#cakes-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Product Type List -->
  <section class="container mt-4" id="product-type">
    <div class="row">
      <div class="col-lg-2 offset-lg-2 col-md-3 col-sm-6 mb-2">
        <div class="card">
          <img class="card-img-top" src="<?= base_url("assets/img/carousel1.png"); ?>" alt="Product Type 1">
          <div class="card-body">
            <p class="card-text">Type Product 1</p>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-6 mb-2">
        <div class="card">
          <img class="card-img-top" src="<?= base_url("assets/img/carousel1.png"); ?>" alt="Product Type 1">
          <div class="card-body">
            <p class="card-text">Type Product 2</p>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-6 mb-2">
        <div class="card">
          <img class="card-img-top" src="<?= base_url("assets/img/carousel1.png"); ?>" alt="Product Type 1">
          <div class="card-body">
            <p class="card-text">Type Product 3</p>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-6 mb-2">
        <div class="card">
          <img class="card-img-top" src="<?= base_url("assets/img/carousel1.png"); ?>" alt="Product Type 1">
          <div class="card-body">
            <p class="card-text">Type Product 4</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Product List -->
  <section class="container mt-4" id="product-list">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12 mb-4">
        <div class="card bg-primary">
          <div class="card-header text-white">
            Filter
          </div>
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
              Original Cakes
              <span class="badge badge-primary badge-pill">10</span>
            </a>
            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
              Birthday Cakes
              <span class="badge badge-primary badge-pill">3</span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-12">
        <div class="card-deck">
          <div class="card">
            <img class="card-img-top" src="<?= base_url("assets/img/carousel1.png"); ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Product 1</h5>
              <p class="card-text text-right"><span class=" font-weight-bold">Rp. 20.000,-</span></p>
              <p class="card-text"><i class="fa fa-map-marker-alt text-danger"></i> <small class="text-muted">Tasikmalaya</small></p>
            </div>
            <div class="card-body">
              <div class="btn-group">
                <a href="#" class="btn btn-info">Buy</a>
                <a href="#" class="btn btn-outline-info">Add to cart</a>
              </div>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="<?= base_url("assets/img/carousel1.png"); ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Product 2</h5>
              <p class="card-text text-right"><span class=" font-weight-bold">Rp. 30.000,-</span></p>
              <p class="card-text"><i class="fa fa-map-marker-alt text-danger"></i> <small class="text-muted">Tasikmalaya</small></p>
            </div>
            <div class="card-body">
              <div class="btn-group">
                <a href="#" class="btn btn-info">Buy</a>
                <a href="#" class="btn btn-outline-info">Add to cart</a>
              </div>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="<?= base_url("assets/img/carousel1.png"); ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Product 3</h5>
              <p class="card-text text-right"><span class=" font-weight-bold">Rp. 50.000,-</span></p>
              <p class="card-text"><i class="fa fa-map-marker-alt text-danger"></i> <small class="text-muted">Tasikmalaya</small></p>
            </div>
            <div class="card-body">
              <div class="btn-group">
                <a href="#" class="btn btn-info">Buy</a>
                <a href="#" class="btn btn-outline-info">Add to cart</a>
              </div>
            </div>
          </div>
        </div>
        <div class="card-deck mt-4">
          <div class="card">
            <img class="card-img-top" src="<?= base_url("assets/img/carousel1.png"); ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Product 1</h5>
              <p class="card-text text-right"><span class=" font-weight-bold">Rp. 20.000,-</span></p>
              <p class="card-text"><i class="fa fa-map-marker-alt text-danger"></i> <small class="text-muted">Tasikmalaya</small></p>
            </div>
            <div class="card-body">
              <div class="btn-group">
                <a href="#" class="btn btn-info">Buy</a>
                <a href="#" class="btn btn-outline-info">Add to cart</a>
              </div>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="<?= base_url("assets/img/carousel1.png"); ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Product 2</h5>
              <p class="card-text text-right"><span class=" font-weight-bold">Rp. 30.000,-</span></p>
              <p class="card-text"><i class="fa fa-map-marker-alt text-danger"></i> <small class="text-muted">Tasikmalaya</small></p>
            </div>
            <div class="card-body">
              <div class="btn-group">
                <a href="#" class="btn btn-info">Buy</a>
                <a href="#" class="btn btn-outline-info">Add to cart</a>
              </div>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="<?= base_url("assets/img/carousel1.png"); ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Product 3</h5>
              <p class="card-text text-right"><span class=" font-weight-bold">Rp. 50.000,-</span></p>
              <p class="card-text"><i class="fa fa-map-marker-alt text-danger"></i> <small class="text-muted">Tasikmalaya</small></p>
            </div>
            <div class="card-body">
              <div class="btn-group">
                <a href="#" class="btn btn-info">Buy</a>
                <a href="#" class="btn btn-outline-info">Add to cart</a>
              </div>
            </div>
          </div>
        </div>
        <div class="card-deck mt-4">
          <div class="card">
            <img class="card-img-top" src="<?= base_url("assets/img/carousel1.png"); ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Product 1</h5>
              <p class="card-text text-right"><span class=" font-weight-bold">Rp. 20.000,-</span></p>
              <p class="card-text"><i class="fa fa-map-marker-alt text-danger"></i> <small class="text-muted">Tasikmalaya</small></p>
            </div>
            <div class="card-body">
              <div class="btn-group">
                <a href="#" class="btn btn-info">Buy</a>
                <a href="#" class="btn btn-outline-info">Add to cart</a>
              </div>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="<?= base_url("assets/img/carousel1.png"); ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Product 2</h5>
              <p class="card-text text-right"><span class=" font-weight-bold">Rp. 30.000,-</span></p>
              <p class="card-text"><i class="fa fa-map-marker-alt text-danger"></i> <small class="text-muted">Tasikmalaya</small></p>
            </div>
            <div class="card-body">
              <div class="btn-group">
                <a href="#" class="btn btn-info">Buy</a>
                <a href="#" class="btn btn-outline-info">Add to cart</a>
              </div>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="<?= base_url("assets/img/carousel1.png"); ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Product 3</h5>
              <p class="card-text text-right"><span class=" font-weight-bold">Rp. 50.000,-</span></p>
              <p class="card-text"><i class="fa fa-map-marker-alt text-danger"></i> <small class="text-muted">Tasikmalaya</small></p>
            </div>
            <div class="card-body">
              <div class="btn-group">
                <a href="#" class="btn btn-info">Buy</a>
                <a href="#" class="btn btn-outline-info">Add to cart</a>
              </div>
            </div>
          </div>
        </div>
        <div class="card-deck mt-4">
          <div class="card">
            <img class="card-img-top" src="<?= base_url("assets/img/carousel1.png"); ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Product 1</h5>
              <p class="card-text text-right"><span class=" font-weight-bold">Rp. 20.000,-</span></p>
              <p class="card-text"><i class="fa fa-map-marker-alt text-danger"></i> <small class="text-muted">Tasikmalaya</small></p>
            </div>
            <div class="card-body">
              <div class="btn-group">
                <a href="#" class="btn btn-info">Buy</a>
                <a href="#" class="btn btn-outline-info">Add to cart</a>
              </div>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="<?= base_url("assets/img/carousel1.png"); ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Product 2</h5>
              <p class="card-text text-right"><span class=" font-weight-bold">Rp. 30.000,-</span></p>
              <p class="card-text"><i class="fa fa-map-marker-alt text-danger"></i> <small class="text-muted">Tasikmalaya</small></p>
            </div>
            <div class="card-body">
              <div class="btn-group">
                <a href="#" class="btn btn-info">Buy</a>
                <a href="#" class="btn btn-outline-info">Add to cart</a>
              </div>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="<?= base_url("assets/img/carousel1.png"); ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Product 3</h5>
              <p class="card-text text-right"><span class=" font-weight-bold">Rp. 50.000,-</span></p>
              <p class="card-text"><i class="fa fa-map-marker-alt text-danger"></i> <small class="text-muted">Tasikmalaya</small></p>
            </div>
            <div class="card-body">
              <div class="btn-group">
                <a href="#" class="btn btn-info">Buy</a>
                <a href="#" class="btn btn-outline-info">Add to cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bottomnav">

  </footer>

  <!-- Bootstrap 4 JS -->
  <script src="<?= base_url("assets/js/jquery-3.4.1.min.js"); ?>"></script>
  <script src="<?= base_url("assets/js/popper.min.js"); ?>"></script>
  <script src="<?= base_url("assets/bootstrap/js/bootstrap.min.js"); ?>"></script>
  <!-- Font Awesome JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"></script>
  <!-- Custom Theme JS -->
  <script src="<?= base_url("assets/js/theme.js"); ?>"></script>
  <!-- Action JS -->
  <script src="<?= base_url("assets/js/action.js"); ?>"></script>
</body>
</html>