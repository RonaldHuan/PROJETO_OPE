<?php
include("conexao.php");
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$data_nascimento = $_POST['dtnasc'];
$sexo = $_POST['sexo'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

// Inserir dados no banco CLIENTES
/*$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$ultima_compra = $_POST['ultcompra'];
$data_aniversario = $_POST['dtaniversario'];*/

$info_cliente = "INSERT INTO CLIENTE (NOME, CPF, DATA_NASCIMENTO, SEXO, TELEFONE, EMAIL, CEP, RUA, NUMERO, BAIRRO, CIDADE, ESTADO) VALUES ('$nome','$cpf', '$data_nascimento', '$sexo', '$telefone', '$email', '$cep', '$rua', '$numero', '$bairro', '$cidade', '$estado')";
$cadastra_cliente = mysqli_query($conexao, $info_cliente) or die ("Erro ao tentar cadastrar registro");

/*$info_cliente = "INSERT INTO CLIENTES (NOME, SOBRENOME, EMAIL, ENDERECO, TELEFONE, ULTIMA_COMPRA, DATA_ANIVERSARIO) VALUES ('$nome', '$sobrenome', '$email', '$endereco', '$telefone', '$ultima_compra', '$data_aniversario')";
$cadastra_cliente = mysqli_query($conexao, $info_cliente) or die ("Erro ao tentar cadastrar registro");
mysqli_close($cadastra_cliente);
echo "Cliente cadastrado com sucesso!";*/

if(mysqli_insert_id($conexao)){
    $_SESSION['msg'] = true;    
    header("Location: cliente.php");
}
else{   
    header("Location: cliente.php");
}
?>
