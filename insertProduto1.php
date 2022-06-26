<?php

include('conexaoLoginCliente.php');

if(isset($_POST['robo'])){

    $id = $_SESSION['id'];
    $produto = "Robô Aspirador de pó";
    $qtdProduto = 1;
    $valorProduto = 2.500;
    $sql_code = "INSERT INTO venda (idVendedor, idCliente, produto, qtdProduto, valorProduto) VALUES ('1', '$id', '$produto', '$qtdProduto', '$valorProduto')";
    
    if (!mysqli_query($conn, $sql_code)) {
        die("Erro ao comprar produto! " . mysqli_error($conn));
    } else {
        echo "<script language='javascript' type='text/javascript'>
    alert('Compra efetuada com sucesso! Aguarde a confirmação do vendedor e visualize a sua nota fiscal na página 'Notas fiscais'')
    window.location.href='homeCliente.php'</script>";
    }

} else if(isset($_POST['cafeteira'])){

    $id = $_SESSION['id'];
    $produto = "Cafeteira inteligente";
    $qtdProduto = 1;
    $valorProduto = 1.500;
    $sql_code = "INSERT INTO venda (idVendedor, idCliente, produto, qtdProduto, valorProduto) VALUES ('1', '$id', '$produto', '$qtdProduto', '$valorProduto')";

    if (!mysqli_query($conn, $sql_code)) {
        die("Erro ao comprar produto! " . mysqli_error($conn));
    } else {
        echo "<script language='javascript' type='text/javascript'>
    alert('Compra efetuada com sucesso! Aguarde a confirmação do vendedor e visualize a sua nota fiscal na página 'Notas fiscais'')
    window.location.href='homeCliente.php'</script>";
    }

} else if(isset($_POST['oculos'])){


    $id = $_SESSION['id'];
    $produto = "Óculos inteligente";
    $qtdProduto = 1;
    $valorProduto = 1.250;
    $sql_code = "INSERT INTO venda (idVendedor, idCliente, produto, qtdProduto, valorProduto) VALUES ('1', '$id', '$produto', '$qtdProduto', '$valorProduto')";

    if (!mysqli_query($conn, $sql_code)) {
        die("Erro ao comprar produto! " . mysqli_error($conn));
    } else {
        echo "<script language='javascript' type='text/javascript'>
    alert('Compra efetuada com sucesso! Aguarde a confirmação do vendedor e visualize a sua nota fiscal na página 'Notas fiscais'')
    window.location.href='homeCliente.php'</script>";
    }
}


?>