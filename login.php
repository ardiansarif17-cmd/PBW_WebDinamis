

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Masuk / Daftar Member</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
  </head>
  <body>
    <header class="header login-header">
      <div class="logo">
        <span>Edutech Academy</span>
      </div>

      <div class="nav-login">
        <a
          href="javascript:void(0);"
          onclick="showTab('login')"
          id="tab-login"
          class="btn-tab active"
          >MASUK</a
        >
        <a
          href="javascript:void(0);"
          onclick="showTab('register')"
          id="tab-register"
          class="btn-tab"
          >DAFTAR</a
        >
      </div>
    </header>

    <main class="auth-container">
      <div class="auth-card">
<div id="login-form">
  <h2>Masuk</h2>
  <form action="auth_login.php" method="POST">
    <div class="input-group">
      <i class="fas fa-envelope"></i>
      <input
        type="email"
        name="email"
        placeholder="Email"
        required
      />
    </div>

    <div class="input-group">
      <i class="fas fa-lock"></i>
      <input
        type="password"
        name="password"
        id="login-password"
        placeholder="Password"
        required
      />
      <i
        class="fas fa-eye-slash"
        onclick="togglePassword('login-password')"
      ></i>
    </div>

    <button type="submit" class="btn-submit">Masuk</button>

    <p class="separator">atau</p>

    <div class="social-login">
      <a href="#" class="google">
        <i class="fab fa-google"></i> Masuk dengan Google
      </a>
      <a href="#" class="github">
        <i class="fab fa-github"></i> Masuk dengan GitHub
      </a>
    </div>
  </form>

  <div class="footer-links">
    <a href="#">Lupa Password</a>
    <p style="margin-top: 10px; color: #888">
      Belum punya akun?
      <a href="javascript:void(0);" onclick="showTab('register')">Daftar</a>
    </p>
  </div>
</div>

  <div id="register-form" style="display: none">
  <h2>Daftar</h2>

  <form action="auth_register.php" method="POST">
    <div class="input-group">
      <i class="fas fa-user"></i>
      <input
        type="text"
        name="nama"
        placeholder="Nama Lengkap"
        required
      />
    </div>

    <div class="input-group">
      <i class="fas fa-at"></i>
      <input
        type="text"
        name="username"
        placeholder="Username"
        required
      />
    </div>

    <div class="input-group">
      <i class="fas fa-envelope"></i>
      <input
        type="email"
        name="email"
        placeholder="Email"
        required
      />
    </div>

    <div class="input-group">
      <i class="fab fa-whatsapp"></i>
      <input
        type="tel"
        name="whatsapp"
        placeholder="Whatsapp"
      />
    </div>

    <div class="input-group">
      <i class="fas fa-lock"></i>
      <input
        type="password"
        name="password"
        id="register-password"
        placeholder="Password"
        required
      />
      <i
        class="fas fa-eye-slash"
        onclick="togglePassword('register-password')"
      ></i>
    </div>

    <div class="input-group">
      <i class="fas fa-lock"></i>
      <input
        type="password"
        name="confirm_password"
        id="confirm-password"
        placeholder="Konfirmasi Password"
        required
      />
      <i
        class="fas fa-eye-slash"
        onclick="togglePassword('confirm-password')"
      ></i>
    </div>

    <button
      type="submit"
      class="btn-submit"
      style="background-color: #c300ff"
    >
      Daftar
    </button>
  </form>

  <div class="footer-links">
    <p style="margin-top: 10px; color: #888">
      Sudah punya akun?
      <a href="javascript:void(0);" onclick="showTab('login')">Masuk</a>
    </p>
  </div>
</div>

      </div>
    </main>
    <footer class="footer login-footer">
      <div class="footer-content login-footer-content">
        <p>© 2025 Edutech Academy. All rights reserved.</p>
      </div>
    </footer>

    <script src="script.js"></script>
  </body>
</html>
