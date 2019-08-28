<?php
include('verifica_login.php');
include ('conexao.php');
$consulta = 'SELECT * FROM CLIENTE';
$con = mysqli_query($conexao, $consulta) or die("Não foi possível trazer as informações!");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consulta Cliente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="../static/css/bootstrap.min.css" rel="stylesheet">
    <link href="../static/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="../static/images/B.ico" type="image/x-icon">
    <link rel="icon" href="../static/images/B.ico" type="image/x-icon">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 0">
    <a style="color : white" class="navbar-brand" href="index.php">LylliShoes</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a style="color : white" class="nav-link dropdown-toggle"   id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cliente
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="consultaCliente.php">Consultar</a>
                    <div class="dropdown-divider"></div>
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
<div id="main" class="container-fluid" style="margin-top: 50px">

    <div id="top" class="row">
        <div class="col-sm-3">
            <h2>Consulta de Clientes</h2>
        </div>
        <div class="col-sm-6">

            <div class="input-group h2">
                <input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Itens Por Nome...">
                <span class="input-group-btn">
					<button class="btn btn-primary" type="submit">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
            </div>

        </div>
        <div class="col-sm-3">
            <a href="cliente.php" class="btn btn-primary pull-right h2">Novo Cliente</a>
        </div>
    </div> <!-- /#top -->
    <hr />
    <div id="list" class="row">
        <div class="table-responsive col-md-14">
            <table class="table table-striped" cellspacing="0" cellpadding="0">
                <thead>
                <tr>
                    <th>NOME</th>
                    <th>CPF</th>
                    <th>NASCIMENTO</th>
                    <th>SEXO</th>
                    <th>TELEFONE</th>
                    <th>E-MAIL</th>
                    <th>CEP</th>
                    <th>RUA</th>
                    <th>NÚMERO</th>
                    <th>BAIRRO</th>
                    <th>CIDADE</th>
                    <th>ESTADO</th>
                    <th class="actions">AÇÃO</th>
                </tr>
                </thead>
                <?php while($dado = $con->fetch_array()){ ?>
                    <tbody>
                    <tr>
                        <td><?php echo $dado['NOME']; ?></td>
                        <td><?php echo $dado['CPF']; ?></td>
                        <td><?php echo $dado['DATA_NASCIMENTO']; ?></td>
                        <td><?php echo $dado['SEXO']; ?></Td>
                        <td><?php echo $dado['TELEFONE']; ?></td>
                        <td><?php echo $dado['EMAIL']; ?></td>
                        <td><?php echo $dado['CEP']; ?></td>
                        <td><?php echo $dado['RUA']; ?></td>
                        <td><?php echo $dado['NUMERO']; ?></td>
                        <td><?php echo $dado['BAIRRO']; ?></td>
                        <td><?php echo $dado['CIDADE']; ?></td>
                        <td><?php echo $dado['ESTADO']; ?></td>
                        <td class="actions">
                            <a class="btn btn-success btn-xs" href="#">Detalhe</a>
                            <a class="btn btn-danger btn-xs"  href="deletar.php" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                        </td>
                    </tr>
                    </tbody>
                <?php } ?>
            </table>
        </div>

    </div> <!-- /#list -->

    <div id="bottom" class="row">
        <div class="col-md-12">
            <ul class="pagination">
                <li class="disabled"><a>&lt; Anterior</a></li>
                <li class="disabled"><a>1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li class="next"><a href="#" rel="next">Próximo &gt;</a></li>
            </ul><!-- /.pagination -->
        </div>
    </div> <!-- /#bottom -->
</div> <!-- /#main -->

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
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>