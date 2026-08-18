<?php
$pageTitle = 'Home';
include 'components/head.php';
?>
<body>
    <?php include 'components/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center">
        <div id="particles-js" class="particles-background"></div>
        <div class="container position-relative z-1">
            <div class="row align-items-center">
                <div class="col-lg-5 text-center mb-4 mb-lg-0" data-aos="fade-right">
                    <div class="hero-img-wrapper">
                        <img src="img/riza.jpeg" class="hero-img rounded-circle border border-3 border-primary shadow" alt="Foto Riza" style="width: 250px; height: 250px; object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="200">
                    <h1 class="hero-title">
                        <span id="typing-text"></span><span class="typing-cursor">|</span>
                    </h1>
                    <p class="hero-subtitle">Mahasiswa Teknik Informatika</p>
                    
                    <div class="hero-info glassmorphism">
                        <p><i class="bi bi-person-badge"></i> <strong>NIM:</strong> 25112003</p>
                        <p><i class="bi bi-mortarboard"></i> <strong>Program Studi:</strong> Teknik Informatika</p>
                        <p><i class="bi bi-building"></i> <strong>Fakultas:</strong> Ilmu Komputer</p>
                        <p><i class="bi bi-geo-alt"></i> <strong>Perguruan Tinggi:</strong> Universitas Nurdin Hamzah</p>
                    </div>

                    <div class="mt-4 d-flex gap-3 flex-wrap">
                        <a href="tentang.php" class="btn btn-light btn-lg rounded-pill px-4">
                            <i class="bi bi-person me-2"></i>Tentang Saya
                        </a>
                        <a href="kontak.php" class="btn btn-outline-light btn-lg rounded-pill px-4">
                            <i class="bi bi-envelope me-2"></i>Hubungi Saya
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistik Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="0">
                    <div class="stat-card glassmorphism p-4 rounded-4">
                        <i class="bi bi-book fs-1 text-primary mb-2"></i>
                        <h3 class="counter" data-target="2">0</h3>
                        <p class="text-muted">Semester</p>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-card glassmorphism p-4 rounded-4">
                        <i class="bi bi-trophy fs-1 text-success mb-2"></i>
                        <h3 class="counter" data-target="5">0</h3>
                        <p class="text-muted">Organisasi</p>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-card glassmorphism p-4 rounded-4">
                        <i class="bi bi-code-slash fs-1 text-danger mb-2"></i>
                        <h3 class="counter" data-target="10">0</h3>
                        <p class="text-muted">Project</p>
                    </div>
                </div>
                <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-card glassmorphism p-4 rounded-4">
                        <i class="bi bi-heart fs-1 text-warning mb-2"></i>
                        <h3 class="counter" data-target="3">0</h3>
                        <p class="text-muted">Hobi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Preview Tentang -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Tentang Saya</h2>
                <p class="text-muted">Kenali saya lebih dekat</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="fade-up">
                    <div class="card glassmorphism">
                        <div class="card-body p-5">
                            <p class="card-text fs-5 lh-lg">
                                Saya adalah mahasiswa Program Studi Teknik Informatika Semester 2 di Universitas Nurdin Hamzah.
                                Saya memiliki minat yang besar dalam bidang teknologi dan pemrograman,
                                serta bersemangat untuk mengembangkan keterampilan saya di bidang ini.
                            </p>
                            <div class="text-center mt-4">
                                <a href="tentang.php" class="btn btn-primary rounded-pill px-4">
                                    <i class="bi bi-arrow-right me-2"></i>Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Preview Sertifikat -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Portofolio Sertifikat</h2>
                <p class="text-muted">Sertifikat yang sudah saya peroleh</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="card h-100 glassmorphism p-4 text-center">
                        <i class="bi bi-award fs-1 text-primary mb-3"></i>
                        <h5 class="card-title">Sertifikat Pemrograman Dasar</h5>
                        <p class="card-text text-muted">Pelatihan dasar pemrograman dan logika komputer.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 glassmorphism p-4 text-center">
                        <i class="bi bi-patch-check fs-1 text-success mb-3"></i>
                        <h5 class="card-title">Sertifikat Desain Web</h5>
                        <p class="card-text text-muted">Kursus pembuatan website menggunakan HTML, CSS, dan Bootstrap.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 glassmorphism p-4 text-center">
                        <i class="bi bi-file-earmark-medical fs-1 text-warning mb-3"></i>
                        <h5 class="card-title">Sertifikat IT Support</h5>
                        <p class="card-text text-muted">Sertifikat kompetensi dasar teknologi informasi.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4" data-aos="fade-up">
                <a href="sertifikat.php" class="btn btn-primary rounded-pill px-4">
                    <i class="bi bi-arrow-right me-2"></i>Lihat Semua Sertifikat
                </a>
            </div>
        </div>
    </section>

    <!-- Quick Preview Hobi -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="section-title">Hobi Saya</h2>
                <p class="text-muted">Aktivitas yang saya nikmati</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="card h-100 glassmorphism">
                        <img src="img/hobi.jpg.jpeg" class="card-img-top" style="height: 250px; object-fit: cover;" alt="Biliard">
                        <div class="card-body text-center">
                            <h5 class="card-title"><i class="bi bi-circle-fill me-2"></i>Biliard</h5>
                            <p class="card-text">Fokus, strategi, dan kesabaran.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 glassmorphism">
                        <img src="img/gaming.jpg.jpeg" class="card-img-top" style="height: 250px; object-fit: cover;" alt="Gaming">
                        <div class="card-body text-center">
                            <h5 class="card-title"><i class="bi bi-controller me-2"></i>Gaming</h5>
                            <p class="card-text">Game strategi dan aksi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 glassmorphism">
                        <img src="img/membaca buku.jpg.jpeg" class="card-img-top" style="height: 250px; object-fit: cover;" alt="Membaca Buku">
                        <div class="card-body text-center">
                            <h5 class="card-title"><i class="bi bi-book me-2"></i>Membaca Buku</h5>
                            <p class="card-text">Dark Motivations dan lainnya.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4" data-aos="fade-up">
                <a href="hobi.php" class="btn btn-primary rounded-pill px-4">
                    <i class="bi bi-arrow-right me-2"></i>Lihat Semua Hobi
                </a>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>
</body>
</html>

