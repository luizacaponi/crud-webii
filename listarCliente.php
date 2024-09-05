<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cliente</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Lista de Clientes</h2>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente){ ?>
                <tr>
                    <td><?php echo htmlspecialchars($cliente['id']); ?></td>
                    <td><?php echo htmlspecialchars($cliente['nome']); ?></td>
                    <td><?php echo htmlspecialchars($cliente['telefone']); ?></td>
                    <td><?php echo htmlspecialchars($cliente['email']); ?></td>
                    <td><?php echo htmlspecialchars($cliente['cpf']); ?></td>
                    <td>
                        <a href="form_atualizaCliente.php?id=<?php echo htmlspecialchars($cliente['id']); ?>">Editar</a>
                        <a href="deleta_atualizaCliente.php?id=<?php echo htmlspecialchars($cliente['id']); ?>">Excluir</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="form_cadastroCliente.php">Cadastrar Novo Cliente</a>
</body>
</html>
