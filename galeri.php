<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Kelurahan Benteng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="l/l3.jpeg">
    <style>
        .stat-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s;
            min-height: 160px;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .icon-blue {
            color: #0d6efd;
        }

        .icon-green {
            color: #198754;
        }

        .icon-amber {
            color: #ffc107;
        }

        .icon-pink {
            color: #dc3545;
        }

        .stat-value {
            font-size: 1.5rem;
            font-weight: 700;
            color: #000;
            margin-top: 15px;
            margin-bottom: 2px;
        }

        .stat-label {
            font-size: 0.85rem;
            color: #6c757d;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-success navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="benteng.png" alt="" style="height:80px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/webkelurahan/beranda.php">BERANDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/webkelurahan/profile.php">PROFILE</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">PEMERINTAHAN</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="struktur.php">Struktur Organisasi</a></li>
                            <li><a class="dropdown-item" href="perangkat.php">Perangkat Pemerintahan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/webkelurahan/layanan.php">LAYANAN</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">INFORMASI</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="visi.php">Visi-Misi</a></li>
                            <li><a class="dropdown-item" href="berita.php">Berita</a></li>
                            <li><a class="dropdown-item active" href="galeri.php">Galeri</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/webkelurahan/logout.php">LOGOUT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
<div style="background-color: #A8D5BA;" class="text-center py-3">
    <div class="container">
        <h1 data-aos="fade-down">GALERI KEGIATAN</h1>
        <p data-aos="fade-up">
            Demonstrasi Kegiatan Keluarahan Benteng
        </p>
    </div>
</div>
<div class="container my-5">
    <div class="row g-4 justify-content-center">

        <div class="col-auto">
            <div class="card" style="width: 180px;">
                <img src="k/k1.jpeg" class="card-img-top" alt="" style="height: 180px; object-fit: cover;">
                <div class="card-body text-center">
                    <p class="card-text">Pelatihan Statistik</p>
                </div>
            </div>
        </div>

        <div class="col-auto">
            <div class="card" style="width: 180px;">
                <img src="k/k2.jpeg" class="card-img-top" alt="" style="height: 180px; object-fit: cover;">
                <div class="card-body text-center">
                    <p class="card-text">Gemerlap Dan Gemetar</p>
                </div>
            </div>
        </div>

        <div class="col-auto">
            <div class="card" style="width: 180px;">
                <img src="k/k3.jpeg" class="card-img-top" alt="" style="height: 180px; object-fit: cover;">
                <div class="card-body text-center">
                    <p class="card-text">Kerja Bakti Di Masjid</p>
                </div>
            </div>
        </div>

        <div class="col-auto">
            <div class="card" style="width: 180px;">
                <img src="k/k4.jpeg" class="card-img-top" alt="" style="height: 180px; object-fit: cover;">
                <div class="card-body text-center">
                    <p class="card-text">Penyerahan Bantuan Sosial</p>
                </div>
            </div>
        </div>

        <div class="col-auto">
            <div class="card" style="width: 180px;">
                <img src="k/k5.jpeg" class="card-img-top" alt="" style="height: 180px; object-fit: cover;">
                <div class="card-body text-center">
                    <p class="card-text">Penyuluhan Kerumah Warga</p>
                </div>
            </div>
        </div>

        <div class="col-auto">
            <div class="card" style="width: 180px;">
                <img src="k/k6.jpeg" class="card-img-top" alt="" style="height: 180px; object-fit: cover;">
                <div class="card-body text-center">
                    <p class="card-text">Kegiatan Pada Masjid Baru</p>
                </div>
            </div>
        </div>

    </div>
</div>
<footer class="bg-success text-white pt-5 pb-3 mt-5">
    <div class="container">
        <div class="row g-4 text-md-start text-center">

            <div class="col-12 col-md-3 d-flex flex-column align-items-center justify-content-center">
                <img src="icon.png" alt="Logo" class="me-3" style="height: 40px !important; width: auto !important; transform: scale(4.5); object-fit: contain;">
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <h5 class="fw-bold mb-3 border-bottom border-2 pb-2 d-inline-block">Alamat</h5>
                <ul class="list-unstyled lh-lg" style="font-size: 0.95rem;">
                    <li><i class="bi bi-geo-alt-fill text-warning me-2"></i> Jl. S.Siswomiharjo No. 48</li>
                    <li><i class="bi bi-building text-warning me-2"></i> Kecamatan Benteng,Kab.Kep. Selayar</li>
                    <li><i class="bi bi-telephone-fill text-warning me-2"></i> (0411) 123456</li>
                    <li><i class="bi bi-envelope-fill text-warning me-2"></i> benteng884@gmail.com</li>
                </ul>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <h5 class="fw-bold mb-3 border-bottom border-2 pb-2 d-inline-block">Nomor Penting</h5>
                <ul class="list-unstyled lh-lg" style="font-size: 0.95rem;">
                    <li><i class="bi bi-shield-plus text-warning me-2"></i> RSUD K.H. Hayyung: <strong>082345678323</strong></li>
                    <li><i class="bi bi-truck text-warning me-2"></i> Ambulans Benteng: <strong>081244419388</strong></li>
                    <li><i class="bi bi-shield-lock-fill text-warning me-2"></i> Polres Selayar: <strong>085382228811</strong></li>
                    <li><i class="bi bi-fire text-warning me-2"></i> Damkar Selayar: <strong>085342102573</strong></li>
                </ul>
            </div>

        </div>

        <hr class="my-4" style="border-top: 1px solid rgba(255,255,255,0.2);">

        <div class="text-center" style="font-size: 0.85rem; opacity: 0.9;">
            <p class="mb-1">&copy; <strong>Kelurahan Benteng </strong> 2026. All Rights Reserved</p>
        </div>

    </div>
</footer>

</html>