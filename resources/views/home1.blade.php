<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hospital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

{{-- BAGIAN NAVBAR --}}
<header>

<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #27374D">
    
        <div class="container-lg">
            <a class="navbar-brand" href="#"><img src="{{ URL :: to('asset/image/1.jpg') }}" alt="" width="30" height="30"><span class="" style="color: #F2F7A1;"> Mod</span>-Health</a>
            
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                
                <style>
                    .navbar-nav .nav-item:not(:last-child) {
                      margin-right: 10px; /* Sesuaikan nilai spasi yang diinginkan */
                    }
                    
                    .navbar-nav .btn:not(:last-child) {
                      margin-right: 10px; /* Sesuaikan nilai spasi yang diinginkan */
                    }

                </style>
                <div class="col-sm-20 text-right text-sm">
                <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="about.html">About Us</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="doctors.html">Doctors</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                
                        <style>
                            .btn {
                            margin-right: 10px; /* Sesuaikan nilai spasi yang diinginkan */
                            }
                        </style>
                        
                        <li class="nav-item">
                            <a class="btn ml-lg-3 " style="background-color: #F2F7A1;" href="#">Login</a>
                        </li>

                        <li class="nav-item">
                            <a class="btn ml-lg-3 " style="background-color: #F2F7A1;" href="#">Register</a>
                        </li> 
                </ul>
                </div> <!-- .navbar-collapse -->
            </div> <!-- .container -->
            </nav>
        </header>

        
</body>



</html>