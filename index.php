<?php
session_start();

// Set cookie untuk pilihan bahasa jika ada permintaan
if (isset($_POST['language'])) {
    $language = $_POST['language'];
    setcookie('user_language', $language, time() + (86400 * 30), "/"); // Cookie berlaku 30 hari
    header("Refresh:0"); // Refresh halaman untuk mengambil cookie yang baru diset
    exit;
}

// Tentukan bahasa default jika cookie tidak ada
$language = isset($_COOKIE['user_language']) ? $_COOKIE['user_language'] : 'en';

// Contoh teks berdasarkan bahasa
$lang = [
  'en' => [
      'welcome' => 'Welcome',
      'register' => 'Register',
      'login' => 'Login',
      'fullname' => 'Full Name',
      'username' => 'Username',
      'email' => 'Email',
      'password' => 'Password',
      'create' => 'Create',
      'already_registered' => 'Already registered?',
      'not_registered' => "Haven't registered yet?",
      'choose_language' => 'Choose Language',
      'send' => 'Send',
      'submit' => 'Submit',
  ],
  'id' => [
      'welcome' => 'Selamat Datang',
      'register' => 'Daftar',
      'login' => 'Masuk',
      'fullname' => 'Nama Lengkap',
      'username' => 'Nama Pengguna',
      'email' => 'Email',
      'password' => 'Kata Sandi',
      'create' => 'Buat',
      'already_registered' => 'Sudah terdaftar?',
      'not_registered' => 'Belum Terdaftar?',
      'choose_language' => 'Pilih Bahasa',
      'send' => 'Kirim',
      'submit' => 'Kirim',
  ],
];
?>
<!DOCTYPE html>
<html lang="<?php echo $language; ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webleb</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles.css">
</head>
<body style="display:flex; align-items:center; justify-content:center;">
<div class="login-page">
  <div class="form">
  <form method="post">
        <label for="language"><?php echo $lang[$language]['choose_language']; ?>:</label>
        <select name="language" id="language" onchange="this.form.submit()">
            <option value="en" <?php echo $language === 'en' ? 'selected' : ''; ?>>English</option>
            <option value="id" <?php echo $language === 'id' ? 'selected' : ''; ?>>Bahasa Indonesia</option>
        </select>
    </form>

    <form class="register-form" method="POST" action="proses_register.php">
      <h2><i class="fas fa-lock"></i> <?php echo $lang[$language]['register']; ?> </h2>
      <input type="text" name="fullname"  placeholder="<?php echo $lang[$language]['fullname']; ?> *" required/>
      <input type="text" name="username" placeholder="<?php echo $lang[$language]['username']; ?>" required/>
      <input type="email" name="email" placeholder="<?php echo $lang[$language]['email']; ?>" required/>
      <input type="password" name="password" placeholder="<?php echo $lang[$language]['password']; ?> *" required/>
      <button type="submit"><?php echo $lang[$language]['create']; ?></button>
      <p class="message"><?php echo $lang[$language]['already_registered']; ?> <a href="#"> <?php echo $lang[$language]['login']; ?></a></p>
    </form>

    <form class="login-form" method="post" action="proses_login.php">
      <h2><i class="fas fa-lock"></i> <?php echo $lang[$language]['login']; ?> </h2>
      <input type="text" name="fullname" placeholder="<?php echo $lang[$language]['fullname']; ?>" required />
      <input type="password" name="password" placeholder="<?php echo $lang[$language]['password']; ?>" required/>
      <button type="submit" name="send2"><?php echo $lang[$language]['login']; ?></button>
      <p class="message"><?php echo $lang[$language]['not_registered']; ?> <a href="#"><?php echo $lang[$language]['register']; ?></a></p>
    </form>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="main.js"></script>
</body>
</html>
