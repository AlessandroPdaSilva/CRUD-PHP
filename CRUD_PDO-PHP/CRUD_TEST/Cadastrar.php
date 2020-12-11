<?php require_once "includes/header.php"; ?>
<!-- header -->

<body>
    <br>
    <div class="container">

        <h1 style="text-align: center;"> Novo Cliente </h1>
        <br>


        <?php // ENVIO 
            require_once "Cliente.php";

            if( isset($_POST['btn-cadastro']) ){// clicou botao
                
                $nome = addslashes($_POST['nome']);
                $sobrenome = addslashes($_POST['sobrenome']);
                $email = addslashes($_POST['email']);
                $idade = addslashes($_POST['idade']);

                if( empty($nome) || empty($sobrenome) || empty($email) || empty($idade)){// campo vazio

                    echo '<div class="alert alert-danger" role="alert">
                            Preencha todos os campos
                        </div>';

                }else{

                    $cliente = new Cliente("localhost","crudtest","root","");// conectando
                    $cliente-> create($nome,$sobrenome,$email,$idade);// inserindo

                    if( $cliente == true){// alert success
                        echo '<div class="alert alert-success" role="alert">
                            Cadastrado com sucesso
                        </div>';
                    }
                }


            }   

            // FIM ENVIO
        ?>

        <!-- formulario -->
        <form action="Cadastrar.php" method="post">
            


            <!-- nome / sobrenome -->
            
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nome" required=""  name="nome">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Sobrenome" required="" name="sobrenome">
                    </div>
                </div>
            

            <br>

            <!-- email / idade -->
           
                <div class="row">
                    <div class="col">
                        <input type="email" class="form-control" placeholder="Email" required="" name="email" >
                    </div>
                    <div class="col-md-3">
                        <input id="idade" name="idade" placeholder="Ex: 18" class="form-control input-md" required="" type="text" name="idade">
                    </div>
                </div>
            

            <br>

            
            
            <!-- enviar cadastro-->
            <button type="submit" class="btn btn-success" name="btn-cadastro">Cadastrar</button>

            <!-- voltar para clientes-->
            <a href="index.php" class="btn btn-primary"> Voltar</a>


        </form>

    </div>
</body>



<!-- footer -->
<?php require_once "includes/footer.php"; ?>