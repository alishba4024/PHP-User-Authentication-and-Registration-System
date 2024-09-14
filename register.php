<?php
$con= mysqli_connect("localhost", "root", "", "form_2310f1");
if(isset($_POST["btn"])){
    $name= $_POST["name"];
    $email= $_POST["email"];
    $pass= $_POST["pass"];
    $encrypted_pass=password_hash($pass,PASSWORD_DEFAULT);
    $city= $_POST["city"];
    $gender= $_POST["gender"];
  
    $query="insert into formdata values(NULL,'$name','$email','$encrypted_pass','$city','$gender','NULL','NULL')";

    $final= mysqli_query($con,$query);

    if($final){
        header('location:login.php');
    }
    else{
        echo "<script> alert('not inserted')</script>";
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

.heading{
    margin-top: 0;
    text-align: center;
}

center {
    margin: 30px auto;
    width: 400px;
    background-color: #fff;
    padding: 50px;
    border-radius: 7px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

form {
    text-align: left;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 95%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    margin-bottom: 15px;
}
select{
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    margin-bottom: 15px;
}

.radio-group {
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 10px;
}

input[type="radio"] {
    margin-right: 5px;
    margin-bottom: 9px;
    justify-content: space-between;
    align-content: space-between;
}

button[type="submit"] {
    background-color: #ff0000;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    margin-top: 5px;
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
    <form action="register.php" method="post">
        <h1 class="heading">REGISTRATION</h1>
       <label for="name">Name:</label>
       <input type="text" name="name" id="name" required>

       <label for="email">Email:</label>
       <input type="email" name="email" id="email" required>

       <label for="pass">Password:</label>
       <input type="password" name="pass" id="pass" required>

       <label for="city">City:</label>
       <select name="city" id="city">
        <option value="Karachi">Karachi</option>
        <option value="Lahore">Lahore</option>
       </select>

       <label>Gender:</label>
       <div class="radio-group">
        <input type="radio" name="gender" id="male" value="male" required>
        <label for="male">Male</label>

        <input type="radio" name="gender" id="female" value="Female" required>
        <label for="female">Female</label>
       </div>

       <button type="submit" name="btn">Register</button><br><br>
       <a href="login.php">Already have an account? Click to Login</a>
    </form>
</center>
</body>
</html>