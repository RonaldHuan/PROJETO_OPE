<?php
    include('verifica_login.php');
    include('conexao.php');
    $codigo = 'SELECT * FROM CLIENTE';
    $deleta = mysqli_query($conexao, $codigo) or die ("Não foi possível selecionar o cliente");
    $dado = $deleta->fetch_array();
    $apaga = $dado['ID'];
    $sql_code = "DELETE FROM CLIENTE WHERE ID = '$apaga'";
    $sql_query = mysqli_query($conexao, $sql_code) or die("Não foi possível apagar o cliente");
    if ($sql_query)
        echo "
            <script>
                location.href='consultaCliente.php';
            </script>";
    else
        echo "
            <script>
                alert('Não foi possível deletar o cliente');
                location.href='consultaCliente.php';
            </script>";
?>