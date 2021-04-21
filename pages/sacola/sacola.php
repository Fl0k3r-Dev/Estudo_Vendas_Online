<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../icons/shopping-bag.png" type="image/x-icon">
    <link rel="stylesheet" href="main.css">
   
    <title>Sacola</title>
</head>
<body>
    <a href="../../index.php">
        <div class="div_button-back">
            <img src="../../icons/arrow-left.svg">Voltar
        </div>
    </a>
        <div class="container">
        
        <?php 

            require_once "../../php/conexao/conexao.php";
            $sel = "select * from sacola";
            $cursor = mysqli_query($conn, $sel);

            while($dados = mysqli_fetch_array($cursor)){

        ?>
            <div class="lista-compra">
                <div class="acoes">
                    <div>
                        <a href=""><img id="btn-edit" src="../../icons/edit-2.svg">
                        <a href=""><img class="off" id="btn-save" src="../../icons/save.svg">

                    </a></div>
                    <div><a href=""><img id="btn-delete" src="../../icons/trash.svg"></a></div>
                </div>
                <div class="txt-infos">
                    <span>INFORMAÇÕES:</span>
                </div>
                <div id="item" class="infos-compra">
                    <div>
                        <span class="input nome-pessoa">Nome:&nbsp;</span>
                        <input value="<?php echo $dados['nome']?>" type="text" disabled>
                    </div>
                    <div>
                        <span class="input contato">&nbsp;Contato:&nbsp;</span>
                        <input value="<?php echo $dados['contato']?>" type="text" disabled>
                    </div>
                    <div>  
                        <span class="input sabor">Sabor:&nbsp;</span>
                        <input value="<?php echo $dados['sabor']?>" type="text" disabled>
                    </div>
                    <div>
                        <span class="input quantidade">&nbsp;Quantidade:&nbsp;</span>
                        <input value="<?php echo $dados['quantidade']?>" type="text" disabled>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    <script src="jquery.js"></script>
    <script src="main.js"></script>

</body>
</html>