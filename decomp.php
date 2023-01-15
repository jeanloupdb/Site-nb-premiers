<?php

function list_prem($x) {

    $x = intval($x);
    $n = 2;
    $l_prem = array(2);
    $res = true;
    $k = 2;
    while ($k != $x & $x > 1) {
        $n += 1;
        $i = 0;
        while (($n % $l_prem[$i] != 0) & ($l_prem[$i] <= intval(sqrt($n)))) {
            $res = true;
            $i += 1;
        }
        if ($n % $l_prem[$i] == 0) {
            $res = false;
        }
        if ($res) {
            array_push($l_prem, $n);
        }
        $k += 1;
    }
    if ($x < 2) {
        $l_prem = [];
    }
    return $l_prem;
}

function is_prem ($x) {
    $res = false;
    if ($x != null & $x > 1) {
        if ($x >= 5) {
            $prem = list_prem(sqrt($x));
        } else {
            $prem = list_prem($x);
        }

        $res = null;
        $i = 0;
        $res = true;
        while ((!empty($prem) ) & ($x % $prem[$i] != 0) & ($i < count($prem) - 1)) {
            $res = true;
            $i += 1;
        }
        if (empty($prem) | ($x % $prem[$i] == 0 & $prem[$i] != $x)) {
            $res = false;
        }

    }elseif($x < 2){
        $res = false;
    }
    return $res;
}

function list_facteurs($number){
    $list = List_prem($number);
    $list_fact = [];
    $i = 0;
    while($number!=1){
        $k = 0; 
        while($number % $list[$k] != 0){
            $k++;
        }
        array_push($list_fact, $list[$k]);
        $number = $number/$list[$k];
        $i++;
    }
    return $list_fact;
}

if(isset($_POST["bouton"]) && (isset($_POST["nombre"]))){
    $rep = "";
    $nb = $_POST["nombre"];
    $list_fact = list_facteurs($nb);
    $i=0;
    foreach($list_fact as $a){
        if($i==0){
            $rep.= $a;
        }else{
            $rep.= " * ".$a;
        }
        $i++;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="test.css" />
    <script src="javascript.js"></script>
    <title>Nombre premier ?</title>
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
            <li class="menu"><a href="list.php" class="a">Liste des nombres premiers <br></a></li>
            <li class="menu"><a href="decomp.php" class="a">Décomposer en facteurs de nombres premiers</a></li>
        </ul>
    </nav>
    <div class="info_isprem">
        <h2>Décomposer en facteurs de nombres premiers :</h2> <br>
        <form method="POST">
            <label for="nombre">Entrez le nombre :</label>
            <br>
            <input type="number" id="nombre" name="nombre" max=1000000 min=2>
            <input type="submit" id="bouton" name="bouton" value="Valider" size="30">
        </form>
        <p style="color: gray;font-size: small;">(max : 1 000 000)</p>
        <p><br><br>

            <?php
            if(isset($rep)){
                echo '<p id="reponse">Décomposition de '.$_POST["nombre"].' :</p><br>';
                echo '<h3 style="color: green;">'.$rep.'</h3>';
            }
            

            ?>
            <br><br><br><br><br>
            <a href="index.php">( Qu'est-ce qu'un nombre premier ? )</a>
            <br><br>
        </p>
    <br><br><br><br><br><br><br><br><br><br>

    </div>
    <?php
    include('footer.php');
    ?>


</body>

</html>