<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: ./page/home.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Login — KITA KAKTUS</title>

  <!-- Fonts & Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;800;900&display=swap" rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- THEME: KAKTUS ADMIN -->
  <style>
    :root{
      --bg:#222632;
      --panel:#353a4d;
      --ink:#eaf3f1;
      --muted:#aeb6c7;
      --brand-1:#22d3b6;
      --brand-2:#16a34a;
      --danger:#ef4444;
      --radius:22px;
      --shadow:0 12px 40px rgba(0,0,0,.35);
      --ring:rgba(34,211,182,.35);
    }

    html,body{height:100%;}
    body{
      margin:0; color:var(--ink);
      font-family:'Nunito', sans-serif;
      background:
        radial-gradient(60% 80% at 15% 15%, #3c465e 0%, var(--bg) 55%) fixed,
        linear-gradient(180deg, var(--bg) 0%, #1a1e27 100%) fixed;
      position:relative; overflow-x:hidden;
    }

    /* Hilangkan kotak / box pada tombol show password */
    .end-icon {
    background: none !important;
    border: none !important;
    outline: none !important;
    box-shadow: none !important;
    padding: 0;
    }

    .end-icon:focus,
    .end-icon:active {
    outline: none !important;
    box-shadow: none !important;
    background: none !important;
    }

    /* Background kaktus */
    body::before{
      content:"";
      position:fixed; inset:0;
      opacity:.15;
      background-image:
        url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='140' height='140' viewBox='0 0 140 140'><g fill='none' stroke='%2322d3b6' stroke-opacity='.35' stroke-width='6'><path d='M70 120v-40c0-4-3-7-7-7h-3c-9 0-16-7-16-16V39c0-5 4-9 9-9s9 4 9 9v19c0 2 2 4 4 4h3c4 0 7-3 7-7V35c0-8 7-15 15-15s15 7 15 15v14c0 4 3 7 7 7h2c5 0 9-4 9-9v-6c0-5 4-9 9-9s9 4 9 9v6c0 15-12 27-27 27h-2c-4 0-7 3-7 7v39c0 4-3 7-7 7H77c-4 0-7-3-7-7z'/></g></svg>");
      background-size:180px 180px;
      pointer-events:none;
    }

    .leaf, .leaf2{
      position:fixed; z-index:0; border-radius:36px 140px 110px 140px; pointer-events:none;
    }
    .leaf{
      width:300px; height:300px; left:-90px; top:-50px;
      background:linear-gradient(135deg,#1f6f6f 0%,#2fb08f 100%);
      opacity:.35; transform:rotate(-10deg);
    }
    .leaf2{
      width:360px; height:360px; right:-120px; bottom:-60px;
      background:linear-gradient(135deg,#244a85 0%,#3f87a6 100%);
      opacity:.22; transform:rotate(18deg);
    }

    .auth-wrap{min-height:100vh; display:grid; place-items:center; padding:42px 16px; position:relative; z-index:1;}
    .auth-card{
      width:100%; max-width:560px; background:var(--panel);
      border-radius:var(--radius); box-shadow:var(--shadow);
      padding:48px 44px;
    }

    .brand{display:flex; align-items:center; justify-content:space-between;}
    .brand svg{width:46px;height:46px;filter:drop-shadow(0 6px 14px rgba(34,211,182,.35));}
    .brand .title{font-weight:900;font-size:26px;}
    .brand .subtitle{font-size:12px;color:var(--muted);margin-top:-4px;}
    .tag-admin{background:rgba(34,211,182,.15);color:#7de6d7;padding:6px 10px;border-radius:999px;font-size:11px;font-weight:700;text-transform:uppercase;}

    h2.welcome{text-align:center;font-weight:800;margin:20px 0 28px;}

    .form-label{font-size:12px;color:var(--muted);margin-bottom:6px;}
    .input{display:flex;align-items:center;background:#2f3346;border:1.5px solid transparent;border-radius:14px;padding:12px 14px;transition:.2s;}
    .input input{border:0;outline:0;background:transparent;color:var(--ink);width:100%;font-size:14px;}
    .input:focus-within{border-color:var(--brand-1);box-shadow:0 0 0 6px var(--ring);}
    .end-icon{width:22px;text-align:center;color:var(--muted);background:transparent;border:0;cursor:pointer;}

    .helper{margin-top:6px;font-size:12px;color:var(--muted);}
    .row-actions{display:flex;justify-content:flex-start;align-items:center;gap:16px;margin:10px 2px 6px;font-size:13px;color:var(--muted);}

    .btn-brand{display:block;width:100%;border:0;outline:0;padding:12px 16px;border-radius:14px;margin-top:14px;
      font-weight:900;letter-spacing:.4px;background:linear-gradient(90deg,var(--brand-1),var(--brand-2));color:#052726;
      box-shadow:0 10px 28px rgba(22,163,74,.35);transition:transform .06s, box-shadow .2s;}
    .btn-brand:hover{transform:translateY(-1px);}
    .btn-brand:active{transform:translateY(0);box-shadow:0 6px 18px rgba(22,163,74,.28);}

    .legal{margin-top:22px;text-align:center;font-size:12px;color:var(--muted);}
    .legal a{color:var(--muted);text-decoration:none;}
    .legal a:hover{color:var(--ink);text-decoration:underline;}
    .footcopy{text-align:center;color:var(--muted);font-size:12px;margin-top:14px;}

    /* ===== Hilangkan ikon mata bawaan browser pada password (hindari duplikat) ===== */
    input[type="password"]::-ms-reveal,
    input[type="password"]::-ms-clear { display: none; }
    input[type="password"]::-webkit-textfield-decoration-container { display:none; }
    input[type="password"]::-webkit-credentials-auto-fill-button,
    input[type="password"]::-webkit-clear-button,
    input[type="password"]::-webkit-inner-spin-button,
    input[type="password"]::-webkit-calendar-picker-indicator { display:none; appearance:none; }
  </style>
</head>

<body>
  <div class="leaf"></div>
  <div class="leaf2"></div>

  <div class="auth-wrap">
    <div class="auth-card">
      <!-- Header -->
      <div class="brand">
        <div style="display:flex;align-items:center;gap:12px;">
          <svg viewBox="0 0 64 64" aria-hidden="true">
            <defs><linearGradient id="g1" x1="0" x2="1"><stop offset="0" stop-color="#22d3b6"/><stop offset="1" stop-color="#16a34a"/></linearGradient></defs>
            <circle cx="32" cy="32" r="30" fill="#0b2531" opacity=".35"/>
            <path d="M28 47v-9c0-1.1-.9-2-2-2h-1a7 7 0 0 1-7-7v-6a3 3 0 0 1 6 0v6a1 1 0 0 0 1 1h1c1.1 0 2-.9 2-2v-7a5 5 0 0 1 10 0v7c0 1.1.9 2 2 2h1a1 1 0 0 0 1-1v-4a3 3 0 0 1 6 0v4a7 7 0 0 1-7 7h-1c-1.1 0-2 .9-2 2v11a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2v-2z" fill="url(#g1)"/>
          </svg>
          <div>
            <div class="title">KITA KAKTUS</div>
            <div class="subtitle">Admin Panel</div>
          </div>
        </div>
        <span class="tag-admin"><i class="fas fa-shield-alt"></i> Admin</span>
      </div>

      <h2 class="welcome">Welcome Back, Admin!</h2>

      <!-- Form -->
      <form action="ceklogin.php" method="post" novalidate>
        <label class="form-label" for="username">Username Admin</label>
        <div class="input">
          <input type="text" id="username" name="username" placeholder="Masukkan username" required>
          <span class="end-icon"><i class="fas fa-user"></i></span>
        </div>
        <div class="helper">Gunakan username yang terdaftar di sistem.</div>

        <label class="form-label mt-3" for="password">Password</label>
        <div class="input">
          <input type="password" id="password" name="password" placeholder="Masukkan password" required>
          <!-- ikon toggle password kustom -->
          <button type="button" class="end-icon" id="togglePwd" aria-label="Tampilkan/Sembunyikan password">
            <i class="far fa-eye"></i>
          </button>
        </div>
        <div class="helper">Pastikan password benar.</div>

        <div class="row-actions">
          <label style="cursor:pointer"><input type="checkbox" style="accent-color:#22d3b6"> Remember me</label>
          <!-- Fitur lupa password dihilangkan sesuai permintaan -->
        </div>

        <button type="submit" class="btn-brand">Masuk Admin</button>

        <div class="legal">
          <a href="#" onclick="return false;">Terms of use</a> ·
          <a href="#" onclick="return false;">Privacy policy</a>
        </div>
        <div class="footcopy">© 2025 KITA KAKTUS.</div>
      </form>
    </div>
  </div>

  <!-- Modal gagal -->
  <div class="modal fade" id="gagal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog"><div class="modal-content" style="border-radius:20px;">
      <div class="modal-body text-center p-5">
        <i class="far fa-times-circle mb-2 text-danger" style="font-size:80px;"></i>
        <h4>Username atau Password Salah!!</h4>
        <button type="button" class="btn btn-primary mt-4 pl-5 pr-5 p-2" style="border-radius:50px;" data-dismiss="modal">OK</button>
      </div>
    </div></div>
  </div>

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="js/sb-admin-2.min.js"></script>

  <script>
    // Toggle password (ikon kustom)
    const pwd = document.getElementById('password');
    const toggle = document.getElementById('togglePwd');
    toggle.addEventListener('click', () => {
      const type = pwd.type === 'password' ? 'text' : 'password';
      pwd.type = type;
      toggle.firstElementChild.className = type === 'password' ? 'far fa-eye' : 'far fa-eye-slash';
    });
  </script>

  <?php
    if(isset($_GET['gagal'])){
      echo "<script>Swal.fire('Username atau Password salah!','','error');</script>";
    }
  ?>
</body>
</html>
