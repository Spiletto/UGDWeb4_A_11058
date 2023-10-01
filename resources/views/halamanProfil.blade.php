<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .card{
            margin: 50px 500px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
        <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('halamanHome') }}">UGD4_A_11058</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('halamanHome') }}">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ url('halamanProfil') }}">Profil</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ url('halamanForm') }}">Form</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>

        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('images/jake.jpg') }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $nama }}</h5>
                    <p class="card-text">{{ $bio }}</p>
                    <p class="card-text"><small class="text-body-secondary"><strong>Alamat:</strong> {{ $alamat }}</small></p>
                    <p class="card-text"><small class="text-body-secondary"><strong>Email:</strong> {{ $email }}</small></p>
                    <p class="card-text"><small class="text-body-secondary"><strong>Telepon:</strong> {{ $telepon }}</small></p>
                    <p class="card-text"><small class="text-body-secondary"><strong>Hobi:</strong> {{ $hobi }}</small></p>
                    <a href="{{ url('halamanForm') }}" class="btn btn-primary">Form Data Mahasiswa</a>
                </div>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>