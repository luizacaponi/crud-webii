<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Cliente</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form method="POST" action="atualizaCliente.php">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($clienteSelecionado['id']); ?>">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($clienteSelecionado['nome']); ?>">
        
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" value="<?php echo htmlspecialchars($clienteSelecionado['telefone']); ?>">
        
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="<?php echo htmlspecialchars($clienteSelecionado['email']); ?>">
        
        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" value="<?php echo htmlspecialchars($clienteSelecionado['cpf']); ?>">
        
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
