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
        
    <style>
        .nav-pills .nav-link.active {
            background-color: blue;
            color: white;
        }
    </style>
        
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="height: 800px">
                    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                        <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                        <span class="fs-4">Sidebar Admin</span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="/addemails" class="nav-link link-body-emphasis ">
                                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#addemails"/></svg>
                                Add Emails
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/appointmentsadmin" class="nav-link link-body-emphasis">
                                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#appointmentsadmin"/></svg>
                                Appointments
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/add-doctors" class="nav-link active" aria-current="page">
                                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#add-doctors"/></svg>
                                Add Doctors
                            </a>
                        </li>
                    </ul>
                    <hr>
                </div>
            </div>
            <div class="col">
                <div class="container mt-3">
                    
                    <div class="table-responsive">
                        <table class="table table-bordered mt-3">
                            <thead>
                                <tr>
                                    <th>Doctor Name</th>
                                    <th>Phone</th>
                                    <th>Specialist</th>
                                    <th>Room No</th>
                                    <th>Image</th>
                                    <th>Delete</th>
                                    <th>Update</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Dr. John Smith</td>
                                    <td>123456789</td>
                                    <td>Cardiology</td>
                                    <td>101</td>
                                    <td><img src="doctor_image.jpg" alt="Doctor Image" width="50"></td>
                                    <td><button type="button" class="btn btn-danger">Delete</button></td>
                                    <td><button type="button" class="btn btn-primary">Update</button></td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</html>
