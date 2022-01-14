<!doctype html>
<html lang="en" id="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .login {
            border: 1px solid aqua;
            width: 300px;
            height: 230px;
            margin: 10px;
            /*padding: 10px;*/

        }

        .login input {
            padding: 5px;
            margin: 5px;


        }

        h2 {
            text-align: center;

        }
        b{
            padding: 5px;
            margin: 5px;
        }

    </style>
</head>
<body>
<form action="" method="post">
    <div class="login">
        <h2>Login</h2>
        <label>
            <b>Username:</b>
            <input type="text" name="username" placeholder="Username" size="30"/>
        </label>
        <label>
            <b>Password:</b>
            <input type="password" name="password" placeholder="password" size="30"/>
        </label>
        <input type="submit" value="Sign in" style="background: coral"/>
    </div>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "admin" && $password === "admin") {
        echo "<h3>Welcome <span style='color:red'>" .$username. "</span> to website</h3>";
    } else{
        echo "<h3><span style='color:red'>Login Error</span></h3>";
    }
}
?>
</form>
</body>
</html>
