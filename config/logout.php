<?php
 session_start();
//Logout if user clicked logout and go to the main page
  unset($_SESSION['user_logged_in']);
  header('Location: ../index.php');

