<?php


//Get user name
  function get($name,$def='')
  {
      return $_REQUEST[$name] ?? $def;
  }


  //Check if user accessed succesfully
  function check_access(){
      if(!isset($_SESSION['user_logged_in']) || !$_SESSION['user_logged_in'])
      header('Location: config/loginPage.php');
      
  }