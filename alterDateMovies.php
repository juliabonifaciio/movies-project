<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
    <link rel="stylesheet" href="css/alterDateMovies/styles.css">
</head>
<body>
    <?php 
        include_once 'connect.php';

        $cod = $_POST['code'];
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

        $actor = mysqli_real_escape_string($conn, $_POST['cxactor']);
        $person = mysqli_real_escape_string($conn, $_POST['cxperson']);
        $director = mysqli_real_escape_string($conn, $_POST['cxdirector']);
        $gender = mysqli_real_escape_string($conn, $_POST['cxgender']);
        $launch = mysqli_real_escape_string($conn, $_POST['cxlaunch']);
        $locality = mysqli_real_escape_string($conn, $_POST['cxlocality']);
        $rating = mysqli_real_escape_string($conn, $_POST['cxrating']);
        $soundtrack = mysqli_real_escape_string($conn, $_POST['cxsoundtrack']);
        $streaming = mysqli_real_escape_string($conn, $_POST['cxstreaming']);
        $title = mysqli_real_escape_string($conn, $_POST['cxtitle']);

        
        $alter = "UPDATE tbmovie SET 
            actor = '$actor',
            person = '$person',
            director = '$director',
            gender = '$gender',
            launch = '$launch',
            locality = '$locality',
            rating = '$rating',
            soundtrack = '$soundtrack',
            streaming = '$streaming',
            title = '$title'
            WHERE id = '$cod'";      

        $execute = mysqli_query($conn,$alter);

        if($execute) {
            echo "Seus dados foram alterados com sucesso!";
            echo "<br>";
            echo "<a href='listDateMovies.php'>Voltar</a>";
        }    
        else {
            echo "Erro na alteração dos seus dados: ". mysqli_error($conn);
        }
    ?>
</body>
</html>