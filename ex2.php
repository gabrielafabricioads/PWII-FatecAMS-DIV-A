<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
<form action="index.php" method="get">
        <fieldset>
            <legend>Digite a sua idade para saber se você poderá votar:</legend>
        <label for="idade">idade</label>
        <input type="text" name="idade" id="idade" placeholder="idade" required>
        <br>

          <br>
        <input type="submit" value="Enviar">
        </fieldset>
    </form>

    <?php
    //Elabore um programa que pergunte a idade do usuário, e exiba na tela se ele pode votar ou não.
     if (($_GET['idade']<16)){
      echo "Não tem idade suficiente para votar!";
        
    } 
    else if (($_GET['idade']>=16 && ($_GET['idade']<18))){
        echo "Você pode votar, mas não é obrigatório!";
    }
    else if (($_GET['idade']>=18 && ($_GET['idade']<=69))){
        echo "Seu voto é obrigatório!";
    }
    else if (($_GET['idade']>=70)){
        echo "Você pode votar, mas o seu voto não é obrigatório! ";
    }
    else{
        echo "Digite novamente!";
    }
    ?>
    


</body>
</html>