<?php 

if(isset($_POST["u_btn_reg"])){
    header("Location: http://localhost/loginFormPhp/register.php");
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
        <input type="submit" name="u_btn" value="Login"><br />
        <input type="submit" name="u_btn_reg" value="Register an Account">
    </form>

</body>
