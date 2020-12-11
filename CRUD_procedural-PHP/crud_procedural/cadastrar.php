<?php require_once "includes/header.php"; ?><!-- header -->


<body>
    <br>
    <div class="container">

        <h1 style="text-align: center;"> Novo Cliente </h1>
        <br>

        <form action="php_action/create.php" method="post" ><!-- formulario -->

            

            <div class="form-group"><!-- input nome-->
                <label class="col-md-2 control-label" for="nome">Nome <h11>*</h11></label>
                <div class="col-md-8">
                    <input id="nome" name="nome" placeholder="Ex: Marcos" class="form-control input-md" required="" type="text">
                </div>

            </div>


            <div class="form-group"><!-- input sobrenome-->
                <label class="col-md-2 control-label" for="sobrenome">Sobrenome <h11>*</h11></label>
                <div class="col-md-8">
                    <input id="sobrenome" name="sobrenome" placeholder="Ex: Andrade" class="form-control input-md" required="" type="text">
                </div>

            </div>



            <div class="form-group"><!-- input email-->
                <label class="col-md-2 control-label" for="email">Email <h11>*</h11></label>
                <div class="col-md-5">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input id="email" name="email" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                    </div>

                </div>

            </div>


            <div class="form-group"><!-- input idade-->
                <label class="col-md-2 control-label" for="idade">Idade <h11>*</h11></label>
                <div class="col-md-3">
                    <input id="idade" name="idade" placeholder="Ex: 18" class="form-control input-md" required="" type="text">
                </div>

            </div>


            <button type="submit" class="btn btn-success" name="btn-cadastro" >Cadastrar</button><!-- enviar cadastro-->
            <a href="index.php" class="btn btn-primary" > Voltar</a><!-- voltar para clientes-->
        </form>

    </div>
</body>

<?php require_once "includes/footer.php"; ?><!-- footer -->