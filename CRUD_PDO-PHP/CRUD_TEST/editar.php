<?php require_once "includes/header.php"; ?>
<!-- header -->

<body>
    <br>
    <div class="container">

        <h1 style="text-align: center;"> Editar Cliente </h1>
        <br>


        <?php // ENVIO 
        require_once "Cliente.php";

        

        if ( isset($_GET['id']) ) {// id valido
            
            $id = addslashes($_GET['id']);
            $cliente = new Cliente("localhost", "crudtest", "root", "");
            $dados = $cliente -> buscar($id);// buscar cliente
            


            if (isset($_POST['btn-editar'])) { // clicou botao
                
                
                $nome = addslashes($_POST['nome']);
                $sobrenome = addslashes($_POST['sobrenome']);
                $email = addslashes($_POST['email']);
                $idade = addslashes($_POST['idade']);

                if (empty($nome) || empty($sobrenome) || empty($email) || empty($idade)) { // campo vazio

                    echo '<div class="alert alert-danger" role="alert">
                            Preencha todos os campos
                        </div>';
                } else {

                    
                    $cliente = new Cliente("localhost", "crudtest", "root", ""); // conectando
                    $cliente->update($id, $nome, $sobrenome, $email, $idade); // inserindo
                    
                    

                    

                    if ($cliente == true) { // alert success
                        echo '<div class="alert alert-success" role="alert">
                            Editado com sucesso
                        </div>';
                    }
                }
            }
        }

        // FIM ENVIO



        ?>

        <!-- formulario -->
        <form action="" method="post" >



            <!-- nome / sobrenome -->

            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nome" required="" name="nome" value="<?php if( isset($_POST['btn-editar']) ){echo ""; }else{echo $dados[0]['nome'];}?>">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Sobrenome" required="" name="sobrenome" value="<?php if( isset($_POST['btn-editar']) ){echo ""; }else{echo $dados[0]['sobrenome'];}?>">
                </div>
            </div>


            <br>

            <!-- email / idade -->

            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Email" required="" name="email" value="<?php if( isset($_POST['btn-editar']) ){echo ""; }else{echo $dados[0]['email'];}?>">
                </div>
                <div class="col-md-3">
                    <input id="idade" name="idade" placeholder="Ex: 18" class="form-control input-md" required="" type="text" name="idade" value="<?php if( isset($_POST['btn-editar']) ){echo ""; }else{echo $dados[0]['idade'];}?>">
                </div>
            </div>


            <br>



            <!-- enviar cadastro-->
            <button type="submit" class="btn btn-success" name="btn-editar" >Editar</button>

            <!-- voltar para clientes-->
            <a href="index.php" class="btn btn-primary"> Voltar</a>


        </form>

        
    </div>
</body>



<!-- footer -->
<?php require_once "includes/footer.php"; ?>