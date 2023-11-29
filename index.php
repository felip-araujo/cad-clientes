<?php 
    
    if(isset($_POST['submit'])){
        require_once('conexao.php'); 

        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $primeira_compra = $_POST['primeira_compra'];
        $valor_primeira_compra = $_POST['valor_primeira_compra']; 

        $env = mysqli_query($con, "INSERT INTO clientes(id, nome, telefone, email, primeira_compra, valor_primeira_compra) VALUES (null, '$nome', '$telefone', '$email', '$primeira_compra', '$valor_primeira_compra')"); 

        if(!$env){
            echo("Ero ao enviar ".mysql_errno());
        } else echo("<script>alert('Enviado!')</script>");
    }

?>



<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Clientes</title>

</head>

<body>

    <section class="sessao_formulario" id="sessao_formulario">

        <form action="index.php" class="formulario" id="formulario" method="post">

            <label for="nome" class="label">Nome: </label>
            <input type="text" class="input" id="nome" name="nome" placeholder="Ex.: João da Silva">

            <label for="telefone" class="label">Telefone: </label>
            <input type="text" class="input" id="telefone" name="telefone" placeholder="Ex.: (00) 0000-0000">

            <label for="email" class="label">Email: </label>
            <input type="text" class="input" id="email" name="email" placeholder="joao@email.com">

            <label for="primeira_compra" class="label">Produto Comprado: </label>
            <input type="text" class="input" id="primeira_compra" name="primeira_compra" placeholder="Nome do Produto">

            <label for="valor_primeira_compra" class="label">Valor do Produto: </label>
            <input type="text" class="input" id="valor_primeira_compra" name="valor_primeira_compra" placeholder="Valor em Reais">

            <input type="submit" class="btn" id="submit" name="submit">  
         
        </form>
    </section>

</body>

</html>