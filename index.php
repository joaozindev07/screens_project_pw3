<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gerenciamento de credenciais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="container text-center">
        <div class="row mb-5">
            <h1>Gerenciamento de credenciais Sistema Devisate</h1>
        </div>
        <div class="row mb-5">
            <p class="h5">Insira Abaixo as credenciais para que possamos configurar corretamente o banco de dados
                de seu sistema</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="user_cadaster.php" class="credentials">
                    <div class="row mb-3">
                        <div class="col-3">
                            <label for="server">Servidor:</label>
                        </div>
                        <div class="col-9">
                            <input type="text" name="Server" id="server" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3">
                            <label for="user">Usuário:</label>
                        </div>
                        <div class="col-9">
                            <input type="text" name="User" id="user" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3">
                            <label for="password">Senha:</label>
                        </div>
                        <div class="col-9">
                            <input type="password" name="Password" id="password" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3">
                            <label for="database">Base:</label>
                        </div>
                        <div class="col-9">
                            <input type="text" name="Database" id="database" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <input type="submit" value="Criar banco de dados" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>

</html>