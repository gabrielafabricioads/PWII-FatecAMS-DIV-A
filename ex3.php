<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
<form action="ex3.php" method="get">
        <fieldset>
            <legend>Digite um número inteiro para sabermos é menor ou maior que 100:</legend>
        <label for="numero">Número</label>
        <input type="text" name="numero" id="numero" placeholder="numero" required>
        <br>

          <br>
        <input type="submit" value="Enviar">
        </fieldset>
    </form>

    <?php
    //Elabore um programa que pergunte a numero do usuário, e exiba na tela se ele pode votar ou não.
     if (($_GET['numero']<100)){
      echo "Menor que 100!";
        
    } 
    else if ($_GET['numero']>100){
        echo "Maior que 100!";
    }
    
    else{
        echo "Digite novamente!";
    }
    ?>
    


</body>
</html>