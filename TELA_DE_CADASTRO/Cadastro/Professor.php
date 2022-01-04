<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Cadastro Professor</title>
</head>

<body>
    <button class="Home btButton"><a href="../Home.php">Home</a></button>
    <div class="container">
        <form method="POST" action="../Valida_dados/Professor.php">
            <div>
                <p>Nome</p>
                <input type="text" name="name" placeholder="Insira o nome e sobrenome">
            </div>
            <div>
                <p>Matricula</p>
                <input type="text" name="matricula" placeholder="Matricula">
            </div>
            <div>
                <p>CPF</p>
                <input type="text" name="cpf" placeholder="CPF">
            </div>
            <div>
                <p>E-mail</p>
                <input type="text" name="email" placeholder="Email">
            </div>
            <div>
                <p>Nascimento</p>
                <input class="nascimento" type="date" name="nascimento">
            </div>
            <div>
                <p>Sexo</p>
                <input type="text" name="sexo" placeholder="Informe M ou F">
            </div>
            <div>
                <p>Nome da Mãe</p>
                <input type="text" name="nomeDaMae" placeholder="Nome da Mãe">
            </div>
            <div>
                <p>RG</p>
                <input type="text" name="rg" placeholder="RG">
            </div>
            <div>
                <p>Contato com DDD</p>
                <input type="tel" name="telefone" placeholder="Contato com DDD">
            </div>
            <div>
                <p>Formação</p>
                <input type="text" name="formacao" placeholder="Formação">
            </div>
            <div>
                <p>Instituição que se formou</p>
                <input type="text" name="cursou" placeholder="Instituição que se formou">
            </div>
            <div>
                <p>Logradouro</p>
                <input type="text" name="logradouro" placeholder="Endereço">
            </div>
            <div>
                <p>Número</p>
                <input type="text" name="numero" placeholder="Número">
            </div>
            <div>
                <p>Bairro</p>
                <input type="text" name="bairro" placeholder="Bairro">
            </div>
            <div>
                <p>Cidade</p>
                <input type="text" name="cidade" placeholder="Cidade">
            </div>
            <div>
                <p>Estado</p>
                <input type="text" name="estado" placeholder="Estado">
            </div>
            <div>
                <input class="btButton" type="submit" value="Enviar">
            </div>
        </form>
    </div>
</body>

</html>