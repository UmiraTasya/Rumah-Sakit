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
                <li class="nav-item active">
                <a class="nav-link" href="beranda">Beranda</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="about">About Us</a>
                </li>
                <li class="nav-item">
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

    <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/2.jpg);">
        <div class="hero-section">
            <div class="container text-center wow zoomIn">
                <span class="subhead">Mari Jadikan Hidup Anda Bahagia</span>
                <h1 class="display-4">Hidup Sehat</h1>
                <a href="appointment" class="btn btn-primary">Let's Consult</a>
            </div>
        </div>
    </div>
    
    <style>
        .page-hero {
            min-height: 100vh;
            background-size: cover;
            background-position: center;
        }
        
        @media (max-width: 767px) {
            .page-hero {
                min-height: 50vh;
            }
        }
    </style>
    

{{-- about --}}

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
            <a href="doctors" class="btn btn-primary">Learn More</a>
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

    {{-- Make Appointment --}}
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
                    <option value="cardiology">Jantung</option>
                    <option value="dental">Gigi</option>
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
        </div> <!-- .page-section Appointment -->


    <!-- Bagian Contact -->
    <div class="container-fluid" style="background-color: #324a6d; color: white;">
        <footer class="py-5">
            <div class="row">
                <div class="col-12 col-md-4 mb-3">
                    <h5>Alamat Rumah Sakit</h5>
                    <p>Jl. Banda Aceh-Medan Km.6 <br> Buket Rata Lhokseumawe</p>
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <h5>Nomor Telepon</h5>
                    <p><i class="mai-call-outline"></i> +1 123 456 7890</p>
                    
                </div>
                <div class="col-12 col-md-4 mb-3">
                    <h5>Sosial Media</h5>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="mai-mail-outline"></i> Modhealth@gmail.com</a></li>
                        <li><a href="#"><i class="mai-logo-instagram"></i> Mod_Health_Hospitalt</a></li>
                        <li><a href="#"><i class="mai-logo-facebook"></i> Mod Healt</a></li>
                        <li><a href="#"><i class="mai-logo-youtube"></i> Mod Healt Hospital</a></li>
                        <li><a href="#"><i class="mai-globe-outline"></i> Mod Health Hospital Update</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <h5>Kritik dan Saran</h5>
                    <form>
                        <div class="mb-3">
                            <label for="kritik-saran" class="form-label">Tulis Kritik dan Saran Anda mengenai Sistem Manajemen Rumah Sakit Kami</label>
                            <textarea class="form-control" id="kritik-saran" rows="5"></textarea>
                        </div>
                        <button class="btn btn-primary" type="submit">Kirim</button>
                    </form>
                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>&copy; 2023 Umira Tasya, Sistem Manajemen Rumah Sakit.</p>
                <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
                <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
                <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
                </ul>
            </div>
        </footer>
    </div>
        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

        

        </html>      