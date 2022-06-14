<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$endereco = $_POST['endereco'];
$regiao = $_POST['regiao']

$sql = "INSERT INTO vendedor (nomeVendedor, emailVendedor, senhaVendedor, enderecoVendedor, idRegiao) VALUES ('$nome', '$email', 
'$senha', '$endereco', '$regiao')";

if (!mysqli_query($conn, $sql)) {
    die("Erro ao cadastrar Vendedor " . mysqli_error($conn));
} else {
    echo "<script language='javascript' type='text/javascript'>
alert('Vendedor cadastrado com sucesso')
window.location.href='loginVendedor.html'</script>";
}
?>