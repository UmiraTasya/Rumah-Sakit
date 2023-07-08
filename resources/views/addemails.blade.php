<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Admin</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #27374D">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ URL :: to('assets/img/1.jpg') }}" alt="" width="30" height="30">
                    <span class="" style="color: #F2F7A1;"> Mod</span>-Health
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="height: 100vh;">
                    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                        <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                        <span class="fs-4">Sidebar Admin</span>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="/addemails" class="nav-link active" aria-current="page">
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
                            <a href="/add-doctors" class="nav-link link-body-emphasis">
                                <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#add-doctors"/></svg>
                                Add Doctors
                            </a>
                        </li>
                    </ul>
                    <hr>
                </div>
            </div>
            <div class="col-9">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col">
                            <form>
                                <div class="form-group mb-3">
                                    <label for="greeting"><b>Greeting:</b></label>
                                    <input type="text" id="greeting" class="form-control" placeholder="Enter greeting...">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="body"><b>Body:</b></label>
                                    <textarea id="body" class="form-control" rows="4" placeholder="Enter email body..."></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="action text"><b>Action Text:</b></label>
                                    <input type="text" id="actionText" class="form-control" placeholder="Enter action text...">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="action url"><b>Action URL:</b></label>
                                    <input type="text" id="actionURL" class="form-control" placeholder="Enter action URL...">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="end part"><b>End Part:</b></label>
                                    <input type="text" id="endPart" class="form-control" placeholder="Enter end part...">
                                </div>
                                <button type="submit" class="btn btn-warning"><b>Submit</b></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f
