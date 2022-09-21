<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    {{-- Style CSS --}}
    <link rel="stylesheet" href="/css/portfoliocss.css">
    <title>Serius Harefa</title>
  </head>
  <body>
   {{-- Navbar --}}
   <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">Serius H</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Pricing</a>
            <a class="nav-item nav-link" href="#">Features</a>
            <a class="nav-item nav-link " href="#">About</a>
            <a class="nav-item  btn btn-primary tombol" href="index.blade.php">Contact Us</a>

        </div>
        </div>
    </div>
  </nav>
   {{-- Akhir Navbar --}}

   {{-- Jumbotron --}}
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
        <h1 class="display-4">Pekerja <span>Keras</span> <br> dan <br>Pantang <span>Menyerah</span></h1>
        </div>

        {{-- <a href="index.blade.php" ><button class="btn btn-primary tombol"> Resume</button></a> --}}
    </div>
   {{-- Akhir Jumbotron --}}

   {{-- Container --}}
   <div class="container">

    {{-- Informasi --}}
    <div class="row justify-content-center">
        <div class="col-10 info">
            <div class="row">
                <div class="col-lg">
                    <img src="/gambar/jam.png" alt="jam" class="float-left">
                    <h4>24 Hours</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="col-lg">
                    <img src="/gambar/png.png" alt="png" class="float-left">
                    <h4>High-Res</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="col-lg">
                    <img src="/gambar/security.png" alt="security" class="float-left">
                    <h4>Security</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
        </div>
    </div>
    {{-- Akhir Informasi --}}

    {{-- Working Space --}}
    <div class="row workingspace">
        <div class="col-lg-6">
            <img src="/gambar/workingspace.jpg" alt="workingspace" class="img-fluid">
        </div>
        <div class="col-lg-5">
            <h3>You <span>Work</span> Like at <span>Home</span></h3>
            <p>Bekerja dengan suasana hati yang lebih asyik dan mempelajari hal baru setiap harinya.</p>
            <a href="" class="btn btn-primary tombol">Gallery</a>
        </div>
    </div>
    {{-- Akhir Working Space --}}

    {{-- Testimoni --}}
    <section class="testimoni">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h5>"Bekerja dengan suasana hati yang lebih asyik dan mempelajari hal baru setiap harinya."</h5>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 justify-content-center d-flex ">
                <figure class="figure">
                    <img src="/gambar/caption1.jpg" class="figure-img img-fluid rounded-circle" alt="Caption 1">
                </figure>
                <figure class="figure">
                    <img src="/gambar/caption2.jpg" class="figure-img img-fluid rounded-circle utama" alt="Caption 2">
                    <figcaption class="figure-caption">
                        <h5>Boaz Salosa</h5>
                        <p>Anak Indogo</p>
                    </figcaption>
                </figure>
                <figure class="figure">
                    <img src="/gambar/caption3.jpg" class="figure-img img-fluid rounded-circle" alt="Caption 3">
                </figure>
            </div>
        </div>
    </section>

    {{-- Akhir Testimoni --}}

    {{-- Footer --}}
    <div class="row">
        <div class="col text-center">
            <p>&copy; 2022 Allright Reserved By Serius Harefa.</p>
        </div>
    </div>
    {{-- Akhir Footer --}}
   </div>
   {{-- Akhir Container --}}


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
