<?php 

include 'config.php';

if(isset($_POST["u_btn_reg"])){
    header("Location: http://localhost/loginFormPhp/register.php");
}

if(isset($_POST["u_btn_login"])){
    
    $u_email = $_POST['u_email'];
    $u_pass = $_POST['u_pass'];

    if(empty($u_pass) || empty($u_email)){

        echo "Please fill out all fields...";
    
    }
    else{

        $selectfdb = mysqli_query($connection, "SELECT * FROM users WHERE u_email = '$u_email' AND u_pass = '$u_pass'");
        $row = mysqli_fetch_array($selectfdb);

        if($row["u_email"] == $u_email && $row["u_pass"] == $u_pass){
            header("Location: http://localhost/loginFormPhp/index.php");
        }
        else{
            echo "E-mail or Password is incorrect...";
        }
    }
    //GOTO HOMEPAGE AFTER SUCCESFUL LOGIN

}

?>


 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <title>Login Landing</title>
</head>

<body>
    
    <form class="box" action="register.php" method="post">
        <h1>LOGIN</h1>
        <h3>EMAIL</h3>
        <input type="text" name="u_email" placeholder="...">
        <h3>PASSWORD</h3>
        <input type="password" name="u_pass" placeholder="...">
        <input type="submit" name="u_btn_login" value="Login"><br />
        <input type="submit" name="u_btn_reg" value="Register an Account">
    </form>

</body>
