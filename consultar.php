<?php
                
    //importação 
    require_once("pessoa.class.php");
    $pessoa = new Pessoa();

    //passar um valor para o método setNome
    $pessoa->setNome($_POST['nome']);
    //passar um valor para o método setTelefone
    $pessoa->setTelefone($_POST['telefone']);
    //passar um valor para o método setOrigem
    $pessoa->setOrigem($_POST['origem']);
    //passar um valor para o método setData
    $pessoa->setData($_POST['data']);
    //passar um valor para o método setObservacao
    $pessoa->setObservacao($_POST['observacao']);

?>

<!DOCTYPE html>
<html lang="en">

<!-- Cabeçalho do código HTML -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Titúlo da página -->
    <title>Consultar Dados</title>
</head>

<!-- Edição do corpo do código HTML, Coloração do Fundo da página e edição da posição do texto  -->
<body class= "bg-dark-subtle">
    <div class="container text-center bg-dark-subtle">

        <!-- Linha e Coluna criada para página responsiva -->
        <div class="row">
            <div class="col-1">
                &nbsp;
            </div>

            <!-- Barra de Navegação: -->
            <div class="col bg-primary">
                <nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark">
                    <div class="container-fluid">
                        <!-- Barra de Navegação com o nome SISTEMA WEB -->
                        <!-- OBS: navbar-brand para o nome de seu projeto, produto ou companhia -->
                        <a class="navbar-brand" href="#">SISTEMA WEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- OBS: navbar-nav para obter uma leve navegação com suporte a dropdowns -->
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <!-- Link da barra de Navegação Cadastrar -->
                                <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php">Cadastrar</a>
                                </li>
                                 <!-- Link da barra de Navegação Consultar -->
                                <li class="nav-item">
                                <a class="nav-link active" href="#">Consultar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            <!-- Coluna criada para página responsiva -->
            <div class="col-1">
                &nbsp;
            </div>
        </div>


        <!-- Linha e coluna criada para página responsiva -->
        <div class="row">
            <div class="col-1">
                &nbsp;
            </div>

            <!-- Cor do Fundo da página de Formulário e edição de texto-->
            <div class="col bg-white p-4">
                
                <!-- Título -->
                <div style="margin-left: 300px">
                <p style="margin-right: 300px" class="text-start fs-5">Consultar - Contatos Agendados</p>
                <!-- Grid de 1 linha e 5 colunas para separação de titulos -->
                <div style="margin-right: 300px" class="col bg-primary">
                <div style="padding-bottom: 10px" class="container text-center">
                <div style="padding-top: 10px">
                    <div class="row">
                    <div class="col">
                        <strong>Nome</Strong>
                    </div>
                    <div class="col">
                        <strong>Telefone</Strong>
                    </div>
                    <div class="col">
                        <strong>Origem</Strong>
                    </div>
                    <div class="col">
                        <strong>Contato</Strong>
                    </div>
                    <div class="col">
                        <strong>Observação</Strong>
                    </div>
                    </div>
                    </div>
                </div>
                 
                </div>   
                <!-- Grid de 1 linha e 5 colunas para consultar dados dce cada área -->
                <div style="margin-right: 300px">
                <div class="container text-center">
                <div style="padding-top: 10px">
                    <div class="row">
                    <div class="col">
                        <?php
                        //imprimir o valor do método getNome
                        echo $pessoa->getNome();
                        ?>
                    </div>
                    <div class="col">
                        <?php
                        //imprimir o valor do método getTelefone
                        echo $pessoa->getTelefone();
                        ?>
                    </div>
                    <div class="col">
                        <?php
                        //imprimir o valor do método getOrigem
                        echo $pessoa->getOrigem();
                        ?>
                    </div>
                    <div class="col">
                        <?php
                        //imprimir o valor do método getData
                        echo $pessoa-> getData();
                        ?>
                    </div>
                    <div class="col">
                        <?php
                        //imprimir o valor do método getObservacao
                        echo $pessoa->getObservacao();
                        ?>
                    </div>
                    </div>
                    </div>
                </div>
                </div> 
                </div>   
  
            </div>

            <!-- Coluna criada para página responsiva -->
            <div class="col-1">
                &nbsp;
            </div>
        </div>
    </div> 

</body>
</html>