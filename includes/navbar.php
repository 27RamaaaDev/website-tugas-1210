<?php
require_once __DIR__ . '/site.php';

$isCvPage = in_array(site_current_page(), array_column($siteCvPages, 'href'), true);
?>
<!-- Topbar Start -->
<div class="container-fluid bg-light p-0">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                <small>Jl. Ganesha No.10, Bandung</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-phone-alt text-primary me-2"></small>
                <small>022-2500935</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-clock text-primary me-2"></small>
                <small id="tanggalwaktu"></small>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img src="images/logoitb.png" alt="Logo ITB" style="height: 60px; margin-right: 15px;">
        <div class="brand-copy"><span>Institut Teknologi Bandung</span><small>Bismillah PTN</small></div>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Buka menu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0 pe-lg-5">
            <?php foreach ($siteMainNav as $item): ?>
                <a href="<?= site_h($item['href']) ?>" class="nav-item nav-link<?= site_is_page($item['href']) ? ' active' : '' ?>">
                    <?= site_h($item['label']) ?>
                </a>
            <?php endforeach; ?>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle<?= $isCvPage ? ' active' : '' ?>" data-bs-toggle="dropdown" aria-expanded="false">CV</a>
                <div class="dropdown-menu m-0">
                    <?php foreach ($siteCvPages as $item): ?>
                        <a href="<?= site_h($item['href']) ?>" class="dropdown-item<?= site_is_page($item['href']) ? ' active' : '' ?>">
                            <?= site_h($item['label']) ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->
