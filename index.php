<?php
require_once 'database/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="237006073\style.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="Screenshot_1.png" alt="" height="50px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#why-me">Why Me?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimony">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./blog.html" onclick="window.open(this.href, '_blank'); return false;">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Isi -->
    <div class="isi-beranda text-center py-5">
        <img src="kevin buled.png" alt="" height="200px" class="rounded-circle mb-3">
        <h1>Kevin Ibrahimovic</h1>
        <div class="keahlian">
            <hr>
            <h2>Keahlian</h2>
            <a href="#" class="btn btn-outline-primary rounded-pill">Web Developer</a>
            <a href="#" class="btn btn-outline-primary rounded-pill">Software Engineer</a>
            <a href="#" class="btn btn-outline-primary rounded-pill">Cyber Security</a>
            <a href="#" class="btn btn-outline-primary rounded-pill">UI/UX</a>
        </div>
    </div>
    <!-- Isi -->

    <!-- Tentang Saya -->
    <div id="tentang" class="container my-5">
        <div class="card">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="Kevin 1.jpg" class="img-fluid rounded-start" alt="Kevin Ibrahimovic">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Tentang Saya</h5>
                        <p class="card-text">
                            Saya adalah seorang Web Developer dengan pengalaman dalam membangun website yang responsif, cepat, dan user-friendly. Dengan keahlian dalam HTML, CSS, JavaScript, dan framework seperti React dan Vue, saya memiliki kemampuan untuk mengubah ide menjadi solusi digital yang fungsional dan menarik.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tentang Saya -->

    <!-- Skills -->
    <div id="skills" class="container my-5">
        <h2 class="text-center mb-4">Technical Skills</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="skill-item mb-4">
                    <div class="d-flex justify-content-between">
                        <h5>HTML/CSS</h5>
                        <span>95%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 95%"></div>
                    </div>
                </div>
                <div class="skill-item mb-4">
                    <div class="d-flex justify-content-between">
                        <h5>JavaScript</h5>
                        <span>85%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 85%"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="skill-item mb-4">
                    <div class="d-flex justify-content-between">
                        <h5>PHP</h5>
                        <span>80%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 80%"></div>
                    </div>
                </div>
                <div class="skill-item mb-4">
                    <div class="d-flex justify-content-between">
                        <h5>Cyber Security</h5>
                        <span>90%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 90%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Skills -->

    <!-- Why Me? -->
    <div id="why-me" class="knp-saya">
        <h1>Why Me?</h1>
        <hr>

        <p class="1">
            💡 Solusi Inovatif & Kreatif Saya tidak hanya membuat website, tetapi juga menghadirkan solusi yang inovatif dan sesuai dengan kebutuhan bisnis Anda. Setiap proyek dikerjakan dengan pendekatan yang kreatif dan strategis agar hasilnya maksimal.
        </p>

        <p class="2">
            ⚡ Keahlian & PengalamanDengan pengalaman di bidang Frontend & Backend Development, saya menguasai berbagai teknologi seperti React, Vue, Node.js, Laravel, dan lainnya untuk membangun website yang modern, cepat, dan responsif.
        </p>

        <p class="3">
            🎯 Fokus pada Kualitas & PerformaWebsite yang saya buat tidak hanya tampak menarik, tetapi juga cepat, aman, dan SEO-friendly, sehingga dapat meningkatkan visibilitas dan kinerja bisnis Anda secara online.
        </p>

        <hr>
    </div>
    <!-- Why Me? -->

    <!-- Projects -->
    <div id="projects" class="container my-5">
        <h2 class="text-center mb-4">Latest Projects</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card project-card h-100">
                    <img src="project1.jpg" class="card-img-top" alt="Project 1">
                    <div class="card-body">
                        <h5 class="card-title">E-Commerce Platform</h5>
                        <p class="card-text">A full-stack e-commerce solution with secure payment integration.</p>
                        <div class="tech-stack">
                            <span class="badge bg-primary">PHP</span>
                            <span class="badge bg-success">MySQL</span>
                            <span class="badge bg-info">JavaScript</span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-outline-primary btn-sm">View Project</a>
                    </div>
                </div>
            </div>
            <!-- Add more project cards as needed -->
        </div>
    </div>
    <!-- Projects -->

    <!-- Testimoni -->
    <div id="testimony" class="container my-5">
        <h2 class="text-center">Testimoni</h2>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Aruna_Asian_man_in_suit_posing_for_a_formal_photo_with_straight_b39d3ce1-e8c6-4664-a7bd-b4818badee83.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p>⭐ "Sangat puas dengan hasil kerja yang profesional! Highly recommended!" 📌 - Andi</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="foto-formal.width-800.format-webp.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p>⭐ "Luar biasa! Website yang dibangun sangat fungsional dan user-friendly." 📌 - Maya</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="istockphoto-940171136-612x612-1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p>⭐ "Proses pengerjaan sangat cepat dan hasilnya sesuai ekspektasi." 📌 - Rudi</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Testimoni -->

    <!-- Formulir Kontak -->
    <div id="kontak" class="container my-5">
        <h2 class="text-center">Kontak Saya</h2>
        <?php
        if (isset($_GET['status'])) {
            if ($_GET['status'] == 'success') {
                echo '<div class="alert alert-success">Pesan berhasil dikirim!</div>';
            } else {
                echo '<div class="alert alert-danger">Gagal mengirim pesan. ' . 
                     (isset($_GET['message']) ? htmlspecialchars($_GET['message']) : '') . '</div>';
            }
        }
        ?>
        <form method="POST" action="process_form.php">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Nomor Handphone</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Pesan</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
    <!-- Formulir Kontak -->

    <hr>
    <div class="footer">
        <img src="Screenshot_1.png" alt="" height="50px">
        <h3>💻 Dibangun dengan Passion, Kreativitas, & Teknologi</h3>
        <h3>🚀 Siap membawa bisnis Anda ke level berikutnya dengan website yang cepat, modern, dan responsif.</h3>
        <div class="about">
            <h3>About</h3>
            <p>📩 Hubungi Saya: 085320520632 📧 Email: [237006073@student.unsil.ac.id]</p>
        </div>
        <div class="social">
            <h3>Social</h3>
            <p>IG: Kvin.ibra | FB: Kvin.ibra | X: Kvin.ibra</p>
        </div>
    </div>
    <div class="footer-2"></div>
        <h3>&copy; 2025 Kevin Ibrahimovic | Cyber Security</h3>
    </div>

    <!-- jQuery first -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Your custom scripts last -->
    <script src="script.js"></script>
</body>

</html>