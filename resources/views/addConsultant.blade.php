<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Consultant</title>
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

    <div class="p-5">
        <h1 class="text-center">Add Consultant</h1>
        <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input value="" type="text" class="form-control" id="" name="name">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input value="" type="email" class="form-control" id="" name="email">
            </div>

            {{-- <div class="mb-3">
                <label for="" class="form-label">Position</label>
                <input value="" type="text" class="form-control" id="" name="position">
            </div> --}}

            {{-- <div class="mb-3">
                <label for="" class="form-label">Industry</label>
                <input value=""type="text" class="form-control" id="" name="industry">
            </div> --}}

            <div class="mb-3">
                <label for="" class="form-label">Reimbursement</label>
                <input value=""type="text" class="form-control" id="" name="reimbursement">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Availability</label>
                <input value="" type="date" class="form-control" id="" name="availability">
            </div>

            {{-- <div class="mb-3">
                <label for="" class="form-label">Image</label>
                <input  type="file" class="form-control" id="" name="image">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Project</label>
                <select class="form-select" aria-label="Default select example" name="project">
                    <option value=""></option>
                </select>
            </div> --}}

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
