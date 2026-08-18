<?php
$pageTitle = 'Hobi';
include 'components/head.php';
?>
<body>
    <?php include 'components/navbar.php'; ?>

    <!-- Header Halaman -->
    <section class="page-header">
        <div class="container text-center">
            <h1 class="page-title" data-aos="fade-up">Hobi Saya</h1>
            <p class="page-subtitle" data-aos="fade-up" data-aos-delay="100">Aktivitas yang mengisi waktu luang saya</p>
        </div>
    </section>

    <!-- Konten Hobi -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <!-- Hobi 1: Biliard -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                    <div class="card h-100 hobby-card glassmorphism">
                        <div class="hobby-img-wrapper">
                            <img src="img/hobi.jpg.jpeg" class="card-img-top" style="height: 350px; object-fit: cover;" alt="Biliard">
                            <div class="hobby-overlay">
                                <i class="bi bi-circle-fill display-1 text-white"></i>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title"><i class="bi bi-circle-fill me-2"></i>Biliard</h5>
                            <p class="card-text">
                                Di biliar, kamu lawan diri sendiri dulu sebelum lawan orang lain.
                                Biliar mengajarkan saya tentang fokus, strategi, dan kesabaran.
                                Dan juga bisa jadi ajang bersosialisasi dengan teman-teman.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Hobi 2: Gaming -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 hobby-card glassmorphism">
                        <div class="hobby-img-wrapper">
                            <img src="img/gaming.jpg.jpeg" class="card-img-top" style="height: 350px; object-fit: cover;" alt="Gaming">
                            <div class="hobby-overlay">
                                <i class="bi bi-controller display-1 text-white"></i>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title"><i class="bi bi-controller me-2"></i>Gaming</h5>
                            <p class="card-text">
                                Gaming adalah hobi yang saya senangi. Suka bermain game strategi dan aksi.
                                Saya bermain suatu game mobil drifting yang bernama Racing Master.
                                Game ini sangat seru dan menantang, saya suka dengan mekanisme driftingnya yang realistis dan grafisnya yang memukau.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Hobi 3: Membaca Buku -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 hobby-card glassmorphism">
                        <div class="hobby-img-wrapper">
                            <img src="img/membaca buku.jpg.jpeg" class="card-img-top" style="height: 350px; object-fit: cover;" alt="Membaca Buku">
                            <div class="hobby-overlay">
                                <i class="bi bi-book display-1 text-white"></i>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title"><i class="bi bi-book me-2"></i>Membaca Buku</h5>
                            <p class="card-text">
                                Membaca buku adalah hobi yang saya senangi. Saya sedang membaca buku <strong>Dark Motivations</strong>.
                                Buku ini membahas tentang motivasi yang berasal dari sisi gelap manusia,
                                seperti ambisi, ketakutan, dan keinginan tersembunyi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>
</body>
</html>

