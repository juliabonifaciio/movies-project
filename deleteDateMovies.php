<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
    <link rel="stylesheet" href="css/deleteDateMovies/styles.css">
</head>
<body>
    <?php
    include_once 'connect.php';

    if(isset($_GET['id'])) {
        $cod = $_GET['id'];
	
        $delete = "DELETE FROM tbmovie WHERE id='$cod'";
        $execute = mysqli_query($conn, $delete);

        if($execute) {
            echo "Filme/Série deletado com sucesso!";
            echo "<br>";
            echo "<a href='listDateMovies.php'>Voltar</a>";
        } else {
            echo "Falha ao deletar o filme/série desejado...";
        }
    } else {
        echo "ID não encontrado para deletar o filme/série.";
    }
    ?>
</body>
</html>