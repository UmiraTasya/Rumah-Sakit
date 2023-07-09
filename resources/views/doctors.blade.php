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

    <link rel="stylesheet" href="../assets/css/theme.css">

    <style>
        body{
            background-image: url('/assets/img/background.jpg');
            background-size: 100%;
        }
    </style>
    </head>
    <body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>

        <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #27374D">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{ URL :: to('assets/img/1.jpg') }}" alt="" width="30" height="30"><span class="" style="color: #F2F7A1;"> Mod</span>-Health</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <a class="nav-link" href="beranda">Beranda</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="about">About Us</a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="doctors">Doctors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="appointment">Appointment</a>
                    </li>
                <li class="nav-item">
                <a class="nav-link" href="contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="btn ml-lg-3 " style="background-color: #F2F7A1;" href="addemails">Sidebar Admin</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle"  href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu text-small shadow">
                        
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="logout">Sign out</a></li>
                    </ul>
                </li>
            </ul>
            </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
        </nav>
    </header>

    <h1 class="text-center mb-5 mt-4 wow fadeInUp">Our Doctors</h1>
        <div class="container text-center mb-4">
            <div class="row align-items-center">
            <div class="col">
                <div class="card ml-5" style="width: 18rem;">
                    <img src="../../assets/img/doctors/shindy.jpg" class="card-img-top" alt="..." width="200" height="300">
                    <div class="card-body">
                    <h5 class="card-title">Dr. Shindy Putri</h5>
                    <p class="card-text">Spesialis Kecantikan</p>
                    </div>
                </div>
            </div>
            <div class="col">
            <div class="card ml-5" style="width: 18rem;">
                <img src="../../assets/img/doctors/10.jpg" class="card-img-top" alt="..." width="200" height="300">
                <div class="card-body">
                <h5 class="card-title">Dr. Al Ghifari Barak</h5>
                <p class="card-text">Spesialis Gigi</p>
                </div>
            </div>
            </div>
            <div class="col">
                <div class="card ml-5" style="width: 18rem;">
                    <img src="../../assets/img/doctors/9.jpg" class="card-img-top" alt="..." width="200" height="300">
                    <div class="card-body">
                    <h5 class="card-title">Dr. Reza Gladys</h5>
                    <p class="card-text">Spesialis Jantung</p>
                    </div>
                </div> 
            </div>
        </div>
        </div>
        <div class="container text-center mb-4">
            <div class="row align-items-center">
            <div class="col">
                <div class="card ml-5" style="width: 18rem;">
                    <img src="../../assets/img/doctors/doctor_1.jpg" class="card-img-top" alt="..." width="200" height="300">
                    <div class="card-body">
                    <h5 class="card-title">Dr. Siska Refina</h5>
                    <p class="card-text">Spesialis Neurology</p>
                    </div>
                </div>
            </div>
            <div class="col">
            <div class="card ml-5" style="width: 18rem;">
                <img src="../../assets/img/doctors/doctor_2.jpg" class="card-img-top" alt="..." width="200" height="300">
                <div class="card-body">
                <h5 class="card-title">Dr. Alexander Barrack</h5>
                <p class="card-text">Spesialis Orthopaidhics</p>
                </div>
            </div>
            </div>
            <div class="col">
                <div class="card ml-5" style="width: 18rem;">
                    <img src="../../assets/img/doctors/doctor_3.jpg" class="card-img-top" alt="..." width="200" height="300">
                    <div class="card-body">
                    <h5 class="card-title">Dr. Manda Pertiwi</h5>
                    <p class="card-text">Spesialis Anak</p>
                    </div>
                </div> 
            </div>
        </div>
        </div>

        <div class="container text-center mb-4">
            <div class="row align-items-center">
            <div class="col">
                <div class="card ml-5" style="width: 18rem;">
                    <img src="../../assets/img/doctors/6.jpg" class="card-img-top" alt="..." width="200" height="300">
                    <div class="card-body">
                    <h5 class="card-title">Dr. El Rumi Pratama</h5>
                    <p class="card-text">Spesialis Gizi</p>
                    </div>
                </div>
            </div>
            <div class="col">
            <div class="card ml-5" style="width: 18rem;">
                <img src="../../assets/img/doctors/8.jpg" class="card-img-top" alt="..." width="200" height="300">
                <div class="card-body">
                <h5 class="card-title">Dr. Bella Putri Nasution</h5>
                <p class="card-text">Spesialis Kandungan</p>
                </div>
            </div>
            </div>
            <div class="col">
                <div class="card ml-5" style="width: 18rem;">
                    <img src="../../assets/img/doctors/1.jpg" class="card-img-top" alt="..." width="200" height="300">
                    <div class="card-body">
                    <h5 class="card-title">Dr. Brian Firmansyah Putra</h5>
                    <p class="card-text">Spesialis Ginjal</p>
                    </div>
                </div> 
            </div>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    
    </html> 