<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Dados</title>
    <link rel="stylesheet" href="css/deleteDateMovies/style.css">
</head>
<body>
    <?php
        include_once 'connect.php';

        if(isset($_GET['id'])) {
            $cod = $_GET['id'];
        
            $delete = "DELETE FROM tbmovie WHERE id='$cod'";
            $execute = mysqli_query($conn, $delete);

            if($execute) {
                echo "<p>Filme/Série deletado com sucesso!</p>";
            } else {
                echo "<p>Falha ao deletar o filme/série desejado...</p>";
            }
        } else {
            echo "<p>ID não encontrado para deletar o filme/série.</p>";
        }
    ?>

    <div class="back-link">
        <a href='listDateMovies.php'>Voltar</a>
    </div>
</body>
</html>