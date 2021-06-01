<?php
session_start();


$user_name = "";
$email = "";

$errors = array();
require_once ("includes/db.php");

//register user
if(isset($_POST['btn-save'])){
$user_name = mysqli_real_escape_string($con, $_POST['username']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($con, $_POST['password_2']);

//validation

if(empty($user_name)){array_push($errors, "username is required");}
if(empty($email)){array_push($errors, "email is required");}
if(empty($password_1)){array_push($errors, "password is required");}

if($password_1 != $password_2){array_push($errors, "password do not match");}

//existing user
$user_check = "SELECT * FROM users WHERE username = '$user_name' or email = '$email' LIMIT 1";

$result = mysqli_query($con, $user_check);
$user = mysqli_fetch_assoc($result);

if($user){
    if($user['username'] === $user_name){array_push($errors, "username already exist");}
    if($user['email'] === $email){array_push($errors, "email already exist");}
}

//register user if no error

if(count($errors) == 0){
    $password = md5($password_1);
    $query = "INSERT INTO users (username, email, password) VALUES ('$user_name', '$email', '$password')";

    $response = mysqli_query($con, $query);

    $_SESSION['username'] = $user_name;
    $_SESSION['success'] = "You are now logged In";

    if($response)
           {
               echo "<p class='alert alert-success'>Record UPDATED successfully : ). <a href='login.php'>Login In Here!</a></p>";
           }

   // header("Location: job-listings.php");
}
}
//login user

if(isset($_POST['btn_login']))
{
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password_1']);

    if(empty($email)){
        array_push($errors, "email is required");
    }
    if(empty($password)){
        array_push($errors, "password is required");
    }

    if(count($errors) ==0 ){
        $password = md5($password);

        $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $results = mysqli_query($con, $query);

        if(mysqli_num_rows($results)){
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "You Logged In Successfully";
            header("Location: job-listings.php");
        }
    }
    else{
        array_push($errors, "Wrong email or password");
    }
}



?>