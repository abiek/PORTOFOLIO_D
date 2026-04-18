<?php 
include 'header.php'; 

$projects = [
    ['judul' => 'Pintu Air', 'kategori' => 'PERANCANGAN DRAINASE', 'file_pdf' => 'Portofolio_Pintu Air.pdf'],
    ['judul' => 'Portofolio Muka Air Normal (MAN)', 'kategori' => 'PERANCANGAN DRAINASE', 'file_pdf' => 'Portofolio_MAN.pdf'],
    ['judul' => 'Portofolio Muka Air Banjir (MAB)', 'kategori' => 'PERANCANGAN DRAINASE', 'file_pdf' => 'Portofolio_MAB.pdf'],
    ['judul' => 'Tubes Irigasi', 'kategori' => 'SALURAN PEMBAWA', 'file_pdf' => 'TUBES IRIGASI-peta 2024_BACK UP_8.pdf'],
    ['judul' => 'Tubes Irigasi', 'kategori' => 'BANGUNAN TERJUN SALURAN', 'file_pdf' => 'TUBES IRIGASI-peta 2024_BACK UP_10.pdf'],
    ['judul' => 'Perencanaan Jetty', 'kategori' => 'PETA PERENCANAAN JETTY MUARA SUNGAI TOR SARMI PAPUA', 'file_pdf' => 'PERENCANAAN JETTY.pdf'],
    ['judul' => 'Stasiun Hujan', 'kategori' => 'PETA STASIUN HUJAN DAERAH CILACAP', 'file_pdf' => 'Tugas2_stasiun_hujan.pdf'],
    ['judul' => 'Bendungan', 'kategori' => 'BENDUNGAN FLOWNET RSBA-1', 'file_pdf' => 'BENDUNGAN_FLOWNET_RSBA-1.pdf'],
    ['judul' => 'Stabilitas Lereng', 'kategori' => 'BENDUNGAN FLOWNET RSBA-2', 'file_pdf' => 'BENDUNGAN_FLOWNET_RSBA-2.pdf'],
    ['judul' => 'Daerah Aliran Sungai Bali', 'kategori' => 'Evaluasi Proyek Bali', 'file_pdf' => 'Eval 1_Bali_2.pdf']
];
?>

<main>
    <div class="background-ocean"></div>

    <a href="skills.php" class="nav-arrow left-arrow fixed-arrow"><i class="fas fa-arrow-left"></i></a>
    <a href="contact.php" class="nav-arrow right-arrow fixed-arrow"><i class="fas fa-arrow-right"></i></a>

    <div class="container projects-container">
        <?php foreach ($projects as $index => $project) : 
            $isRight = ($index % 2 == 0);
            $alignClass = $isRight ? 'align-right' : 'align-left';
            // Encode spasi agar aman di URL browser
            $safeUrl = str_replace(' ', '%20', $project['file_pdf']);
        ?>
            <div class="project-row <?= $alignClass ?> scroll-anim">
                <div class="project-text">
                    <h2><?= $project['judul'] ?></h2>
                    <p><?= $project['kategori'] ?></p>
                </div>
                <div class="project-pdf glass-card text-center">
                    <iframe src="assets/<?= $safeUrl ?>"></iframe>
                    <div class="mt-3">
                        <a href="assets/<?= $safeUrl ?>" download="<?= $project['file_pdf'] ?>" class="btn-download-sm">
                            <i class="fas fa-download mr-2"></i> Download File
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1 }); 
        document.querySelectorAll('.scroll-anim').forEach(box => {
            observer.observe(box);
        });
    });
</script>

<?php include 'footer.php'; ?>