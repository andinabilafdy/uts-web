<?php
session_start();

// Akun pengguna
$akun = array(
    'bella' => array(
        'pass' => '091',
        'role' => 'user'
    ),
    'admin' => array(
        'pass' => '123',
        'role' => 'admin'
    ),
    'member' => array(
        'pass' => '321',
        'role' => 'member'
    
    )
);

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['pass'];
    $role = $_POST['role'];

    if (isset($akun[$username]) && $akun[$username]['pass'] === $password && $akun[$username]['role'] === $role) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $role;
        $_SESSION['access'] = true;

        if ($role === 'admin') {
            header('Location: homeadmin.php');
        } else if ($role === 'member') {
            header('Location: homemember.php');
        } else {
            header('Location: homeuser.php');
        }
        exit();
    } else {
        echo "<script>
            alert('Username atau password salah!');
            document.location.href = 'index.php';
            </script>";
    }
}
?>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
    <body>
    <div class="medsos">
        <div class="container">
            <ul>
                <li><a href="https://www.facebook.com/posindonesia/?locale=id_ID"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="https://www.youtube.com/@PosIndonesiajuara"><i class="fa-brands fa-youtube"></i></a></li>
                <li><a href="https://twitter.com/PosIndonesia?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/posindonesia.ig/"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
    <br><center><h1>Log In to Access</h1></center></br>
    <form action="index.php" method="post">
    <div class="imgcontainer">
        <img src="img/img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="boxlogin">
    <div class="containerlogin">
        <div class="container1">
            <label for="input"><br><b>Username</b></br></label>
            <input type="text" placeholder="Masukkan username" name="username" required>
            <br>
            <label for="pass"><br><b>Password</b></br></label>
            <input type="password" placeholder="Masukkan password" name="pass" required>
            </br>
                    <div class="pilih">
                        <select name="role">
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                            <option value="member">Member</option>
                        </select>
                    </div>
        <div class="loginbttn">
        <button type="submit" name="login">Login</button>
        </div>
        <div class="rmmbr">
        <label>
            <br>
            <input type="checkbox" checked="checked" name="remember"> Remember me
            </br>
        </label>
        </div>
    </div>
    </div>

            <?php if( isset( $error)) : ?>
                <br><h4 style="color: red; font-style: italic; text-align: center;">
                    Username atau Password Salah!!
            </h4>
            </br>
            <?php endif ?>
        </form>
    </body>
</html>