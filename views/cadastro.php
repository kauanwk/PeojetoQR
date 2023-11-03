<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/welcome_page.css">
  <title>Document</title>
</head>

<body>
  <div id="formulario">
    <h2>Cadastro</h2>
    <form action="adicionar.php" method="POST">
      <div>
        <label>Nome:</label>
        <input name="nome" id="nome" placeholder="Escreva seu nome...">
      </div>
      <div>
        <label>idade:</label>
        <input name="idade" id="idade" placeholder="Coloque sua idade...">
      </div>
      <div>
        <label>E-mail:</label>
        <input name="email" id="email" placeholder="Digite seu e-mail...">
      </div>
      <div>
        <label>Telefone:</label>
        <input name="telefone" id="telefone" type="text" placeholder="Digite seu telefone...">
      </div>
      <div>
        <label>Senha:</label>
        <input name="senha" id="senha" placeholder="Digite sua senha...">
      </div>


      <button>Adicionar</button>

    </form>
  </div>
</body>

</html>