<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <title>Admin</title>
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
                            <a href="/addemails" class="nav-link link-body-emphasis">
                                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#addemails"/></svg>
                                Add Emails
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/appointmentsadmin" class="nav-link active" aria-current="page">
                                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#appointmentsadmin"/></svg>
                                Appointments
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/add-doctors" class="nav-link link-body-emphasis">
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
                                    <th>Customer Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Doctor Name</th>
                                    <th>Date</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Approved</th>
                                    <th>Canceled</th>
                                    <th>Send Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Umira Tasya</td>
                                    <td>Umira@umira.com</td>
                                    <td>123456789</td>
                                    <td>Dr. Smith</td>
                                    <td>2023-07-07</td>
                                    <td>Lorem ipsum dolor sit amet</td>
                                    <td>Pending</td>
                                    <td><button class="btn btn-success">Approved</button></td>
                                    <td><button class="btn btn-danger">Canceled</button></td>
                                    <td><button class="btn btn-primary">Send Email</button></td>
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
</html>
