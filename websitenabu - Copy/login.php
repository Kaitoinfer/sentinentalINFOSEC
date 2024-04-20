<?php
session_start();
include("config.php");

// submit result/function
if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    //connect database rows
    $sql = "SELECT * FROM users WHERE email='$email' AND password ='$password'";
    $result = mysqli_query($conn, $sql);

    //check database rows
    if($result->num_rows == 1){
        $user = mysqli_fetch_assoc($result);
        
        // Store user information in session
        $_SESSION['email'] = $email;
       
        // Redirect to welcome page
        header("Location: welcom.php");
        exit();
    }else{
        echo "Incorrect Password or Email";
        

    }
}
?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css.css">
</head>
<body>

<div class="bg-image"></div>
<form action="" method="POST">
<div class="bg-text">
    <h1>LOGIN</h1>
    
        <div class="inputs">
        
        <input class="email" name="email" type="text" placeholder="Email...">
        <br>

        
        <input class="password" name="password" type="" placeholder="Password">
        <br>
        <button name="submit" class="btn" value="submit" value="submit">LOGIN</button>
        

</form>
        
</div>

</body>
</html>