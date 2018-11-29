<?php
  require_once 'connect.php';
  $brand = '1';
  
  echo $twig->render('site/load.twig', array(
    'first_name'=> $_POST['first_name'],
    'email'=> $_POST['email'],
    'phone'=> $_POST['phone']
  ));
?>