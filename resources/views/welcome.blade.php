<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <style>
        .hero {
            background: url('path-to-your-background-image.jpg') no-repeat center center;
            background-size: cover;
        }
    </style>
  </head>
  <body>
    <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">BrandName</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero bg-primary text-white text-center py-5">
        <div class="container">
            <h1 class="display-4">Welcome to Our Landing Page</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <a href="#" class="btn btn-lg btn-light">Learn More</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <i class="bi bi-speedometer2 display-4 mb-3"></i>
                            <h5 class="card-title">Fast Performance</h5>
                            <p class="card-text">Our platform is optimized for speed and performance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <i class="bi bi-shield-lock display-4 mb-3"></i>
                            <h5 class="card-title">Secure</h5>
                            <p class="card-text">We prioritize your security and privacy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <i class="bi bi-gear display-4 mb-3"></i>
                            <h5 class="card-title">Easy to Use</h5>
                            <p class="card-text">Our platform is user-friendly and easy to navigate.</p>
                        </div>
                    </div>
                </div>
            </div>
            <table id="example" class="display table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No Surat</th>
                        <th>Nama Surat</th>
                        <th>Jumlah Ayat</th>
                        <th>Diturankan</th>
                        <th>Arti</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($quran as $item) 
                        <tr>
                            <td>{{ $item->nomor }}</td>
                            <td>{{ $item->nama }} ({{$item->nama_latin}})</td>
                            <td>{{ $item->jumlah_ayat }}</td>
                            <td>{{ $item->tempat_turun }}</td>
                            <td>{{ $item->arti }}</td>
                            <td><a href="{{ route('surah.show', ['nomor' => $item->nomor]) }}">Read</a></td>
                        </tr>
                    @endforeach
                    <!-- Tambahkan baris lainnya di sini -->
                </tbody>
                <tfoot>
                    <tr>
                        <th>No Surat</th>
                        <th>Nama Surat</th>
                        <th>Diturankan</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-light text-center py-4">
        <div class="container">
            <p class="mb-0">&copy; 2023 BrandName. All rights reserved.</p>
        </div>
    </footer>

    {{-- <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div
                    class="table-responsive"
                >
                    <table
                        class="table table-primary"
                    >
                        <thead>
                            <tr>
                                <th scope="col">numer Surah</th>
                                <th scope="col">Surat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($quran->data->surahs as $item)
                                <tr class="">
                                    <td scope="row">{{ $item->number }}</td>
                                    <td>{{ $item->name }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td>data kosong</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
  </body>
</html>