<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Mod Health - Medical Center </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">
    </head>
    <body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>

        <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #27374D">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{ URL :: to('asset/image/1.jpg') }}" alt="" width="30" height="30"><span class="" style="color: #F2F7A1;"> Mod</span>-Health</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a class="nav-link" href="index.blade.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="about.blade.php">About Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="doctors.blade.php">Doctors</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="contact.blade.php">Contact</a>
                </li>
                <li class="nav-item">
                <a class="btn ml-lg-3" style="background-color: #F2F7A1" href="#">Login</a>
                </li>
                <li class="nav-item overlay-dark">
                    <a class="btn ml-lg-3" style="background-color: #F2F7A1" href="#">Register</a>
                    </li>
            </ul>
            </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
        </nav>
    </header>

    <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/2.jpg);">
        <div class="hero-section">
        <div class="container text-center wow zoomIn">
            <span class="subhead">Mari Jadikan Hidup Anda Bahagia</span>
            <h1 class="display-4">Hidup Sehat</h1>
            <a href="#" class="btn btn-primary">Let's Consult</a>
        </div>
        </div>
    </div>


    <div class="bg-light">
        <div class="page-section py-3 mt-md-n5 custom-index">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-md-4 py-3 py-md-0">
                <div class="card-service wow fadeInUp">
                <div class="circle-shape bg-secondary text-white">
                    <span class="mai-chatbubbles-outline"></span>
                </div>
                <p><span>Chat</span> with a doctors</p>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card-service wow fadeInUp">
                <div class="circle-shape bg-primary text-white">
                    <span class="mai-shield-checkmark"></span>
                </div>
                <p><span>One</span>-Health Protection</p>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card-service wow fadeInUp">
                <div class="circle-shape bg-accent text-white">
                    <span class="mai-basket"></span>
                </div>
                <p><span>One</span>-Health Pharmacy</p>
                </div>
            </div>
            </div>
        </div>
        </div> <!-- .page-section -->

        <div class="page-section pb-0">
            <div class="container">
                <div class="row align-items-center">
                <div class="col-lg-6 py-3 wow fadeInUp">
                    <h1>Selamat Datang di Pusat Kesehatan<br></h1>
                    <p class="text-grey mb-4">Tempat dimana kesehatan Anda menjadi 
                        prioritas utama. Kami dengan tulus menyambut
                        kedatangan Anda ke rumah sakit. Kami yang 
                        bertekad memberikan perawatan yang 
                        Terpercaya dan Berkualitas.</p>
                    <a href="about.html" class="btn btn-primary">Learn More</a>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                    <div class="img-place custom-img-1">
                    <img src="../assets/img/3.jpg" alt="">
                    </div>
                </div>
                </div>
            </div>
            </div> <!-- .bg-light -->
        </div> <!-- .bg-light -->


        {{-- Bagian Dokter --}}

        <h1 class="text-center mb-5 mt-4 wow fadeInUp">Our Doctors</h1>
        <div class="container text-center">
            <div class="row align-items-center">
            <div class="col">
                <div class="card ml-5" style="width: 18rem;">
                    <img src="../../assets/img/doctors/4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
            <div class="card ml-5" style="width: 18rem;">
                <img src="../../assets/img/doctors/5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            </div>
            <div class="col">
                <div class="card ml-5" style="width: 18rem;">
                    <img src="../../assets/img/doctors/4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div> 
            </div>
        </div>
        </div>


        

        </html>      