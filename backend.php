<?php
session_start();

$daftar_user = [
    ["username"=> "admin", "password"=> "1", "role"=>"admin"],
    ["username"=> "member", "password"=> "2", "role"=>"member"]
];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $USERNAME = $_POST['username'];
    $PASSWORD = $_POST['password'];

    $loginBerhasil = false;
    $roleAsli = ""; 

    foreach($daftar_user as $user){
        if($USERNAME == $user['username'] && $PASSWORD == $user['password']){
            $loginBerhasil = true;
            $roleAsli = $user['role']; 
            break;
        }
    }

    if($loginBerhasil){
        
        if($roleAsli == "admin"){
            $_SESSION['loggedinAsAdmin'] = true;
            $_SESSION['username'] = $USERNAME;
        } else if($roleAsli == "member"){
            $_SESSION['loggedinAsMember'] = true;
            $_SESSION['username'] = $USERNAME;
        }
    }else{
            $_SESSION['loggedinAsGuest'] = true;
        }

        $_SESSION['username'] = $USERNAME ? $USERNAME : "Guest";
        
        header("Location: halaman-1.html"); 
        exit();

    } 
?>