<?php
// ********** read ***********
session_start();
$sql = "SELECT * FROM clientes ";
$resultado = mysqli_query($connect, $sql);

while ($dados = mysqli_fetch_array($resultado)) {

?>
    <tbody>
        <!-- tabela body -->
        <tr>
            <td><?php echo $dados['nome']; ?></td>
            <td><?php echo $dados['sobrenome'] ?></td>
            <td><?php echo $dados['email'] ?></td>
            <td><?php echo $dados['idade'] ?></td>

            <!-- editar -->
            <td><a class="btn btn-secondary btn-sm " href="editar.php?id=<?php echo $dados['id']?>" role="button" style="margin:2%;">Editar</a>
            
            <!-- apagar -->
            <a class="btn btn-secondary btn-sm btn-danger" role="button" href="apagar.php?id=<?php echo $dados['id'];?>" style="margin:2%;">Apagar</a></td>

            

        </tr>

    </tbody>
<?php } ?>