<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
</head>
<body>
<form action="ex13.php" method="get">
        <fieldset>
            <legend>Digite o seu nome, a sua nota em port, mat, inglês e informática e a sua frequência :</legend>
            <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Nome do aluno" required>
        <br>
        <label for="nota de portugês">nota de portugês</label>
        <input type="text" name="nota de português" id="nota de português" placeholder="nota de português" required>
        <br>
        <label for="nota de matemática">nota de matemática</label>
        <input type="text" name="nota de matemática" id="nota de matemática" placeholder="nota de matemática" required>
        <br>
        <label for="nota de inglês">nota de inglês</label>
        <input type="text" name="nota de inglês" id="nota de inglês" placeholder="nota de inglês" required>
        <br>
        <label for="nota de informática">nota de informática</label>
        <input type="text" name="nota de informática" id="nota de informática" placeholder="nota de informática" required>
        <br>
        <label for="frequência">frequência</label>
        <input type="text" name="frequência" id="frequência" placeholder="frequência" required>
        <br>
          <br>
        <input type="submit" value="Enviar">
        </fieldset>
    </form>

    <?php
    //Faça um programa que irá receber o ano de nascimento de um usuário e exiba se ele é maior ou menor de idade.
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
    