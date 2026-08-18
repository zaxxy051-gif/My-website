<?php
$pageTitle = 'Sertifikat';
include 'components/head.php';
?>
<body>
    <?php include 'components/navbar.php'; ?>

    <!-- Header Halaman -->
    <section class="page-header">
        <div class="container text-center">
            <h1 class="page-title" data-aos="fade-up">Sertifikat Saya</h1>
            <p class="page-subtitle" data-aos="fade-up" data-aos-delay="100">Portofolio sertifikat yang pernah saya raih</p>
        </div>
    </section>

    <!-- Konten Sertifikat -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="0">
                    <div class="card glassmorphism h-100">
                        <img src="img/sertifikat-webinar.jpg" class="card-img-top rounded-4" style="height: 280px; object-fit: cover;" alt="Sertifikat Webinar Cyber Hygiene">
                        <div class="card-body p-5">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div>
                                    <h4 class="mb-1">Webinar Cyber Hygiene</h4>
                                    <small class="text-muted">Diterbitkan oleh <strong>Webinar ICT</strong></small>
                                </div>
                                <span class="badge bg-primary">2025</span>
                            </div>
                            <p class="card-text fs-5 lh-lg">
                                Sertifikat ini menunjukkan partisipasi saya dalam webinar tentang keamanan siber.
                                Saya belajar praktik keamanan digital sehari-hari yang penting untuk menjaga data pribadi dan perangkat.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card glassmorphism h-100">
                        <img src="img/sertifikat-lsp.jpeg" class="card-img-top rounded-4" style="height: 280px; object-fit: cover;" alt="Sertifikat LSP">
                        <div class="card-body p-5">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div>
                                    <h4 class="mb-1">Sertifikat LSP</h4>
                                    <small class="text-muted">Diterbitkan oleh <strong>LSP</strong></small>
                                </div>
                                <span class="badge bg-success">2024</span>
                            </div>
                            <p class="card-text fs-5 lh-lg">
                                Sertifikat ini membuktikan kompetensi saya di bidang IT sesuai standar LSP.
                                Saya memperoleh pengalaman dalam proses uji kompetensi dan kelayakan sertifikasi.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card glassmorphism h-100">
                        <img src="img/sertifikat-tular-nalar.jpeg" class="card-img-top rounded-4" style="height: 280px; object-fit: cover;" alt="Sertifikat Tular Nalar">
                        <div class="card-body p-5">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div>
                                    <h4 class="mb-1">Sertifikat Tular Nalar</h4>
                                    <small class="text-muted">Diterbitkan oleh <strong>Tular Nalar</strong></small>
                                </div>
                                <span class="badge bg-warning">2024</span>
                            </div>
                            <p class="card-text fs-5 lh-lg">
                                Sertifikat ini menunjukkan keikutsertaan saya dalam program pembelajaran kritis dan penalaran.
                                Saya belajar teknik berpikir analitis yang baik untuk pengembangan diri dan studi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="400">
                <a href="index.php" class="btn btn-outline-primary rounded-pill px-4">
                    <i class="bi bi-arrow-left me-2"></i>Kembali ke Beranda
                </a>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>
</body>
</html>
