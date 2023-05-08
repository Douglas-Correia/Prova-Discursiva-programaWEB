<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área de login do Sistema</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style-login.css">
    <script src="script.js"></script>
</head>
<body>
    
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form class="row form-login" action="verifi-login.php" method="post">
                <h3>Entre para acessar o painel</h3>
                <label for="usuario" class="form-control">Usuário:</label>
                <input type="text" name="usuario" required placeholder="ex: usuario123" class="form-control" onclick="removerErroLogin()">
                <label class="verifi-usuario" id="verifi-usuario"></label>

                <label for="senha" class="form-control">Senha:</label>
                <input type="password" name="senha" required placeholder="ex: senha123" class="form-control">
                <label class="verifi-senha" id="verifi-senha"></label>
                
                <button type="submit" class="btn btn-info" name="entrar">Entrar</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>