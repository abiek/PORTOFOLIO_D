<?php include 'header.php'; ?>

<main>
    <div class="background-ocean"></div>

    <a href="index.php" class="nav-arrow left-arrow fixed-arrow"><i class="fas fa-arrow-left"></i></a>
    <a href="skills.php" class="nav-arrow right-arrow fixed-arrow"><i class="fas fa-arrow-right"></i></a>

    <div class="container intro-container super-padd">
        
        <section class="intro-top d-flex justify-content-between align-items-center">
            <div class="intro-text text-white fade-in-up">
                <h1 class="font-weight-bold">Dina Nabila<br>Sari</h1>
                <p class="mt-4">Seorang Mahasiswi Semester 8 - Teknik<br>Infrastruktur Sipil di Institut Teknologi<br>Sepuluh Nopember Surabaya.</p>
            </div>
            <div class="intro-photo fade-in-up delay-2">
                <div class="photo-frame-new">
                    <img src="assets/img/foto_profil.jpeg" alt="Foto Profil Dina">
                </div>
            </div>
        </section>

        <section class="intro-middle text-center">
            <h2 class="font-weight-bold mb-5 text-white fade-in-up">Dina Nabila Sari</h2>
            <div class="kelebihan-wrapper d-flex justify-content-between">
                
                <div class="kelebihan-card glass-card text-white relative pop-up-anim">
                    <h4 class="font-weight-bold mb-3">Kelebihan</h4>
                    <p>Dapat bekerja sama dalam tim.</p>
                    <img src="assets/img/auutolevel_1.png" alt="Alat Kuning" class="tool-deco tool-1-new jumps-kuning">
                </div>
                
                <div class="kelebihan-card glass-card text-white relative pop-up-anim delay-2">
                    <h4 class="font-weight-bold mb-3">Kelebihan</h4>
                    <p>Mampu berbicara di depan umum dengan cukup.</p>
                    <img src="assets/img/autolevel_2.png" alt="Alat Oranye" class="tool-deco tool-2-new jumps-oranye">
                </div>
                
                <div class="kelebihan-card glass-card text-white pop-up-anim delay-3">
                    <h4 class="font-weight-bold mb-3">Kelebihan</h4>
                    <p>Memiliki kemampuan untuk memecahkan masalah teknis.</p>
                </div>

            </div>
        </section>

        <section class="intro-bottom text-center relative fade-in-up">
            <h2 class="font-weight-bold text-white mb-4">CV Saya</h2>
            
            <div class="cv-container glass-card">
                <iframe src="assets/CV-Dina.pdf" width="100%" height="600px" style="border: none; border-radius: 10px;"></iframe>
                
                <div class="mt-4">
                    <a href="assets/CV-Dina.pdf" download="CV_Dina_Nabila_Sari.pdf" class="btn-download">
                        <i class="fas fa-download mr-2"></i> Download CV
                    </a>
                </div>
            </div>

            <img src="assets/img/rtk_gnss.png" class="tool-deco tool-bottom-left-new tool-swing-1">
            <img src="assets/img/TS_3.png" class="tool-deco tool-bottom-right-new tool-swing-2">
        </section>

    </div>
</main>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                // Jika elemen masuk ke dalam layar
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.15 }); // Animasi mulai saat 15% elemen terlihat

        // Pantau semua kotak kelebihan
        document.querySelectorAll('.pop-up-anim').forEach(box => {
            observer.observe(box);
        });
        
        // Pantau teks utama
        document.querySelectorAll('.fade-in-up').forEach(text => {
            observer.observe(text);
        });
    });
</script>

<?php include 'footer.php'; ?>