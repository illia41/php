<html>
    <head>
        <meta charset="utf-8" lang="pl-PL">
        <title> stronka </title>
    </head>
    <body>
        <?php

        ?>
        <form action="action.php" method="post">
            enter number 1: 
            <input type="number" name="l1"><br>
            enter number 2:
            <input type="number" name="l2"><br>
            choose action: <br>
            <input type="radio" name="dz" value="add"> <label for="dz"> dodawanie </label><br>
            <input type="radio" name="dz" value="take away"> <label for="dz"> odejmowanie </label><br>
            <input type="radio" name="dz" value="multiply"> <label for="dz"> mnozenie </label><br>
            <input type="radio" name="dz" value="division"> <label for="dz"> dzielenie </label><br>
            <input type="radio" name="dz" value="modulo"> <label for="dz"> modulo </label><br>
            <input type="radio" name="dz" value="power"><br> <label for="dz"> potega </label><br>
            <input type="submit" value="anwser"> 
        </form>
    </body>
</html>