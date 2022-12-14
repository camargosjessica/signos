<!doctype html>
<html lang="pt-BR">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Descubra qual o seu signo</h2>
        <form method="post" action="signos.php">
            <div class="form-group">
                <label for="floatingInput">Informe sua data de Nascimento</label>
                <input type="date" class="form-control" id="date" placeholder="Data de nascimento" name="dataNasc" require>
            </div>
            <button type="submit" class="btn btn-default">Enviar</button>
            <button type="reset" class="btn btn-default">Cancelar</button>
        </form>
    </div>

</body>

</html>