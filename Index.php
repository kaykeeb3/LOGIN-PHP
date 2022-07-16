<?php session_start() ?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="" content="">
    <title>Login PHP</title>
  </head>
  <body>
    
 <?php
   if(!isset($_SESSION['login'])){
     if(isset($_POST['acao']) ){
       $login = 'kayke';
       $senha = '123';
       
       $loginform = $_POST['login'];
       $senaform = $_POST['senha'];
       
       if($login == $loginform && $senha == $senaform){
         //Logado com sucesso
         $_SESSION['login'] = $login;
         //header('Location: index.php');
       }else{
         //Algum erro
         echo 'Dado inválidos';
       }
     }
     
         include('login.php');
      }else{
        if(isset($GET['logout'])){
          unset($_SESSION['login']);
          session_destroy();
          header('Location: index.php');
        }
         include('home.php');
   }
   
?>

  </body>
</html>