<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edutech Academy</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
  </head>
  <body>
    <header class="header">
      <div class="logo">
        <span>Edutech Academy</span>
      </div>

      <nav class="navbar">
        <a href="index.php">Beranda</a>
        <a href="#courses">Course</a>
        <a href="materi.php">Materi</a>
        <a href="#contact">Contact</a>
      </nav>

      <div class="nav-actions">
        <a href="login.php" target="_blank" class="btn-login"
          ><i class="fas fa-user-circle"></i> Login Member</a
        >
        <a href="gabung_program.php" target="_blank" class="btn-primary"
          >Join Member</a
        >
      </div>
    </header>

    <section class="hero-section">
      <div class="hero-content">
        <h1>
          Selamat Datang di<br />
          Edutech Academy
        </h1>
        <p>Tempat Pelatihan untuk mengembangkan minat dan bakatmu</p>
        <p>di bidang teknologi dengan materi yang lengkap,</p>
        <p>serta autor yang super keren.</p>
        <p class="highlight-text">Daftar dan rasakan manfaatnya.</p>
        <div class="hero-buttons">
          <a href="gabung_program.php" class="btn-cta btn-join"
            ><i class="fas fa-folder-open"></i> Join Member</a
          >
          <a href="#courses" class="btn-cta btn-view"
            >Lihat courses <i class="fas fa-arrow-right"></i
          ></a>
        </div>
      </div>
      <div class="img">
        <img src="images/tecnologi.jpg" alt="tecnologi image" />
      </div>
    </section>

    <section class="courses-section" id="courses">
      <h2>Pilih Kursus Terbaik Untuk Karirmu</h2>
      <p class="section-subtitle">
        Mulai belajar dari dasar hingga mahir dengan materi yang terstruktur.
      </p>
      <div class="course-container">
        <div class="course-card">
          <i class="fas fa-code course-icon"></i>
          <h3>Fullstack Web Developer</h3>
          <p>
            Kuasai pengembangan sisi klien dan server. Bangun aplikasi web
            lengkap dari nol hingga deployment.
          </p>
          <a href="materi.php" class="btn-card">Lihat Detail</a>
        </div>
        <div class="course-card">
          <i class="fas fa-palette course-icon"></i>
          <h3>Front End Development</h3>
          <p>
            Fokus pada tampilan antarmuka pengguna (UI) menggunakan HTML, CSS,
            dan JavaScript modern.
          </p>
          <a href="materi.php" class="btn-card">Lihat Detail</a>
        </div>
        <div class="course-card">
          <i class="fas fa-server course-icon"></i>
          <h3>Back End Development</h3>
          <p>
            Pelajari logika server, database, dan API untuk mengelola data
            aplikasi web yang dinamis.
          </p>
          <a href="materi.php" class="btn-card">Lihat Detail</a>
        </div>

        <div class="course-card">
          <i class="fas fa-brain course-icon"></i>
          <h3>AI</h3>
          <p>
            Membangun, melatih, dan menerapkan model kecerdasan buatan (Machine
            Learning) untuk solusi bisnis.
          </p>
          <a href="materi.php" class="btn-card">Lihat Detail</a>
        </div>

        <div class="course-card">
          <i class="fas fa-shield-alt course-icon"></i>
          <h3>Cyber Security</h3>
          <p>
            Pelajari teknik pertahanan, penetrasi testing, dan lindungi sistem
            dari serangan digital.
          </p>
          <a href="materi.php" class="btn-card">Lihat Detail</a>
        </div>
        <div class="course-card">
          <i class="fas fa-mobile-alt course-icon"></i>
          <h3>Mobile App Development</h3>
          <p>
            Belajar membuat aplikasi mobile native dan hybrid untuk Android dan
            iOS.
          </p>
          <a href="materi.php" class="btn-card">Lihat Detail</a>
        </div>

        <div class="course-card">
          <i class="fas fa-chart-line course-icon"></i>
          <h3>Data Analyst</h3>
          <p>
            Mengolah, menganalisis, dan memvisualisasikan data untuk mengambil
            keputusan bisnis yang tepat.
          </p>
          <a href="materi.php" class="btn-card">Lihat Detail</a>
        </div>
      </div>
    </section>

    <section class="contact-section" id="contact">
      <strong>Hubungi Kami <strong>Sekarang</strong></h2>
      <p class="section-subtitle">
        Tim kami siap membantu Anda dengan pertanyaan atau dukungan.
      </p>
      <div class="contact-form-container">
        <form action="#" method="GET" class="contact-form">
          <input type="text" placeholder="Nama Lengkap" required />
          <input type="email" placeholder="Email Anda" required />
          <textarea placeholder="Pesan Anda..." rows="5" required></textarea>
          <button type="submit" class="btn-primary">Kirim Pesan</button>
        </form>
        <div class="contact-info">
          <h3>Informasi Kontak</h3>
          <p>
            <i class="fas fa-map-marker-alt"></i> Jl. Edutech No. 123, Jakarta
          </p>
          <p><i class="fas fa-phone"></i> +62 812-3456-7890</p>
          <p><i class="fas fa-envelope"></i> support@edutech.ac.id</p>
          <div class="social-links">
            <a href="https://web.facebook.com/?_rdc=1&_rdr#" target="_blank"
              ><i class="fab fa-facebook"></i
            ></a>
            <a href="https://x.com/" target="_blank"
              ><i class="fab fa-twitter"></i
            ></a>
            <a href="https://www.instagram.com/" target="_blank"
              ><i class="fab fa-instagram"></i
            ></a>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="footer-content">
        <p>
          Hak cipta © 2025 <strong>Edutech Academy</strong>. Semua hak
          dilindungi.
        </p>
      </div>
    </footer>

    <a
      href="https://wa.me/628813847841"
      target="blank"
      class="whatsapp-button"
      aria-label="Hubungi via WhatsApp"
    >
      <i class="fab fa-whatsapp"></i>
    </a>
    <script src="script.js"></script>
  </body>
</html>
