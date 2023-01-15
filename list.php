
<?php
    function list2($saisie) {
        $rep =  "Liste des nombres premiers jusqu'à ".$saisie." : ";
        $rep_color = "green";
        if ($saisie != null) {
            $rep2 = list_prem2($saisie);
            /*i = 0;
            while (i < res.length) {
                let k = " ; ";
                let l = res[i];
                let stri = l + k;
    
                document.getElementById("rep2").textContent += stri;
                i++;
            }*/
            $rep2_style = '
<style>
    #rep2{
        border: 5px solid rgb(178,34,34);
        border-radius: 10px;
        padding: 2%;
        background-color: "rgb(230,230,230)";
    }
</style>
            ';
        } else {
            $rep2 = "Vous devez cliquer sur Afficher.";
        }
        return array($rep, $rep_color, $rep2, $rep2_style);
    }
    
    function list_prem2($x) {
    
        $x = intval($x);
        $n = 2;
        $l_prem = array(2);
        $res = true;
        $k = 2;
        $str_res = $n;
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
                $k2 = " ; ";
                $stri = $k2.$n;
                $str_res .= $stri;
                array_push($l_prem, $n);
            }
            $k += 1;
        }
        if ($x < 2) {
            $l_prem = array();
        }
        return $str_res;
    }
    $res = "";
    $rep2 = "";
    $rep2_style = "";
    $rep = "RESULTAT :";
    $rep_color = "black";

    if(isset($_POST['submit']) & isset($_POST['list'])){
        $res = list2($_POST['list']);
        $rep2 = $res[2];
        $rep2_style = $res[3];
        $rep = $res[0];
        $rep_color = $res[1];
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
    <title>Liste des nombres premiers</title>
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
        <h2> Liste des nombres premiers</h2> <br>
        <form method="POST">
            <label for="tent">Liste des nombres premiers jusqu'à : </label>
            <br>
            <input type="number" id="list" name="list" max="3000000">
            <input type="submit" id="boutn" name="submit" value="Valider" size="20">
        </form>
        <p style="color: gray;font-size: small;">(max : 3 000 000)</p>
        <br><br>
        <p style="color: <?php echo $rep_color;?>;" id="rep">  <?php echo $rep;?>  </p>
        <?php echo $rep2_style; ?>
        <p id="rep2"><?php echo $rep2;?></p>
    <br><br><br><br><br><br><br><br><br><br><br>
    </div>
    <?php
    include('footer.php');
    ?>
</body>

</html>