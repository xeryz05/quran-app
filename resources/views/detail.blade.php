<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >
    <title>Bootstrap demo</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"
    >
    <link
        href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"
        rel="stylesheet"
    >
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
                <a
                    class="navbar-brand"
                    href="#"
                >BrandName</a>
                <button
                    class="navbar-toggler"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                    type="button"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="navbar-collapse collapse"
                    id="navbarNav"
                >
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                aria-current="page"
                                href="#"
                            >Home</a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                href="#"
                            >Features</a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                href="#"
                            >Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                href="#"
                            >Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="hero bg-primary py-5 text-center text-white">
            <div class="container">
                <h1 class="display-4">Welcome to Our Landing Page</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra
                    attention to featured content or information.</p>
                <a
                    class="btn btn-lg btn-light"
                    href="#"
                >Learn More</a>
            </div>
        </section>

        <!-- Features Section -->
        <section class="features py-5">
            <div class="container">
                <div class="row">

                    <div class="container mt-5">
                        <h1>{{ $surah->nama_latin }} ({{ $surah->nama }})</h1>
                        <p>Number: {{ $surah->nomor }}</p>
                        <p>Revelation Place: {{ $surah->tempat_turun }}</p>
                        <p>Number of Ayahs: {{ $surah->jumlah_ayat }}</p>
                        <p>Meaning: {{ $surah->arti }}</p>
                        <p>Description: {!! $surah->deskripsi !!}</p>
                        <audio controls>
                            <source
                                src="{{ $surah->audio }}"
                                type="audio/mpeg"
                            >
                            Your browser does not support the audio element.
                        </audio>

                        <h2>Ayahs:</h2>
                        <ul>
                            @foreach ($surah->ayat as $ayah)
                                <li><p>{{ $ayah->nomor }}: {{ $ayah->ar }}</p></li>
                                <li><p>{{ $ayah->idn }}</p></li>
                            @endforeach
                        </ul>

                        @if ($surah->surat_sebelumnya)
                            <a href="{{ route('surah.show', ['nomor' => $surah->surat_sebelumnya->nomor]) }}">Previous
                                Surah</a>
                        @endif
                        @if ($surah->surat_selanjutnya)
                            <a href="{{ route('surah.show', ['nomor' => $surah->surat_selanjutnya->nomor]) }}">Next
                                Surah</a>
                        @endif
                        <br>
                        <a href="{{ route('/') }}">Back to list</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-light py-4 text-center">
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
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"
        ></script>
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css"
            rel="stylesheet"
        >
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
