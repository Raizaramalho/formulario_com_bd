<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>crud</title>
</head>
<body class="border">
    <section class="formulario">
    <h1 class="h1">FORMULÁRIO</h1>
    <form 
    action="conexao.php" method="post">
   

<form> <br> <br> 
<label>Nome:  </label><br>
<input class="control_form" type="text" name="nome" id="nome" placeholder="digite seu nome"></input><br><br>

<label>Idade: </label><br>
<input class="control_form" type="number" name="idade" id="idade" placeholder="digite sua idade"></input><br><br>

<label>Contato: </label><br>
<input class="control_form" type="number" name="contato" id="number" placeholder="digite seu contato"></input><br><br>

<label>E-mail: </label><br>
<input class="control_form" type="email" required name="email" id="email" placeholder="digite seu email"></input><br><br>

<label>sexo: </label><br>
<input  type="radio" name="sexo" id="radio" value="feminino">Feminino</input>
<input  type="radio" name="sexo" id="radio" value="masculino">Masculino</input><br><br>

<label>Mensagem: </label><br>
<input class="control_form" type="textarea" name="mensagem" id="textarea" ></input><br><br>

<button type="submit">Enviar</button>





</section>
</form>
</body>
</html>