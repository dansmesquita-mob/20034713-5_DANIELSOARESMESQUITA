<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <title>Caseirinho - Doces Caseiros</title>
</head>
<body>
    <header id ="ui-header">    
        <div>
            <b>Caseirinho</b>
            <p>Doces Caseiros</p>
            <ul class="nav justify-content-center">
                 
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php?pagina=home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=info.php">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?pagina=quemsomos.php">Localização</a>
                </li>
            </ul>
        </div>
    </header>
    <?php 
        if(isset($_GET["pagina"]) && !empty($_GET["pagina"])){
            $pagina  = $_GET["pagina"];
            include ("pages/".$pagina);
        } else {
            include ("pages/home.php");
        }
    ?>
</body>
</html>
