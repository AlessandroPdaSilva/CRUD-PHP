<?php require_once "includes/header.php"; ?>
<!-- header -->

<body>
    <br>
    <div class="container">

        <h1 style="text-align: center;"> <span style="color:red;">DELETAR</span> </h1><!-- titulo-->
        <br>
        <?php // MENSAGEM
        require_once "Cliente.php";

        $cliente = new Cliente("localhost", "crudtest", "adm", "1234"); // conectando
        $dados = $cliente -> buscar($_GET['id']);




        if( isset($_GET['id'] ) ){ // VERIFICACAO 



            echo "<br><h3> Tem certeza que deseja EXCLUIR o registro de ".$dados[0]['nome']." ".$dados[0]['sobrenome']."?</h3> <br>";
        
        // pergunta 
        echo '

        <form action="" method="post">
            
            <button class="btn btn-danger btn-lg active" role="button" aria-pressed="true" type="submit" value="<?php echo $id; ?>" name="id"> Sim, quero EXCLUIR</button>

            <a href="index.php" class="btn btn-success btn-lg active" role="button" aria-pressed="true"> Não , não quero excluir </a>
        </form>

        ';


         
        
        

        }


        // ENVIO 
        require_once "Cliente.php";

        if (isset($_POST['id']) ) {// verificao do botao


            if (isset($_GET['id'])) { // pegar id

                $id = addslashes($_GET['id']);

                if (filter_var($id, FILTER_VALIDATE_INT)) { // validando id

                    $cliente = new Cliente("localhost", "crudtest", "root", ""); // conectando
                    $cliente->delete($id); // query

                    header("location: index.php");

                }
            }
        }


        ?>


    </div>
</body>



<!-- footer -->
<?php require_once "includes/footer.php"; ?>