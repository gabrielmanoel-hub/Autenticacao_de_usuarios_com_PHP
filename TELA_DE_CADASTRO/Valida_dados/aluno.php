<html>

<body>
    <?php
    // Declaração de variável
    $nome = $_POST["name"];
    $matricula = $_POST["matricula"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $nascimento = $_REQUEST["nascimento"];
    $sexo = $_POST["sexo"];
    $nomeDaMae = $_POST["nomeDaMae"];
    $rg = $_POST["rg"];
    $telefone = $_POST["telefone"];
    $cursoAluno = $_POST["cursoAluno"];
    $turno = $_POST["turno"];
    $anoDeMatricula = $_REQUEST["anoDeMatricula"];
    $logradouro = $_POST["logradouro"];
    $numero = $_POST["numero"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    
    // Contar erros do formulário
    $erro = [];
    
    // Eliminar o ponto e barra do CPF.
    $limpaCpf = preg_replace('/[.\-]/', '', $cpf);
    // Higieniza, verifica se email e válido.
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    // Formata data para os padrões brasileiros.
    $formataNascimento = date('d/m/Y', strtotime($nascimento));
    // Converte matricula para inteiro.
    $formataAnoDeMatricula = intval($anoDeMatricula);
    // Ano atual.
    $dataAtual = intval(date("Y"));
    // Validação do campo nome e sobrenome.
    if (str_Word_count($nome) < 2 || empty($nome)) {
        //  str_Word_count ==> Conta o número de palavras.
        //  empty ==> Verifica se determinada string está vazia(nula).
        echo "1- <span style='color:red;'> ERRO! </span> Informe nome e sobrenome <br>";
        array_unshift($erro, 1);
    }
    if (preg_match_all("/[a-zA-Z]/", $matricula) < 2 || preg_match_all("/[0-9]/", $matricula) < 4) {
        echo  "2- <span style='color:red;'> ERRO! </span> Matricula deve posuir 2 letras e 4 números <br>";
        array_unshift($erro, 1);
    }
    if (strlen($limpaCpf) < 11) {
        // strlen ==> Retorna o número de caracteres de uma string.
        echo "3- <span style='color:red;'> ERRO! </span> CPF invalido <br>";
        array_unshift($erro, 1);
    }
    if (strstr($email, '@') == false) {
         // strstr ==> Acha a primeira ocorrência de uma string. Senão encontrar retorna falso.
        echo "4- <span style='color:red;'> ERRO! </span> Formato de email invalido<br>";
        array_unshift($erro, 1);
    }
    if (($nascimento == $formataNascimento) || empty($nascimento)) {
        //  empty ==> Verifica se determinada string está vazia(nula).
        echo "5- <span style='color:red;'> ERRO! </span> Preencher data com DD/MM/YY<br>";
        array_unshift($erro, 1);
    }
    if (strlen($sexo) > 1 || empty($sexo)) {
        // strlen ==> Retorna o número de caracteres de uma string.
        //  empty ==> Verifica se determinada string está vazia(nula).
        echo "6- <span style='color:red;'> ERRO! </span> Informar M para sexo Masculino  ou F para sexo Feminino<br>";
         array_unshift($erro, 1);
       
    }
    if (str_Word_count($nomeDaMae) < 2 || empty($nomeDaMae)) {
        //  str_Word_count ==> Conta o número de palavras.
        //  empty ==> Verifica se determinada string está vazia(nula). 
        echo "7-<span style='color:red;'> ERRO! </span> Preenchimento com nome o sobrenome obrigatório<br>";
        array_unshift($erro, 1);
    }
    if (empty($rg)) {
        //  empty ==> Verifica se determinada string está vazia(nula).
        echo "8- <span style='color:red;'> ERRO! </span>Preenchimento do RG é obrigatório<br>";
        array_unshift($erro, 1);
    }
    if (strlen($telefone) < 11) {
         // strlen ==> Retorna o número de caracteres de uma string.
        echo "9-<span style='color:red;'> ERRO! </span> Número de telefone inválido<br>";
        array_unshift($erro, 1);
    }
    if (empty($cursoAluno)) {
        //  empty ==> Verifica se determinada string está vazia(nula).
        echo "10- <span style='color:red;'> ERRO! </span> Preencher curso matriculádo<br>";
        array_unshift($erro, 1);
    }
    if (empty($turno)) {
        //  empty ==> Verifica se determinada string está vazia(nula).
        echo "11-<span style='color:red;'> ERRO! </span> Preencher turno<br>";
        array_unshift($erro, 1);
    }
    if (($formataAnoDeMatricula > $dataAtual) || empty($anoDeMatricula)) { // Verifica Ano de matrícula e maior que data atual.
        //  empty ==> Verifica se determinada string está vazia(nula).
        echo "12-<span style='color:red;'> ERRO! </span> O ano de matricula deve ser menor que o ano atual<br>";
        array_unshift($erro, 1);
    }
    if (empty($logradouro)) {
        //  empty ==> Verifica se determinada string está vazia(nula).
        echo "13- <span style='color:red;'> ERRO! </span> Informe o endereço<br>";
        array_unshift($erro, 1);
    }
    if (empty($numero)) {
        //  empty ==> Verifica se determinada string está vazia(nula).
        echo "14- <span style='color:red;'> ERRO! </span> Informe o número do endereço<br>";
        array_unshift($erro, 1);
    }
    if (empty($bairro)) {
        //  empty ==> Verifica se determinada string está vazia(nula).
        echo "15- <span style='color:red;'> ERRO! </span> Informa o bairro<br>";
        array_unshift($erro, 1);
    }
    if (empty($cidade)) {
        //  empty ==> Verifica se determinada string está vazia(nula).
        echo "16- <span style='color:red;'> ERRO! </span> Informe a cidade<br>";
        array_unshift($erro, 1);
    }
    if (strlen($estado) != 2) {
        // strlen ==> Retorna o número de caracteres de uma string.
        echo "17- <span style='color:red;'> ERRO!</span> O estado deve possuir 2 letras";
        array_unshift($erro, 1);
    }if( count($erro) == 0){
         // Se todas ocorrências estiverem ok ira informar os dados abaixo.
        echo "<h1>Cadastro efetuado com sucesso!!</h1><br>";
        echo "<span style='font-weight:bold;'>Nome: </span>", $nome, "<br>";
        echo "<span style='font-weight:bold;'>Matrícula: </span>", $matricula, "<br>";
        echo "<span style='font-weight:bold;'>CPF: </span>", $cpf, "<br>";
        echo "<span style='font-weight:bold;'>Email: </span>", $email, "<br>";
        echo "<span style='font-weight:bold;'>Nascimeto: </span>", $nascimento, "<br>";
        echo "<span style='font-weight:bold;'>Sexo: </span>", $sexo, "<br>";
        echo "<span style='font-weight:bold;'>Nome da Mãe: </span>", $nomeDaMae, "<br>";
        echo "<span style='font-weight:bold;'>RG: </span>", $rg, "<br>";
        echo "<span style='font-weight:bold;'>Telefone: </span>", $telefone, "<br>";
        echo "<span style='font-weight:bold;'>Curso: </span>", $cursoAluno, "<br>";
        echo "<span style='font-weight:bold;'>Turno: </span>", $turno, "<br>";
        echo "<span style='font-weight:bold;'>Ano de Matrícula: </span>", $anoDeMatricula, "<br>";
        echo "<span style='font-weight:bold;'>Logradouro: </span>", $logradouro, "<br>";
        echo "<span style='font-weight:bold;'>Numero: </span>", $numero, "<br>";
        echo "<span style='font-weight:bold;'>Bairro: </span>", $bairro, "<br>";
        echo "<span style='font-weight:bold;'>Cidade: </span>", $cidade, "<br>";
        echo "<span style='font-weight:bold;'>Estado: </span>", $estado, "<br>";
    }
    ?>

</body>

</html>