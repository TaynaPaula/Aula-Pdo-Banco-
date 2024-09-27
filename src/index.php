
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <style>
        body {
            background: linear-gradient(135deg, #8a7281, #7e748e, #677897, #477d97, #2d818a, #348272);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            color: white;
            font-family: Arial, sans-serif;
        }
        h1, h2 {
            text-align: center;
        }
        form {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        label {
            margin: 10px 0;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin: 5px 0;
            width: 80%;
        }
        input[type="submit"] {
            background-color: #2d818a;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 20px;
        }
        input[type="submit"]:hover {
            background-color: #348272;
        }
    </style>
</head>
<body>
    <h1>Aula de PHP PDO Banco de Dados</h1>
    <h2>Cadastro de Usuário</h2>
    <form action="main.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>
        
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>