<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .form-container {
            width: 500px;
            padding: 20px; 
            border: 1px solid #ccc;
            margin: 0 auto;
        }

        .form-container div {
            margin-bottom: 10px;
        }

        h1 {
            background-color: blue;
            color: white;
            padding: 5px;
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

    <div class="form-container">
    <h1>Form Data Mahasiswa</h1>
    <form action="proses_form.php" method="POST">
        <div>
            <label for="nama">Nama:</label>
            <input class="form-control" type="text" value="{{ $nama }}" aria-label="Disabled input example">
        </div>
        <div>
            <label for="npm">NPM:</label>
            <input class="form-control" type="text" value="{{ $npm }}" aria-label="Disabled input example">
        </div>
        <div>
            <label for="email">Email:</label>
            <input class="form-control" type="text" value="{{ $email }}" aria-label="Disabled input example">
        </div>
        <div>
            <label for="fakultas">Fakultas:</label>
            <input class="form-control" type="text" value="{{ $fakultas }}" aria-label="Disabled input example">
        </div>
        <div>
            <label for="jurusan">Jurusan:</label>
            <input class="form-control" type="text" value="{{ $jurusan }}" aria-label="Disabled input example">
        </div>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>