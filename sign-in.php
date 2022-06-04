<?php
    require("config.php");

    if(isset($_POST['login'])){

        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        $sql = "SELECT * FROM user WHERE username=:username or email=:email";
        $stmt = $db->prepare($sql);

        $params = array(
            ":username"=>$username,
            ":email"=>$username
        );

        $stmt->execute($params);
        
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        // jika user terdaftar
        if($user){
            // verify password
            if(password_verify($password,  $user["password"])){
                // make session
                session_start();
                $_SESSION["user"] = $user;
                // login succsess tp
                header("Location: simple.html");
            }
        }else{
            echo "<script>alert('Email atau Password anda salah, silakan coba lagi!')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/Reset.css">
    <title>Sign In</title>
    <style>
        body{
            background-image: url(assets/img/bck.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
    <h3>Sign In</h3>
    <form action="" method="POST">
        <label for="">Username</label>
        <input type="text" name="username" id="" placeholder="Username">
        <label for="">Password</label>
        <input type="password" name="password" id="" placeholder="Password">
        <button type="submit" name="login">SIgn In</button>
    </form>
        
    <p></p>
</body>
</html>