<?php
require_once __DIR__ . '/site.php';

$showMusicPlayer = $showMusicPlayer ?? false;
?>
<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-3">Institut Teknologi Bandung</h4>
                <p>Menciptakan, berbagi, dan menerapkan ilmu pengetahuan, teknologi, seni dan humaniora serta menghasilkan sumber daya manusia yang unggul.</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/@restuputraramadhan" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/backend.ramaa" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.tiktok.com/@27.1nonlyramaaaaa" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/in/restu-putra-ramadhan-6446b9358/" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://github.com/27RamaaaDev" aria-label="GitHub"><i class="fab fa-github"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-3">Menu Cepat</h4>
                <a class="footer-link" href="index.php">Beranda</a>
                <a class="footer-link" href="rama.php">CV</a>
                <a class="footer-link" href="form.php">Form Pendaftaran</a>
                <a class="footer-link" href="data.php">Data Pendaftar</a>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-white mb-3">Kontak Kami</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Ganesha No.10, Bandung, Indonesia</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>022-2500935</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@itb.ac.id</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    Copyright &copy; 2026 <a class="border-bottom" href="index.php">Restu Putra Ramadhan</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="index.php">Beranda</a>
                        <a href="form.php">Pendaftaran</a>
                        <a href="data.php">Data</a>
                        <a href="rama.php">CV</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if ($showMusicPlayer): ?>
<div class="music-player-bar" aria-label="Pemutar musik">
    <div class="player-inner">
        <div class="player-left">
            <div class="player-album-art">
                <img src="images/apakek.png" alt="Sampul lagu JJ PTN" loading="lazy" decoding="async">
            </div>
            <div class="player-track-info">
                <h6>JJ PTN</h6>
                <small>SIAPAKEK</small>
            </div>
        </div>
        <div class="player-controls">
            <button class="btn-control" type="button" aria-label="Lagu sebelumnya"><i class="fa fa-step-backward"></i></button>
            <button class="btn-play" id="btnPlay" type="button" onclick="toggleMusic()" aria-label="Putar atau jeda musik">
                <i class="fa fa-play" id="playIcon"></i>
            </button>
            <button class="btn-control" type="button" aria-label="Lagu berikutnya"><i class="fa fa-step-forward"></i></button>
        </div>
        <div class="player-progress">
            <span id="currentTime" class="time-text">0:00</span>
            <div class="progress-bar-bg" role="progressbar" aria-label="Progress musik">
                <div class="progress-bar-fill" id="progressBar"></div>
            </div>
            <span id="duration" class="time-text">0:00</span>
        </div>
    </div>
    <audio id="audioPlayer" src="sudahbiasaterjadi.mp3" preload="metadata"></audio>
</div>
<?php endif; ?>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" aria-label="Kembali ke atas"><i class="bi bi-arrow-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>
</html>
