<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <?php include_once "menu.php"; ?>

    <main class="flex-fill d-flex justify-content-center align-items-center">

        <div class="container mt-5">
            <div class="principal shadow p-2">
                <header class="text-center mb-4">
                    <h1 class="display-6 text-light text-shadow">Clientes</h1>
                </header>

                <div class="d-flex justify-content-center gap-2 mb-3">
                    <a href="formulario.php">

                        <button type="button" class="btn btn-success">Cadastrar</button>
                    </a>

                    <a href="#">
                        <button type="button" class="btn btn-primary">Editar</button>
                    </a>

                    <a href="#">
                        <button type="button" class="btn btn-danger">Apagar</button>
                    </a>
                </div>
            </div>
        </div>
    </main>

    <?php include_once "rodape.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/script/set-tema.js" defer></script>


</body>

</html>