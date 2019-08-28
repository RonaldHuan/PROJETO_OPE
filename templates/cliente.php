<?php
include('verifica_login.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CADASTRO CLIENTE</title>
    <link href="../static/css/css.css" rel="stylesheet">
    <link href="../static/css/style.css" rel="stylesheet">
    <link href="../static/css/js.js" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="../static/images/B.ico" type="image/x-icon">
    <link rel="icon" href="../static/images/B.ico" type="image/x-icon">
    <script>
        function mascaraCpf(i){
            var v = i.value;
            if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
                i.value = v.substring(0, v.length-1);
                return;
            }
            i.setAttribute("maxlength", "14");
            if (v.length == 3 || v.length == 7) i.value += ".";
            if (v.length == 11) i.value += "-";
        }
        function mascaraCep(c) {
            var cep = c.value;
            if(isNaN(cep[cep.length-1])){ // impede entrar outro caractere que não seja número
                i.value = cep.substring(0, cel.length-1);
                return;
            }
            c.setAttribute("maxlength", "9");
            if (cep.length == 5) c.value += "-";
        }
        function mascaraTel(t){
            var tel = t.value
            if(isNaN(tel[tel.length-1])){ // impede entrar outro caractere que não seja número
                t.value = tel.substring(0, tel.length-1);
                return;
            }
            t.setAttribute("maxlength", "13");
            if (tel.length == 2) t.value += " ";
            if (tel.length == 8) t.value += "-";
        }
        function mascaraData(d){
            var data = d.value
            if(isNaN(data[data.length-1])){ // impede entrar outro caractere que não seja número
                d.value = data.substring(0, data.length-1);
                return;
            }
            d.setAttribute("maxlength", "10");
            if (data.length == 2 || data.length == 5) d.value += "/";
        }

    </script>
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
                <a style="color : white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a class="dropdown-item" href="#">Consultar</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a style="color : white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                                Vendas
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Consultar</a>
                </div>

            </li>
            <li class="nav-item dropdown">
                <a style="color : white" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                                       Produto
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Consultar</a>
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
    <form class="form-horizontal" method="POST" action="processa.php">
        <div class="col-md-11 control-label">
            <h1 id="titulo">Cadastro Cliente</h1>
        </div>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-2 control-label" for="pnome">Nome <h11>*</h11></label>
            <div class="col-md-8">
                <input type="text" id="pnome" name="nome" placeholder="" class="form-control input-md" required="">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-2 control-label" for="cpf">CPF <h11>*</h11></label>
            <div class="col-md-2">
                <input id="cpf" name="cpf" oninput="mascaraCpf(this)" placeholder="Apenas números" class="form-control input-md" type="text" maxlength="14" required="">
            </div>

            <label class="col-md-1 control-label" for="dtnasc">Nascimento<h11>*</h11></label>
            <div class="col-md-2">
                <input id="dtnasc" name="dtnasc" oninput="mascaraData(this)" required="" placeholder="dd/mm/yyyy" maxlength="10" class="form-control input-md" type="text">
            </div>
            <!-- Multiple Radios (inline) -->
            <label class="col-md-1 control-label" for="femn">Sexo <h11>*</h11></label>
            <div class="col-md-4">
                <label class="radio-inline" for="radios-0">
                    <input name="sexo" id="femn" value="Feminino" type="radio">Feminino
                </label>
                        <label class="radio-inline" for="masc">
                            <input name="sexo" id="masc" value="Masculino" type="radio">Masculino
                        </label>
                    </div>
                </div>
                <!-- Prepended text-->
                <div class="form-group">
                    <label class="col-md-2 control-label" for="tel">Telefone <h11>*</h11></label>
                    <div class="col-md-2">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input id="tel" name="telefone" oninput="mascaraTel(this)" required="" class="form-control" placeholder="XX XXXXX-XXXX" type="tel" maxlength="13">
                        </div>
                    </div>
                    <!-- Prepended text-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="email">Email (Opcional)</label>
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input id="email" name="email" class="form-control" placeholder="email@email.com" type="email">
                            </div>
                        </div>
                    </div>
                    <!-- Search input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="cep">CEP <h11>*</h11></label>
                        <div class="col-md-2">
                            <input id="cep" name="cep" oninput="mascaraCep(this)" placeholder="Apenas números" class="form-control input-md" type="text" maxlength="8">
                        </div>
                    </div>

                    <!-- Prepended text-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="endereco">Endereço</label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon">Rua</span>
                                <input id="endereco" name="rua" placeholder="" class="form-control input-md" type="text">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group">
                                <span class="input-group-addon">Nº</span>
                                <input id="numero" name="numero" class="form-control" placeholder="" type="text">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon">Bairro</span>
                                <input id="Bairro" name="bairro" placeholder="" class="form-control input-md" type="text">
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label" for="cidade"></label>
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon">Cidade <h11>*</h11></span>
                                <input id="cidade" name="cidade" placeholder="" class="form-control input-md" type="text">
                            </div>

                        </div>

                        <div class="col-md-2">
                            <div class="input-group">
                                <span class="input-group-addon">Estado <h11>*</h11></span>
                                <div class="box">
                                <select name="estado">
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AP">AP</option>
                                    <option value="AM">AM</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MT">MT</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SP">SP</option>
                                    <option value="SE">SE</option>
                                    <option value="TO">TO</option>
                                </select>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="Cadastrar"></label>
                        <div class="col-md-8">
                            <button id="Cadastrar" class="btn btn-success" id="info" type="Submit">Cadastrar</button>
                            <a href="index.php">
                                <button class="btn btn-danger">Cancelar</button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
    </form>
</body>
</html>