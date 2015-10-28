<?php
include("cabecalho.php");
require_once("logica-usuario.php");

?>




                        <h1>Bem vindo!</h1>
    <?php
    if (isset($_SESSION["success"])) {
        ?>
        <p class="alert-success"><?= $_SESSION["success"] ?></p>
        <?php
        unset($_SESSION["success"]);
    }
    ?>

    <?php
    if (isset($_SESSION["danger"])) {
        ?>
        <p class="alert-danger"><?= $_SESSION["danger"] ?></p>
        <?php
    } unset($_SESSION["danger"]);
    ?>

    <?php
    if (isset($_GET["logout"]) && $_GET["logout"] == true) {
        ?>
        <p class="alert-success">Deslogado!</p>
        <?php
    }
    ?>


    <?php
    if (usuarioEstaLogado()) {
        ?>
        <p class="text-success"> TTTVocê está logado como <?= usuarioLogado() ?> <a href="logout.php">Deslogar</a></p>
        <?php
    } else {
        ?>
        <h2>Login</h2>
        <form action="login.php" method="post">
            <table class="table">
                <tr>
                    <td>Email</td>
                    <td><input class="form-control" name="email" type="email"</td>
                </tr> 
                <tr>
                    <td>Senha</td>
                    <td><input class="form-control" name="senha" type="password"</td>
                </tr> 
                <tr>

                    <td><button class="btn btn-primary" type="submit">Login</button></td>
                </tr> 
            </table>
        </form>
    <?php } ?>
<?php include("rodape.php"); ?>			
