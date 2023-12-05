<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
    <link rel="stylesheet" href="css/listDateMovies/styles.css">
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
        $consult = 'SELECT * FROM tbmovie';
        $execute = mysqli_query($conn, $consult);
    ?>

    <div id="list">
        <?php while($line = mysqli_fetch_array($execute)) { ?>
            <label>
                Ator Principal: <input type="text" value="<?php echo $line["actor"];?>" readonly><br>
            </label>
            
            <label>
                Personagem Principal: <input type="text" value="<?php echo $line["person"];?>" readonly><br>
            </label>

            <label>
                Diretor: <input type="text" value="<?php echo $line["director"];?>" readonly><br>
            </label>

            <label>
                Gênero: <input type="text" value="<?php echo $line["gender"];?>" readonly><br>
            </label>

            <label>
                Data de Lançamento: <input type="date" value="<?php echo $line["launch"];?>" readonly><br>
            </label>

            <label>
                Locação: <input type="text" value="<?php echo $line["locality"];?>" readonly><br>
            </label>

            <label>
                Classificação Indicativa: <input type="text" value="<?php echo $line["rating"];?>" readonly><br>
            </label>

            <label>
                Trilha Sonora: <input type="text" value="<?php echo $line["soundtrack"];?>" readonly><br>
            </label>

            <label>
                Streaming: <input type="text" value="<?php echo $line["streaming"];?>" readonly><br>
            </label>

            <label>
                Título: <input type="text" value="<?php echo $line["title"];?>" readonly><br>
            </label>

            <br>
            <a href="showDateMovies.php?id=<?php echo $line["id"];?>">Alterar</a>
            <a href="deleteDateMovies.php?id=<?php echo $line["id"];?>">Excluir</a>
            <br>
            <br>
            <br>
        <?php } ?>
        
        <br>
        <a href="index.php">Voltar</a>    
        <br>
    </div>
</body>
</html>
