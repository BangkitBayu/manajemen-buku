<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="node_modules/boxicons/css/boxicons.min.css">
    <title>Aplikasi Manajemen Buku</title>
</head>

<body>
    <header class="container-fluid bg-danger py-3 px-auto sticky-top d-flex justify-content-between align-items-center">
        <h1 class="h1 fw-bold text-white text-capitalize ">book management</h1>

        <nav class="navbar navbar-expand-lg navbar-dark ms-auto me-2">
            <div class="container-fluid ">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bx bx-menu"></i>
                </button>
            
            <div class="collapse navbar-collapse my-3" id="navbarNav">
                <ul class="navbar-nav d-lg-flex gap-3 ">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link active text-white fs-5">List Books</a>
                    </li>
                    <li>
                        <a href="create_book.php" class="nav-link text-white fs-5">Add Book</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
    </header>