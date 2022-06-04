<?php
    require_once("config.php");

    if(isset($_POST['register'])){

        // filter data yang diinputkan
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        // enkripsi password
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

        // menyiapkan query
        $sql = "INSERT INTO user (name, username, email, password)
                VALUES (:name, :username, :email, :password)";
        $stmt = $db->prepare($sql);

        $params = array(
            ":name" => $name,
            ":username"=>$username,
            ":email"=>$email,
            ":password"=>$password
        );

        $saved = $stmt->execute($params);
        if($saved) header("Location: sign-in.html");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/Reset.css">
    <!-- <link rel="stylesheet" href="assets/css/"> -->
    <title>Document</title>
</head>
<body>
    <h3>Sign-Up</h3>
    <form action="" method="POST">
        <label for="">Nama Lengkap</label>
        <input type="text" name="name" id="">
        <label for="">Username</label>
        <input type="text" name="username" id="">
        <label for="">Email</label>
        <input type="email" name="email" id="">
        <label for="">Password</label>
        <input type="password" name="password" id="">
        <button type="submit" name="register">Daftar</button>
    </form>
</body>
</html>