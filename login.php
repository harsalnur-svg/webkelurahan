<?php
session_start();

// Jika sudah login, langsung redirect ke beranda
if (isset($_SESSION['user'])) {
    header("Location: beranda.php");
    exit();
}

$error_msg = "";

// Proses validasi saat form di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    // Cek Akun User Biasa
    if ($username === "harsal" && $password === "harsal16") {
        $_SESSION['user'] = $username;
        $_SESSION['role'] = "user";
        header("Location: beranda.php");
        exit();
    }
    // Cek Akun Admin
    elseif ($username === "admin" && $password === "admin123") {
        $_SESSION['user'] = $username;
        $_SESSION['role'] = "admin";
        header("Location: beranda.php");
        exit();
    }
    // Jika Login Gagal
    else {
        $error_msg = "Username atau kata sandi salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Kelurahan Benteng</title>

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
            background-color: #f4f6f9;
        }

        .login-container {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 15px;
        }

        .login-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
            max-width: 420px;
            width: 100%;
            background-color: #ffffff;
            overflow: hidden;
        }

        .login-header {
            background-color: #198754;
            color: #ffffff;
            padding: 25px 20px;
            text-align: center;
        }

        .login-header img {
            height: 65px;
            margin-bottom: 10px;
        }

        .form-control:focus {
            border-color: #198754;
            box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
        }

        .btn-success-custom {
            background-color: #198754;
            border: none;
            padding: 10px;
            font-weight: 600;
            transition: background-color 0.2s;
        }

        .btn-success-custom:hover {
            background-color: #146c43;
        }
    </style>
</head>

<body>

    <!-- Navbar Sederhana -->
    <nav class="navbar navbar-expand-lg bg-success navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="benteng.png" alt="Logo Kelurahan" style="height:60px;">
            </a>
        </div>
    </nav>

    <!-- Form Login Area -->
    <div class="login-container">
        <div class="card login-card">
            <div class="login-header">
                <img src="benteng.png" alt="Logo Kelurahan Benteng">
                <h5 class="fw-bold mb-0">SISTEM INFORMASI</h5>
                <small class="text-white-50">Kelurahan Benteng</small>
            </div>
            <div class="card-body p-4">
                <h5 class="card-title text-center fw-bold mb-4 text-secondary">Masuk ke Akun Anda</h5>

                <!-- Peringatan Jika Login Gagal -->
                <?php if (!empty($error_msg)): ?>
                    <div class="alert alert-danger alert-dismissible fade show text-center py-2" role="alert">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i><?php echo $error_msg; ?>
                        <button type="button" class="btn-close py-2" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <form action="" method="POST">
                    <!-- Username Input -->
                    <div class="mb-3">
                        <label for="username" class="form-label text-muted small fw-semibold">Username / NIK / Email</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light text-secondary"><i class="bi bi-person-fill"></i></span>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan ID pengguna" required>
                        </div>
                    </div>

                    <!-- Password Input -->
                    <div class="mb-3">
                        <label for="password" class="form-label text-muted small fw-semibold">Kata Sandi</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light text-secondary"><i class="bi bi-lock-fill"></i></span>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan kata sandi" required>
                        </div>
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="rememberMe" name="remember">
                            <label class="form-check-label small text-muted" for="rememberMe">Ingat saya</label>
                        </div>
                        <a href="#" class="small text-success text-decoration-none fw-semibold">Lupa Kata Sandi?</a>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-success-custom text-white w-100 rounded-3">MASUK</button>
                </form>
            </div>
            <div class="card-footer bg-light text-center py-3 border-0">
                <small class="text-muted">Belum punya akun? <a href="register.php" class="text-success text-decoration-none fw-bold">Daftar Sekarang</a></small>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-success text-white pt-5 pb-3 mt-auto">
        <div class="container">
            <div class="row g-4 text-md-start text-center">

                <div class="col-12 col-md-3 d-flex flex-column align-items-center justify-content-center">
                    <img src="icon.png" alt="Logo Footer" class="me-3" style="height: 40px !important; width: auto !important; transform: scale(4.5); object-fit: contain;">
                </div>

                <div class="col-12 col-sm-6 col-md-4">
                    <h5 class="fw-bold mb-3 border-bottom border-2 pb-2 d-inline-block">Alamat</h5>
                    <ul class="list-unstyled lh-lg" style="font-size: 0.95rem;">
                        <li><i class="bi bi-geo-alt-fill text-warning me-2"></i> Jl. S.Siswomiharjo No. 48</li>
                        <li><i class="bi bi-building text-warning me-2"></i> Kecamatan Benteng, Kab. Kep. Selayar</li>
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
                <p class="mb-1">&copy; <strong>Kelurahan Benteng</strong> 2026. All Rights Reserved</p>
            </div>
        </div>
    </footer>

</body>

</html>