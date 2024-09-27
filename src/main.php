<?php



//dados enviados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['password'];

$server = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'aula_pdo_banco';

$conn  = new mysqli($server,$usuario,$senha,$banco);

if($conn-> connect_error){
    die("Falha ao comunicar com o servidor".$conn-> connect_error);
}

$smtp = $conn->prepare("INSERT INTO cadastro (nome, email, senha) VALUES (?,?,?)");
$smtp->bind_param("sss", $nome, $email, $senha);

if($smtp->execute()){
    echo"Cadastro feito com sucesso!";
}else{
    echo "Cadastro não realizado com sucesso" .$smtp->error;
}

$smtp->close();
$conn->close();