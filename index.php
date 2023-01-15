<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="test.css" />
    <title>Les nombres premiers</title>
    <script src="javascript.js"></script>
</head>

<body>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    

    <div id="menu-burger">
        <button id="boutton" onclick="deroulement()"></button>
        <input id="check" type="checkbox">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>
    <nav id="menu">
        <ul>
            <li class="pas_menu">
                <h1 class="h1">Les nombres premiers</h1>
            </li>
            <li class="menu"><a href="index.php" class="a" id="page">Qu'est-ce qu'un nombre premier ?</a></li>
            <li class="menu"><a href="isprem.php" class="a">Verifier si un nombre est premier</a></li>
            <li class="menu"><a href="list.php" class="a">Liste des nombres premiers</a></li>
            <li class="menu"><a href="decomp.php" class="a">Décomposer en facteurs de nombres premiers</a></li>
        </ul>
    </nav>
    
    <ul id="menu_index">
        <br>
        <H1 id="h1index"><br>Les nombres premiers</H1><br><br>
        <li><a href="isprem.php" class="a_index">Verifier si un nombre est premier</a></li>
        <li><a href="list.php" class="a_index">Liste des nombres premiers</a></li>
        <li><a href="decomp.php" class="a_index">Décomposer en facteurs de nombres premiers</a></li>
    </ul>
    <div class="info">
        <h2> " Qu'est-ce qu'un nombre premier ? "</h2> <br>
        <p class="p">Un nombre premier est un entier naturel qui admet exactement deux diviseurs distincts entiers et positifs. <br> Ces deux diviseurs sont 1 et le nombre considéré, <br> puisque tout nombre a pour diviseurs 1 et lui-même (comme le montre l’égalité
            n = 1 × n), <br> les nombres premiers sont ceux qui n'en possèdent pas d'autre. <br><br> Par exemple, dans l'image, 7 est un nombre premier car il n'est pas divisible (sauf par lui-même et 1).
            <br></p>

        <img class="ex" src="example.png" alt="-image-">

        <br>(<a href="https://fr.wikipedia.org/wiki/Nombre_premier" target="_blank">Wikipedia</a>)
        
        <br><br><br><br><br><br><br><br>
    </div>
    <script>
        
    </script>
    <?php
    include('footer.php');
    ?>
    
    <script src="index.js"></script>
    </body>
    </html>