<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Consultant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Consultant</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('addConsultant')}}">Insert</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 class="text-center">Our Consultants</h1>

    <div class="m-5">
        <a href="{{route('addConsultant')}}">
            <button href="" class="btn btn-success">Insert</button>
        </a>
    </div>

    <div class="d-flex flex-row justify-content-center gap-5">
        <div class="card" style="width: 18rem;">
            {{-- <img src="" class="card-img-top" alt="..."> --}}
            <div class="card-body">
                <h5 class="card-title">Name:</h5>
                <p class="card-text">Email:</p>
                <p class="card-text">Position:</p>
                <p class="card-text">Reimbursement:</p>
                <p class="card-text">Availability:</p>
                <p class="card-text">Project:</p>
                <a href="" class="btn btn-success">Edit</a>
                <button type="" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
