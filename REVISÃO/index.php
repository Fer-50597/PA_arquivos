<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <form action="processa.php" method="POST">
        <div class="container">
            <div class="left-side"> <img src="sua-imagem.jpg" alt="Imagem ilustrativa"> </div>
            <div class="right-side">
                <div class="form-container">
                    <h2>Cadastro</h2>
                    <form>
                        <div class="form-group"> <label for="nome">Nome</label> <input type="text" id="nome" name="nome" required> </div>
                        <div class="form-group"> <label for="cpf">CPF</label> <input type="text" id="cpf" name="cpf" required> </div>
                        <div class="form-group"> <label for="email">E-mail</label> <input type="email" id="email" name="email" required> </div>
                        <div class="form-group"> <label for="data">Data de Nascimento</label> <input type="date" id="data" name="data" required> </div>
                        <div class="form-group"> <label for="senha">Senha</label> <input type="password" id="senha" name="senha" required> </div>
                        <button type="submit" class="btn">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </form>
</body>

</html>