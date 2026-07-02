<?php include 'header.php'; ?>

<main id="home" style="height: 100vh; position: relative; overflow: hidden; display: flex; flex-direction: column; justify-content: center;">
    
    <div class="background-ocean"></div>

    <div class="container text-center text-white z-10 fade-in-up-home">
        
        <h1 class="logo-title text-uppercase">PORTO<span class="text-italic" style="text-transform: none;">Folio</span></h1>
        
        <div class="profile-info mt-4">
            <h2 class="name font-weight-bold">DINA NABILA SARI - 2036221078</h2>
            <p class="prodi mt-2" style="font-size: 1.1rem; letter-spacing: 2px;">D4-TEKNOLOGI REKAYASA KONSTRUKSI BANGUNAN AIR</p>
        </div>

        <div class="sub-nav mt-5">
            <a href="introduction.php" class="btn-outlined">INTRODUCTION</a>
            <a href="skills.php" class="btn-outlined">SKILLS</a>
            <a href="projects.php" class="btn-outlined">PROJECTS</a>
            <a href="contact.php" class="btn-outlined">CONTACT</a>
        </div>

        <div class="mt-5 pt-3">
            <p class="mb-3" style="letter-spacing: 3px; font-size: 1rem; font-weight: 500;">LET'S PRESENT</p>
            <div class="present-arrow bounce-down">
               <i class="fas fa-chevron-down"></i>
            </div>
        </div>
    </div>

    <a href="introduction.php" class="nav-arrow right-arrow fixed-arrow"><i class="fas fa-arrow-right"></i></a>

    <div class="ocean-waves">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
        </svg>
    </div>

</main>

<?php include 'footer.php'; ?>