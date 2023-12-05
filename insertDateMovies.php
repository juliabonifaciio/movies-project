<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
    <link rel="stylesheet" href="css/insertDateMovies/styles.css">
</head>
<body>
    <?php
        if($_POST['cxactor'] != " ") {
            include_once 'connect.php';
            $actor = $_POST['cxactor'];
            $person = $_POST['cxperson'];
            $director = $_POST['cxdirector'];
            $gender = $_POST['cxgender'];
            $launch = $_POST['cxlaunch'];
            $locality = $_POST['cxlocality'];
            $rating = $_POST['cxrating'];
            $soundtrack = $_POST['cxsoundtrack'];
            $streaming = $_POST['cxstreaming'];
            $title = $_POST['cxtitle'];

            $sql = "INSERT INTO tbmovie (actor, person, director, gender, launch, locality, rating, soundtrack, streaming, title) VALUES (
            '$actor', '$person', '$director', '$gender', '$launch', '$locality', '$rating', '$soundtrack', '$streaming', '$title'
            )";

            $query = mysqli_query($conn,$sql);
            echo "<script>alert('Dados cadastrados com sucesso!');</script>";
        } else {
            echo "Dados não cadastrados";
        }
    ?>

    <a href="index.php">Voltar</a>
</body>
</html>