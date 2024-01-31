<?php

include('conexaologin.php');


if(isset($_POST['email']) || isset($_POST['senha'])){


    if (strlen($_POST['email']) == 0){

        echo "Digite o email";
    } else if(strlen($_POST['senha']) == 0){

        echo "Digite a senha";
    }else{
        
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM volunt WHERE email = '$email' AND senha ='$senha' ";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){

            $user = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id'] = $user['id'];
            $_SESSION['nome'] = $user['nome'];

            header("Location: jogo.php");

        }else{

            echo "Falha no login!Email ou senha incorretos.";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>LOGIN</title>
      <link rel="stylesheet" href="login.css">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Login 
         </div>
         <form action="" method="POST">
            <div class="field">
               <input type="text" required name="email">
               <label>Email </label>
            </div>
            <div class="field">
               <input type="password" required name= "senha">
               <label>Password</label>
            </div>
            <div class="content">
               <div class="checkbox">
                  <input type="checkbox" id="lembra-me">
                  <label for="lembra-me">Lembra-me</label>
               </div>
               <div class="pass-link">
                  <a href="juntaaequipa.php">Esqueceu-se da senha?</a>
               </div>
            </div>
            <div class="field">
               <input type="submit" value="Login">
            </div>
            <div class="signup-link">
               Não é voluntário? <a href="juntaaequipa.php">Quero ser voluntário</a>
            </div>
         </form>
      </div>
   </body>
</html>