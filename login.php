<?php
$con = mysqli_connect("localhost","root", "","form_2310f1");
if(isset($_POST["btn"])) {
    $email= $_POST["email"];
    $pass = $_POST["pass"];

    $verify="SELECT * FROM formdata WHERE email='$email'";
    $query_verify = mysqli_query($con,$verify);
    if(mysqli_num_rows($query_verify)== 0 )
    {
        echo "<script>alert('user is not registered')</script>";
    }
    else{
        $query="SELECT * FROM formdata WHERE email='$email'";
        $run=mysqli_query($con,$query);
        $row=mysqli_fetch_assoc($run);

        if(password_verify($pass,$row["pass"])){
            header('location:home.php');
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
    font-family: Roboto, sans-serif;
    background-color: #f3f3f3;
}

center {
    margin: 70px auto;
    width: 400px;
    background-color: #fff;
    padding: 35px;
    border-radius: 7px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h1 {
    margin-top: 0;
    text-align: center;
    /* margin-bottom: 20pxs; */
}

form {
    text-align: left;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="email"],
input[type="password"] {
    width: 95%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    margin-bottom: 15px;
}

button[type="submit"] {
    background-color: #ff0000;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    width: 100%;
}

button[type="submit"]:hover {
    background-color: #c40000;
}

a {
    text-decoration: none;
    color: #007bff;
}

a:hover {
    text-decoration: underline;
}
</style>
<body>
<center>
    <form action="login.php" method="post">
        <h1>LOGIN</h1>
       <label for="email">Email:</label>
       <input type="email" name="email" id="email" required>

       <label for="pass">Password:</label>
       <input type="password" name="pass" id="pass" required>

       <button type="submit" name="btn">Login</button><br><br>
       <a href="register.php">Don't have an account?  Click here to register.</a>
    </form>
</center>
</body>
</html>