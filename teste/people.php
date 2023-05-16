<?php
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "exemplo_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $dataNascimento = $_POST["data_nascimento"];
    $cpf = $_POST["cpf"];
    $genero = $_POST["genero"];
    $cidade = $_POST["cidade"];
    $bairro = $_POST["bairro"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];

    $stmt = $conn->prepare("INSERT INTO clientes (nome, data_nascimento, cpf, genero, cidade, bairro, rua, numero, complemento) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $nome, $dataNascimento, $cpf, $genero, $cidade, $bairro, $rua, $numero, $complemento);

    if ($stmt->execute() === TRUE) {
        echo "Cadastro realizado com sucesso.";
    } else {
        echo "Erro ao cadastrar: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
<?php
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "exemplo_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $dataNascimento = $_POST["data_nascimento"];
    $cpf = $_POST["cpf"];
    $genero = $_POST["genero"];
    $cidade = $_POST["cidade"];
    $bairro = $_POST["bairro"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];

    
    $stmt = $conn->prepare("INSERT INTO clientes (nome, data_nascimento, cpf, genero, cidade, bairro, rua, numero, complemento) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $nome, $dataNascimento, $cpf, $genero, $cidade, $bairro, $rua, $numero, $complemento);

    
    if ($stmt->execute() === TRUE) {
        echo "Cadastro realizado com sucesso.";
    } else {
        echo "Erro ao cadastrar: " . $conn->error;
    }

  
    $stmt->close();
    $conn->close();
}
?>
