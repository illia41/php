<html>
    <head>
        <meta charset="utf-8" lang="pl-PL">
        <link href="style.css" type="text/css" rel="Stylesheet"/>
    </head>
<?php
    $liczba1 = $_POST['l1'];
    $liczba2 = $_POST['l2'];
    $p1 = $liczba1+$liczba2;
    $p2 = $liczba1-$liczba2;
    $p3 = $liczba1*$liczba2;
    $p4 = $liczba1/$liczba2;
    $p5 = $liczba1%$liczba2;
    $p6 = pow($liczba1, $liczba2);
    if($_POST['dz'] == "add"){
        echo "<h1> $p1 </h1> "; 
    }
    elseif($_POST['dz'] == "take away"){
        echo "<h1> $p2 </h1> ";
    }
    elseif($_POST['dz'] == "multiply"){
        echo "<h1> $p3 </h1> ";
    }
    elseif($_POST['dz'] == "division"){
        echo "<h1> $p4 </h1> ";
    }
    elseif($_POST['dz'] == "modulo"){
        echo "<h1> $p5 </h1> ";
    }
    elseif($_POST['dz'] == "power"){
        echo "<h1> $p6 </h1> ";
    }
    else{
        echo "error";
    }
?>
</html>