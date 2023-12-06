<?php
    $server = "localhost:3307";
    $user = "root";
    $password = "usbw";
    $dbname = "dbmovies";

    $conn = mysqli_connect($server, $user, $password, $dbname);

    if (!$conn) {
        die("Conexão falhou: " . mysqli_connect_error());
    }

    include_once 'connect.php';

    if(isset($_GET['search'])) {
        $search = mysqli_real_escape_string($conn, $_GET['search']);
        $consult = "SELECT * FROM tbmovie WHERE title LIKE '%$search%' OR actor LIKE '%$search%' OR director LIKE '%$search%' OR gender LIKE '%$search%' OR locality LIKE '%$search%'";
        $execute = mysqli_query($conn, $consult);

        if ($execute) {
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultados da Pesquisa</title>
    <link rel="stylesheet" href="css/searchDateMovies/style.css">
</head>
<body>
    <div id="search-container">
        <h2>Pesquisar</h2>
        <form action="searchDateMovies.php" method="GET">
            <label for="search">Filme ou Série:</label>
            <input type="text" id="search" name="search">
            <input type="submit" value="Pesquisar">
        </form>
    </div>

    <div id="search-results">
        <?php
            while($line = mysqli_fetch_array($execute)) {
        ?>
                <ul>
                    <li>Ator Principal: <?php echo $line['actor']; ?></li>
                    <li>Personagem Principal: <?php echo $line['person']; ?></li>
                    <li>Diretor: <?php echo $line['director']; ?></li>
                    <li>Gênero: <?php echo $line['gender']; ?></li>
                    <li>Data de Lançamento: <?php echo $line['launch']; ?></li>
                    <li>Locação: <?php echo $line['locality']; ?></li>
                    <li>Classificação Indicativa: <?php echo $line['rating']; ?></li>
                    <li>Trilha Sonora: <?php echo $line['soundtrack']; ?></li>
                    <li>Streaming: <?php echo $line['streaming']; ?></li>
                    <li>Título: <?php echo $line['title']; ?></li>
                </ul>
        <?php
            }
        ?>
    </div>

    <a href='listDateMovies.php'>Voltar</a>

</body>
</html>
<?php
        } else {
            echo "Erro na consulta: " . mysqli_error($conn);
        }
    }
?>