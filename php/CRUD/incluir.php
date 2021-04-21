<?php
    require "../conexao/conexao.php";

    $nome = $_POST['nome'];
    $contato = $_POST['contato'];
    $sabor = $_POST['sabor'];
    $quantidade = $_POST['quantidade'];


   $insert_sacola = "insert into sacola (nome, contato, sabor, quantidade) values ('$nome', '$contato', '$sabor', $quantidade)";
    mysqli_query($conn, $insert_sacola) or die ("Deu treta ao tentar inserir pedido");
   
    echo ("Sucesso! Sem tretas nas inserções! =)");

    header("location: ../../index.php");

?>