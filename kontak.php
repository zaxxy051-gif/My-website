<?php
$pageTitle = 'Kontak';
include 'components/head.php';
?>
<body>
    <?php include 'components/navbar.php'; ?>

    <!-- Header Halaman -->
    <section class="page-header">
        <div class="container text-center">
            <h1 class="page-title" data-aos="fade-up">Kontak</h1>
            <p class="page-subtitle" data-aos="fade-up" data-aos-delay="100">Silakan hubungi saya melalui form di bawah ini</p>
        </div>
    </section>

    <!-- Form Kontak -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <div class="card glassmorphism">
                        <div class="card-body p-5">
                            <form class="contact-form" id="contactForm">
                                <div class="mb-3">
                                    <label for="nama" class="form-label fw-bold">
                                        <i class="bi bi-person me-2"></i>Nama Lengkap
                                    </label>
                                    <input type="text" class="form-control" id="nama" 
                                           placeholder="Masukkan nama Anda" required>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label fw-bold">
                                        <i class="bi bi-envelope me-2"></i>Email
                                    </label>
                                    <input type="email" class="form-control" id="email" 
                                           placeholder="Masukkan email Anda" required>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="telepon" class="form-label fw-bold">
                                        <i class="bi bi-telephone me-2"></i>No. Telepon
                                    </label>
                                    <input type="tel" class="form-control" id="telepon" 
                                           placeholder="Contoh: 0812-3456-7890">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="subjek" class="form-label fw-bold">
                                        <i class="bi bi-tag me-2"></i>Subjek
                                    </label>
                                    <input type="text" class="form-control" id="subjek" 
                                           placeholder="Subjek pesan" required>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="mb-4">
                                    <label for="pesan" class="form-label fw-bold">
                                        <i class="bi bi-chat-dots me-2"></i>Pesan
                                    </label>
                                    <textarea class="form-control" id="pesan" rows="5" 
                                              placeholder="Tulis pesan Anda di sini..." required></textarea>
                                    <div class="invalid-feedback"></div>
                                    <small class="text-muted float-end" id="charCount">0 / 500 karakter</small>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-lg" id="submitBtn">
                                        <i class="bi bi-send me-2"></i>Kirim Pesan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>
</body>
</html>

