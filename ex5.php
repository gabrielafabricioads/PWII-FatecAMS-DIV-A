<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
<form action="ex5.php" method="get">
        <fieldset>
            <legend>
                Digite um letra para sabermos se ela é consoante ou vogal, digite em maiúculo 
            </legend>
        <label for="letra">letra</label>
        <input type="text" name="letra" id="letra" placeholder="letra" required>
        <br>

          <br>
        <input type="submit" value="Enviar">
        </fieldset>
    </form>

    <?php
    
      if (($_GET['letra']== "A") || ($_GET['letra'] =="E") || ($_GET['letra'] =="I") || ($_GET['letra'] == "O") || ($_GET['letra']== "U") ||
     ($_GET['letra'] == "Ão")){
      echo "É uma vogal!";
        
    } 
    
    else if (($_GET['letra']== "B") || ($_GET['letra'] =="C") || ($_GET['letra'] =="D") || ($_GET['letra'] == "F") || ($_GET['letra']== "G") ||
    ($_GET['letra'] == "Ão") ($_GET['letra'] == "Ão") ($_GET['letra'] == "Ão") ($_GET['letra'] == "Ão") ($_GET['letra'] == "Ão") ($_GET['letra'] == "Ão")){
        echo "É uma consoante";
    }
    ?>
    


</body>
</html>