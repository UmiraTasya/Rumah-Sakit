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
                <li class="nav-item">
                <a class="nav-link" href="doctors">Doctors</a>
                </li>
                <li class="nav-item active">
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

    <div class="page-section">
        <div class="container">
        <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

        <form class="main-form">
            <div class="row mt-5 ">
            <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                <input type="text" class="form-control" placeholder="Full name">
            </div>
            <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                <input type="text" class="form-control" placeholder="Email address..">
            </div>
            <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                <input type="date" class="form-control">
            </div>
            <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                <select name="departement" id="departement" class="custom-select">
                <option value="general">Kecantikan</option>
                <option value="cardiology">Gigi</option>
                <option value="dental">Jantung</option>
                <option value="neurology">Neurology</option>
                <option value="orthopaedics">Orthopaedics</option>
                </select>
            </div>
            <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                <input type="text" class="form-control" placeholder="Number..">
            </div>
            <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
            </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
        </form>
        </div>
    </div> <!-- .page-section -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

    </html> 