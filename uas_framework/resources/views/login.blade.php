<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
    <title>Login Apps</title>
</head>
<body>
<main>
    <header>
        <img src="assets/img/unair_horizontal.png" alt="Unair logo">
    </header>
    <!--TODO 1 : Ubah div menjadi form-->
    <form id="loginForm" class="login-input">
        <label for="inputEmail">Email</label>
        <!--TODO 2 : Ubah type menjadi emai.-->
        <input id="inputEmail" email="text" required>
        <label for="inputPassword">Password</label>
        <!--Ubah type menjadi password-->
        <input id="inputPassword" password="text" required>
        <!--TODO 4: Tambah type submit pada button login-->
        <button id="buttonLogin">Login</button>
    </form>
</main>
<div id="modal" class="pop-up-modal">
    <h2>Login gagal!</h2>
    <p>Silakan coba lagi</p>
</div>

<script src="assets/js/index.js"></script>
<script src="assets/js/login.js"></script>
</body>
</html>
