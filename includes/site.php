<?php
if (!function_exists('site_h')) {
    function site_h($value)
    {
        return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
    }
}

if (!function_exists('site_current_page')) {
    function site_current_page()
    {
        return basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
    }
}

if (!function_exists('site_is_page')) {
    function site_is_page($page)
    {
        return site_current_page() === $page;
    }
}

if (!function_exists('site_cv_theme_class')) {
    function site_cv_theme_class()
    {
        $themes = [
            'dina.php' => 'cv-theme-unj',
            'male.php' => 'cv-theme-ui',
            'muti.php' => 'cv-theme-ub',
            'faadhil.php' => 'cv-theme-ugm',
            'denis.php' => 'cv-theme-ipb',
            'rama.php' => 'cv-theme-itb',
        ];

        return $themes[site_current_page()] ?? 'cv-theme-itb';
    }
}

$siteCvPages = [
    ['href' => 'dina.php', 'label' => 'Dina'],
    ['href' => 'male.php', 'label' => 'Male'],
    ['href' => 'muti.php', 'label' => 'Muti'],
    ['href' => 'faadhil.php', 'label' => 'Faadhil'],
    ['href' => 'denis.php', 'label' => 'Denis'],
    ['href' => 'rama.php', 'label' => 'Rama'],
];

$siteMainNav = [
    ['href' => 'index.php', 'label' => 'Beranda'],
    ['href' => 'form.php', 'label' => 'Form Pendaftaran'],
    ['href' => 'data.php', 'label' => 'Data Pendaftar'],
];
?>
