<?php

//conectanto banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$database = "crud";

$conn = new mysqli($servername, $username, $password, $database);

//Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
<?php

// Pegar os dados do formulário
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$contato = $_POST['contato'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$mensagem = $_POST['mensagem'];

$sql = "INSERT INTO users
    SET
            nome = '$nome',
            idade = '$idade',
            contato = '$contato',
            email = '$email',
            sexo = '$sexo',
            mensagem = '$mensagem'";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso";
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}

/*Fechar conexão
$conn->close();
?>*/

// Operação de Criar
$sql_insert = "INSERT INTO users
        SET
            nome = '$nome',
            idade = '$idade',
            contato = '$contato',
            email = '$email',
            sexo = '$sexo',
            mensagem = '$mensagem'";
/*if ($conn->query($sql_insert) === TRUE) {
    echo "Registro criado com sucesso";
} /*else {
    echo "Erro ao criar registro: " . $conn->error;
}*/





// Fechar conexão
$conn->close();
?>