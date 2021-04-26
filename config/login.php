<?php
session_start();
// check user name and password if match to the file
    
    include 'functions.php';
    $user_info = explode(':',file('pass')[0]);

    if($user_info[0] == get('username') && $user_info[1] == md5(get('password')))
    {
        $_SESSION['user_logged_in'] = true;
        header('Location: ../dashboard.php');
        exit();
    }

    header('Location: loginPage.php');
  