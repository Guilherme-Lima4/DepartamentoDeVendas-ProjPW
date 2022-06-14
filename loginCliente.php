<?php
$email = $_POST['email'];
$senha = md5($_POST['senha']);

$connect = mysql_connect('localhost','id18915334_guilherme123','mvY5R}%5&P$aw4!b');
$db = mysql_select_db('id18915334_market');
  if ($connect) {

    $verifica = mysql_query("SELECT * FROM cliente WHERE emailCliente =
    '$email' AND senhaCliente = '$senha'") or die("erro ao selecionar");
      if (mysql_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
      }else{
        setcookie("email",$email);
        header("homeCliente.html");
      }
  }
?>