<?php
    include('verifica_login.php');
    include ('conexao.php');
    $consulta = 'SELECT * FROM CLIENTE';
    $con = mysqli_query($conexao, $consulta) or die("Não foi possível trazer as informações!");
    $dado = $con->fetch_array();
    $mostra = $dado['ID'];
    $sql_code = "SELECT * FROM CLIENTE WHERE ID = '$mostra'";
    $sql_query = mysqli_query($conexao, $sql_code) or die("Não foi possível detalhar as informações!");
    $dado_preciso = $sql_query->fetch_array();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Visualizar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="../static/css/bootstrap.min.css" rel="stylesheet">
    <link href="../static/css/style.css" rel="stylesheet">
</head>
<body>

<!-- Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabel">Excluir Cliente</h4>
            </div>
            <div class="modal-body">
                Deseja realmente excluir este item?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Sim</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 0">
    <a style="color : white" class="navbar-brand" href="#">Lylli Shoes</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a style="color : white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cliente
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Cadastrar</a>
                    <a class="dropdown-item" href="#">Consultar</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Excluir</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a style="color : white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                               Fornecedor
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Cadastrar</a>
                    <a class="dropdown-item" href="#">Consultar</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Excluir</a>
                </div>

            </li>
            <li class="nav-item dropdown">
                <a style="color : white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                                Vendas
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Cadastrar</a>
                    <a class="dropdown-item" href="#">Consultar</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Excluir</a>
                </div>

            </li>
            <li class="nav-item dropdown">
                <a style="color : white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                                       Produto
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Cadastrar</a>
                    <a class="dropdown-item" href="#">Consultar</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Excluir</a>
                </div>

            </li>
            <li class="nav-item dropdown">
                <a style="color : white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                                      Calendario
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Consultar</a>
                </div>

            </li>


        </ul>

    </div>
</nav>

<div id="main" class="container-fluid">
    <h3 class="page-header">Visualizar Dados do Cliente</h3>

    <div class="row">
        <div class="col-md-4">
            <p><strong>Nome</strong></p>
            <p><?php echo $dado_preciso['NOME'] ?></p>
        </div>

        <div class="col-md-4">
            <p><strong>CPF</strong></p>
            <p><?php echo $dado_preciso['CPF'] ?></p>
        </div>

        <div class="col-md-4">
            <p><strong>Telefone</strong></p>
            <p><?php echo $dado_preciso['TELEFONE'] ?></p>
        </div>

        <div class="col-md-4">
            <p><strong>Email</strong></p>
            <p><?php echo $dado_preciso['EMAIL'] ?></p>
        </div>

        <div class="col-md-4">
            <p><strong>Nascimento</strong></p>
            <p><?php echo $dado_preciso['DATA_NASCIMENTO'] ?></p>
        </div>

        <div class="col-md-4">
            <p><strong>Sexo</strong></p>
            <p><?php echo $dado_preciso['SEXO'] ?></p>
        </div>

        <div class="col-md-4">
            <p><strong>CEP</strong></p>
            <p><?php echo $dado_preciso['CEP'] ?></p>
        </div>

        <div class="col-md-4">
            <p><strong>Rua</strong></p>
            <p><?php echo $dado_preciso['RUA'] ?></p>
        </div>

        <div class="col-md-4">
            <p><strong>Cidade</strong></p>
            <p><?php echo $dado_preciso['CIDADE'] ?></p>
        </div>

        <div class="col-md-8">
            <p><strong>Bairro</strong></p>
            <p><?php echo $mostra ?></p>
        </div>
    </div>

    <hr />
    <div id="actions" class="row">
        <div class="col-md-12">
            <a href="consultaCliente.php" class="btn btn-primary">Fechar</a>
            <a href="deletar.php" class="btn btn-default" data-toggle="modal" data-target="#delete-modal">Excluir</a>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>