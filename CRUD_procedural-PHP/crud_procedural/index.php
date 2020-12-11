<?php require_once "includes/header.php"; // header
require_once "php_action/connect_db.php"; ?>


<body>
    <br>
    <div class="container">

        <h1 class="mx-auto" style="width: 200px;"> Clientes </h1>
        <br>

        <table class="table">
            <thead class="thead-dark">
                <!-- tabela head-->
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Idade</th>
                    <th scope="col"></th>
                </tr>
            </thead>


            <?php require_once "php_action/read.php"; ?>
            <!-- tabela-->



        </table>

        

        <!-- cadastro botao-->
        <a href="cadastrar.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"> Cadastrar</a>


        <?php require_once "includes/footer.php"; ?>
        <!-- footer-->