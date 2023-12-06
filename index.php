<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="css/index/style.css">
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
            
            <div class="form-group">
                <label for="cxactor">Ator Principal:</label>
                <input type="text" id="cxactor" name="cxactor">
            </div>

            <div class="form-group">
                <label for="cxperson">Personagem Principal:</label>
                <input type="text" id="cxperson" name="cxperson">
            </div>

            <div class="form-group">
                <label for="cxdirector">Diretor:</label>
                <input type="text" id="cxdirector" name="cxdirector">
            </div>

            <div class="form-group">
                <label for="cxgender">Gênero:</label>
                <input type="text" id="cxgender" name="cxgender">
            </div>

            <div class="form-group">
                <label for="cxlaunch">Data de Lançamento:</label>
                <input type="date" id="cxlaunch" name="cxlaunch">
            </div>

            <div class="form-group">
                <label for="cxlocality">Locação:</label>
                <input type="text" id="cxlocality" name="cxlocality">
            </div>

            <div class="form-group">
                <label for="cxrating">Classificação Indicativa:</label>
                <input type="text" id="cxrating" name="cxrating">
            </div>

            <div class="form-group">
                <label for="cxsoundtrack">Trilha Sonora:</label>
                <input type="text" id="cxsoundtrack" name="cxsoundtrack">
            </div>

            <div class="form-group">
                <label for="cxstreaming">Streaming:</label>
                <input type="text" id="cxstreaming" name="cxstreaming">
            </div>

            <div class="form-group">
                <label for="cxtitle">Título:</label>
                <input type="text" id="cxtitle" name="cxtitle">
            </div>

            <input type="submit" value="Cadastrar">
        </fieldset>

    </form>
    <br><a href="listDateMovies.php">Listar Dados Cadastrados</a><br/>
</body>
</html>