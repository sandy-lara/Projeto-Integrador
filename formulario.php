<?php

   if(isset($_POST['submit']))
    {
    //    print_r($_POST['nome']);
    //    print_r($_POST['email']);
    //    print_r($_POST['telefone']);
    //    print_r($_POST['genero']);
    //    print_r($_POST['data_nascimento']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];

    $result = mysqli_query($conexao, "INSERT INTO usuario(nome,email,telefone,senha,sexo,data_nasc) 
    VALUES('$nome','$email','$telefone','$senha','$sexo','$data_nasc')");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="formulario.css">
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Cadastro</b></legend><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br></br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br></br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br></br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br>
                <p>Sexo</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outros" name="genero" value="outros" required>
                <label for="outros">Outros</label>
                <br></br>
                <label for="data_nascimento"><b>Data de nascimento</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br></br>
                <div>
                    <input type="submit" name="submit" id="submit">
                </div>
            </fieldset>
        </form>

    </div>
</body>
</html>