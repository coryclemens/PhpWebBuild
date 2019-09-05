<?php 

ini_set('display_startup_errors', true);
error_reporting(E_ALL);
ini_set('display_errors', true);

include 'config.php';

if(isset($_POST["u_btn"])){
    $u_name = $_POST["u_name"];
    $u_email = $_POST["u_email"];
    $u_pass = $_POST["u_pass"];
    if(empty($u_name) || empty($u_email) || empty($u_pass)){
        echo "Please Fill Out All Fields";
    }
    else{
        $insert = mysqli_query($connection, 
        "INSERT INTO `users` (`u_name`, `u_email`, `u_pass`) VALUES ('$u_name', '$u_email', '$u_pass')");
        echo "Successfully created!";
    }

}

if(isset($_POST["u_btn_login"])){
    header("Location: http://localhost/loginFormPhp/login.php");
}


?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="register.css">
    <title>Register Landing</title>
</head>

<body>
    
    <form class="box" action="register.php" method="post">
        <h1>REGISTER</h1>
        <h3>NICKNAME</h3>
        <input type="text" name="u_name" placeholder="...">
        <h3>EMAIL</h3>
        <input type="text" name="u_email" placeholder="...">
        <h3>PASSWORD</h3>
        <input type="password" name="u_pass" placeholder="...">
        <input type="submit" name="u_btn" value="Create">
        <input type="submit"  name="u_btn_login" value="Already have an account?"/>
</form>

</body>
