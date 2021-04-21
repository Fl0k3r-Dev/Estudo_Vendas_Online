<?php

    define ("HOST", "127.0.0.1");
    define ("USER", "root");
    define ("PASS", "");
    define ("BD", "vendas_online");

    $conn = mysqli_connect(HOST, USER, PASS, BD);

    if(!$conn){

        echo("Error of connection!");
    }

?>