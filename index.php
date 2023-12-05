<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
    <link rel="stylesheet" href="css/index/styles.css">
    <style>
        fieldset {
            width: 600px;
            margin: auto;
        }
    </style>
</head>
<body>
    <form method="POST" action="insertDateMovies.php">
        <fieldset>
            <legend>Filmes e Séries</legend>
            Ator Principal: <input type="text" name="cxactor"><br>
            Personagem Principal: <input type="text" name="cxperson"><br>
            Diretor: <input type="text" name="cxdirector"><br>
            Gênero: <input type="text" name="cxgender"><br>
            Data de Lançamento: <input type="date" name="cxlaunch"><br>
            Locação: <input type="text" name="cxlocality"><br>
            Classificação Indicativa: <input type="text" name="cxrating"><br>
            Trilha Sonora: <input type="text" name="cxsoundtrack"><br>
            Streaming: <input type="text" name="cxstreaming"><br>
            Título: <input type="text" name="cxtitle"><br>
            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>
    <br><a href="listDateMovies.php">Listar Dados Cadastrados</a></br>
</body>
</html>