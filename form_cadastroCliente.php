<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h3>Cadastro de Cliente</h3>
    <form method="POST" action="cadastroCliente.php">
        <p> Nome: <input type="text" name="nome" required> </p>
        <p> Telefone: <input type="text" name="telefone" required> </p>
        <p> Email: <input type="email" name="email" required> </p>
        <p> CPF: <input type="text" name="cpf" required> </p>
        <p> <button type="submit">Cadastrar</button> </p>
    </form>
</body>
</html>
