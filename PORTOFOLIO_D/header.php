<?php
// Script deteksi halaman
$currentPage = basename($_SERVER['PHP_SELF']);
$pageName = '';

switch ($currentPage) {
    case 'introduction.php':
        $pageName = 'INTRODUCTION';
        break;
    case 'skills.php':
        $pageName = 'SKILLS';
        break;
    case 'projects.php':
        $pageName = 'PROJECTS';
        break;
    case 'contact.php':
        $pageName = 'CONTACT';
        break;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - DINA NABILA SARI</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css?v=4">
</head>
<body>

<header>
    <div class="container d-flex justify-content-between align-items-center relative">
        <div class="left-nav z-10">
            <a href="index.php" class="nav-item">Home</a>
        </div>
        
        <div class="logo text-center z-10" style="display: flex; flex-direction: column; align-items: center;">
            <img src="assets/img/logo_its.png" alt="Logo ITS" class="logo-img">
            
            <?php if($pageName != ''): ?>
                <div class="header-page-title">
                    <span class="title-text"><?= $pageName ?></span>
                    <div class="title-line"></div>
                </div>
            <?php endif; ?>
        </div>

        <div class="right-nav z-10">
            <a href="contact.php" class="nav-item">Contact</a>
        </div>
    </div>
</header>