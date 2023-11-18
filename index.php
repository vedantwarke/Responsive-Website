<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tours&Travel</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Lora&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <a class="navbar-brand" href="#">Tours&Travels</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Upcoming Tours</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/mumbai.webp" alt="Mumbai" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Mumbai</h3>
        <p>VADAPAV??</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/jd.jpeg" alt="Pratapgad Fort" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Jaipur</h3>
        <p>HAWA HAWAIII !!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/sri2.jpeg" alt="Kashmir" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Kashmir</h3>
        <p>PARADISE ON EARTH</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
<div class="py-5">
    <h2 class="text-center">About us </h2>
</div>
<div class="container-fluid">
<div class="row">
    <div class="col-lg-6 col-md-6 col-12">
        <img src="images/my.jpeg" alt="img not found" class="img-fluid aboutimg">
    
    </div>
    <div class="col-lg-6 col-md-6 col-12">
        <h2 class="display-5">We are a Travelling Family</h2>
        <p class="py-3"> Bunch of enthusiasts who love to explore new places and make new bonds which can be cherished for the rest of our lives while adding  beautiful memories  !! <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat error reprehenderit veniam similique voluptas consectetur temporibus hic ratione labore nisi iusto corporis rerum, enim mollitia ipsa quidem voluptatibus voluptate eum.
        </p>
        <a href="about.php" class="btn btn-outline-success"> Check More </a>
    </div>
</div>
</div>
</section>

<section class="my-5">
<div class="py-5">
    <h2 class="text-center"> Our Services</h2>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">

            <div class="card" >
                <img class="card-img-top" src="images/camp.jpeg" alt="Card image cap" style="height: 300px">
                <div class="card-body">
                    <h5 class="card-title">Camping</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-warning">Go somewhere</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">

            <div class="card" >
                <img class="card-img-top" src="images/fort.jpg" alt="Card image cap" style="height: 300px">
                <div class="card-body">
                    <h5 class="card-title">Fort Exploration</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-warning">Go somewhere</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">

            <div class="card" >
                <img class="card-img-top" src="images/boat.jpeg" alt="Card image cap" style="height: 300px;">
                <div class="card-body">
                    <h5 class="card-title">Boating</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-outline-warning">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section class="my-5">
<div class="py-5">
    <h2 class="text-center"> Gallery </h2>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <img src="images/one.jpeg" alt="" class="img-fluid pb-3" style="width:300px; height: 200px">
        </div>

        <div class="col-lg-4 col-md-4 col-12">
            <img src="images/two.jpeg" alt="" class="img-fluid pb-3" style="width:300px; height: 200px">
        </div>

        <div class="col-lg-4 col-md-4 col-12">
            <img src="images/three.jpeg" alt="" class="img-fluid pb-3" style="width:300px; height: 200px">
        </div>

        <div class="col-lg-4 col-md-4 col-12">
            <img src="images/four.jpeg" alt="" class="img-fluid pb-3" style="width:300px; height: 200px">
        </div>

        <div class="col-lg-4 col-md-4 col-12">
            <img src="images/five.jpeg" alt="" class="img-fluid pb-3" style="width:300px; height: 200px">
        </div>

        <div class="col-lg-4 col-md-4 col-12">
            <img src="images/six.jpeg" alt="" class="img-fluid pb-3" style="width:300px; height: 200px">
        </div>

        <div class="col-lg-4 col-md-4 col-12">
            <img src="images/seven.jpeg" alt="" class="img-fluid pb-3" style="width:300px; height: 200px">
        </div>

        <div class="col-lg-4 col-md-4 col-12">
            <img src="images/eight.jpeg" alt="" class="img-fluid pb-3" style="width:300px; height: 200px">
        </div>

        <div class="col-lg-4 col-md-4 col-12">
            <img src="images/nine.jpeg" alt="" class="img-fluid pb-3" style="width:300px; height: 200px">
        </div>
    </div>
</div>
</section>


<section class="my-5">
<div class="py-5">
    <h2 class="text-center"> Contact Us </h2>
</div>

<div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="Username" class="form-control" autocomplete="off">
        </div>

        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="Email" class="form-control" autocomplete="off">
        </div>

        <div class="form-group">
            <label for="">Phone</label>
            <input type="text" name="Phone" class="form-control" autocomplete="off">
        </div>

        <div class="form-group">
            <label for="">Comment</label>
            <textarea name="Comment" id="" class="form-control" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>

    </form>
</div>

</section>

<footer>

<p class="p-3 bg-dark text-white text-center">@VedantWarke</p>

</footer>

</body>
</html>