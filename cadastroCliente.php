<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$endereco = $_POST['endereco'];

$sql = "INSERT INTO cliente (nomeCliente, emailCliente, senhaCliente, enderecoCliente) VALUES ('$nome', '$email', 
'$senha', '$endereco')";

if (!mysqli_query($conn, $sql)) {
    die("Erro ao cadastrar Cliente " . mysqli_error($conn));
} else {
    echo "<script language='javascript' type='text/javascript'>
alert('Cliente cadastrado com sucesso')
window.location.href='loginCliente.html'</script>";
}
?>