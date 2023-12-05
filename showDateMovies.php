<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
    <link rel="stylesheet" href="css/showDateMovies/styles.css">
    <style>
        fieldset {
            width: 600px;
            margin: auto;
        }
    </style>
</head>
<body>
    
<?php
    include_once 'connect.php';
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $consult = "SELECT * FROM tbmovie WHERE id = '$id'";
        $execute = mysqli_query($conn, $consult);

        if ($execute) {
            // Verifica se há resultados
            if(mysqli_num_rows($execute) > 0) {
                while($display = mysqli_fetch_array($execute)) {
?>
                    <form method="POST" action="alterDateMovies.php">
                        <input type="hidden" name="code" value="<?php echo $display['id'];?>">
                        <label>Ator Principal:<input type="text" name="cxactor" value="<?php echo $display['actor'];?>"></label><br>
                        <label>Personagem Principal:<input type="text" name="cxperson" value="<?php echo $display['person'];?>"></label><br>
                        <label>Diretor:<input type="text" name="cxdirector" value="<?php echo $display['director'];?>"></label><br>
                        <label>Gênero:<input type="text" name="cxgender" value="<?php echo $display['gender'];?>"></label><br>
                        <label>Data de Lançamento:<input type="date" name="cxlaunch" value="<?php echo $display['launch'];?>"></label><br>
                        <label>Locação:<input type="text" name="cxlocality" value="<?php echo $display['locality'];?>"></label><br>
                        <label>Classificação Indicativa:<input type="text" name="cxrating" value="<?php echo $display['rating'];?>"></label><br>
                        <label>Trilha Sonora:<input type="text" name="cxsoundtrack" value="<?php echo $display['soundtrack'];?>"></label><br>
                        <label>Streaming:<input type="text" name="cxstreaming" value="<?php echo $display['streaming'];?>"></label><br>
                        <label>Título:<input type="text" name="cxtitle" value="<?php echo $display['title'];?>"></label><br>
                        <input type="submit" value="Alterar">
                    </form>
<?php
                }
            } else {
                echo "Nenhum resultado encontrado para o ID fornecido.";
            }
        } else {
            echo "Erro na consulta: " . mysqli_error($conn);
        }
    } else {
        echo "Parâmetro 'id' não encontrado na URL";
    }
?>

</body>
</html>