<?php
session_start();

// Proteksi halaman: Wajib login terlebih dahulu
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$pengajuan_berhasil = false;
$nomor_antrean = "";
$jenis_layanan_terpilih = "";

// Proses Pengajuan Form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jenis_layanan_terpilih = $_POST['jenis_layanan'] ?? '';
    $nama_pemohon = $_POST['nama_pemohon'] ?? '';
    $nik = $_POST['nik'] ?? '';

    // Generasi nomor antrean acak berdasarkan jenis layanan
    $prefix = "";
    if ($jenis_layanan_terpilih == "Pembuatan KTP") {
        $prefix = "KTP";
    } elseif ($jenis_layanan_terpilih == "Pembuatan KK") {
        $prefix = "KK";
    } elseif ($jenis_layanan_terpilih == "Pembuatan Surat Keterangan") {
        $prefix = "SK";
    } else {
        $prefix = "LYN";
    }

    $nomor_antrean = $prefix . "-" . rand(100, 999);
    $pengajuan_berhasil = true;
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Publik - Kelurahan Benteng</title>

    <!-- Bootstrap CSS & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Favicon -->
    <link rel="icon" href="l/l3.jpeg">

    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f8f9fa;
        }

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

        .form-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            background-color: #ffffff;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #198754;
            box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
        }

        .btn-submit-custom {
            background-color: #198754;
            color: #fff;
            font-weight: 600;
            padding: 12px;
            border: none;
            transition: background-color 0.2s;
        }

        .btn-submit-custom:hover {
            background-color: #146c43;
            color: #fff;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
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
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">INFORMASI</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="visi.php">Visi-Misi</a></li>
                            <li><a class="dropdown-item" href="berita.php">Berita</a></li>
                            <li><a class="dropdown-item" href="galeri.php">Galeri</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/webkelurahan/logout.php">LOGOUT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header Banner -->
    <div style="background-color: #A8D5BA;" class="text-center py-4">
        <div class="container">
            <h1 class="fw-bold">LAYANAN PUBLIK</h1>
            <p class="mb-0">
                Melayani administrasi masyarakat secara cepat, mudah, dan transparan.
            </p>
        </div>
    </div>

    <!-- Main Content Form Layanan -->
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="card form-card p-4 p-md-5">
                    <h3 class="fw-bold text-success text-center mb-2">Form Pengajuan Layanan</h3>
                    <p class="text-muted text-center mb-4">Silakan isi data diri dan unggah berkas persyaratan pengajuan Anda di bawah ini.</p>

                    <!-- Informasi Nomor Antrean Setelah Submit -->
                    <?php if ($pengajuan_berhasil): ?>
                        <div class="alert alert-success border-success text-center py-4 mb-4" role="alert">
                            <i class="bi bi-check-circle-fill text-success" style="font-size: 3rem;"></i>
                            <h4 class="fw-bold mt-2 mb-1">Berkas Dikirim!</h4>
                            <p class="mb-3 text-secondary">Pengajuan Anda untuk <strong><?php echo htmlspecialchars($jenis_layanan_terpilih); ?></strong> telah berhasil diproses.</p>

                            <div class="d-inline-block bg-white p-3 rounded-3 border border-success">
                                <span class="d-block small text-muted">Nomor Antrean Anda:</span>
                                <span class="display-5 fw-bold text-success"><?php echo $nomor_antrean; ?></span>
                            </div>
                            <p class="small text-muted mt-3 mb-0">Tunjukkan atau simpan nomor antrean ini untuk verifikasi di Kantor Kelurahan Benteng.</p>
                        </div>
                    <?php endif; ?>

                    <!-- Form Pengajuan -->
                    <form action="" method="POST" enctype="multipart/form-data">

                        <!-- Select Jenis Layanan -->
                        <div class="mb-3">
                            <label for="jenis_layanan" class="form-label fw-semibold">Pilih Jenis Layanan <span class="text-danger">*</span></label>
                            <select class="form-select" id="jenis_layanan" name="jenis_layanan" required>
                                <option value="" selected disabled>-- Pilih jenis layanan --</option>
                                <option value="Pembuatan KTP" <?php echo (isset($_GET['jenis']) && $_GET['jenis'] == 'ktp') ? 'selected' : ''; ?>>Pembuatan KTP</option>
                                <option value="Pembuatan KK" <?php echo (isset($_GET['jenis']) && $_GET['jenis'] == 'kk') ? 'selected' : ''; ?>>Pembuatan KK</option>
                                <option value="Pembuatan Surat Keterangan" <?php echo (isset($_GET['jenis']) && $_GET['jenis'] == 'suket') ? 'selected' : ''; ?>>Pembuatan Surat Keterangan</option>
                            </select>
                        </div>

                        <!-- Data Diri Pemohon -->
                        <div class="mb-3">
                            <label for="nama_pemohon" class="form-label fw-semibold">Nama Lengkap Pemohon <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" placeholder="Masukkan nama lengkap sesuai KTP" required>
                        </div>

                        <div class="mb-3">
                            <label for="nik" class="form-label fw-semibold">Nomor Induk Kependudukan (NIK) <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="nik" name="nik" placeholder="Masukkan 16 digit NIK" required>
                        </div>

                        <!-- Upload Berkas -->
                        <div class="mb-4">
                            <label for="berkas" class="form-label fw-semibold">Unggah Berkas Persyaratan (PDF/JPG/PNG) <span class="text-danger">*</span></label>
                            <input class="form-control" type="file" id="berkas" name="berkas" accept=".pdf,.jpg,.jpeg,.png" required>
                            <div class="form-text">Unggah berkas persyaratan (seperti Surat Pengantar RT/RW, foto KTP/KK lama). Maksimal 5 MB.</div>
                        </div>

                        <!-- Tombol Submit Pengajuan -->
                        <button type="submit" class="btn btn-submit-custom w-100 rounded-3">
                            <i class="bi bi-send-fill me-2"></i>SUBMIT PENGAJUAN
                        </button>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-success text-white pt-5 pb-3 mt-auto">
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
</body>

</html>