<?php
session_start();
require 'connection.php';

if(!empty($_GET['username']) && !empty($_GET['password'])){
  try {
    $stmtLogin = $link->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
    $stmtLogin->bindParam(':username', $_GET['username']);
    $stmtLogin->bindParam(':password', $_GET['password']);
    $stmtLogin->execute(); 
    if($user = $stmtLogin->fetchObject()) {
      $_SESSION['username'] = $user->username;
      $_SESSION['level'] = $user->level;
      header('Location: index.php');
    } else {
      header('Location: login.php');
    }
  } catch (PDOException $e) {
    echo "Error en el login: " . $e->getMessage();
  }

}
?>