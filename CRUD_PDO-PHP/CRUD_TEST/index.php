<?php require_once "includes/header.php"; // head
require_once "Cliente.php"; // cliente

$cliente = new Cliente("localhost", "crudtest", "root", ""); // objeto
$dados = $cliente->read();

?>
<!-- header -->


<br><!-- titulo -->
<h1 class="mx-auto" style="width: 200px;"> Clientes </h1>
<br>


<div class="container">

    <!-- tabela -->
    <table class="table table-striped table-dark">
        <thead>
            <tr class="bg-success">
                <th scope="col">nome</th>
                <th scope="col">sobrenome</th>
                <th scope="col">idade</th>
                <th scope="col">email</th>
                <th></th>
            </tr>
        </thead>

        <?php

        // GERADOR DA TABELA
        if (count($dados) > 0) {

            for ($i = 0; $i < count($dados); $i++) { // looping 


        ?>


                <tbody>
                    <!-- TABELA COM REGISTRO-->
                    <tr>
                        <td><?php echo $dados[$i]['nome']; ?></td>
                        <td><?php echo $dados[$i]['sobrenome'] ?></td>
                        <td><?php echo $dados[$i]['idade'] ?></td>
                        <td><?php echo $dados[$i]['email'] ?></td>
                        
                        
                        <!-- editar -->
                        <td> <a class="btn btn-secondary btn-sm " href="editar.php?id=<?php echo $dados[$i]['id'] ?>" role="button" style="margin:2%;">Editar</a>

                        <!-- apagar -->
                        <a class="btn btn-secondary btn-sm btn-danger" role="button" href="apagar.php?id=<?php echo $dados[$i]['id']; ?>" style="margin:2%;">Apagar</a></td>
                        
                    </tr>

                </tbody>


        <?php

            }
        } else { // TABELA SEM REGISTROS
            echo "<tbody>
            <tr>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
            </tr>
            
        </tbody>";
        }

        ?>

    </table>

    <!-- cadastrar -->
    <a href="cadastrar.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"> Cadastrar</a>
</div>






<!-- footer -->
<?php require_once "includes/footer.php"; ?>