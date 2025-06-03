<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tickets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <?php include_once "menu.php"; ?>

    <main class="flex-fill d-flex justify-content-center align-items-center conteudo">
        <div class="container mt-5">
            <div class="principal shadow p-4">
                <header class="text-center mb-4">
                    <h1 class="display-6 text-light text-shadow">tickets</h1>
                </header>
                <section id="top3" class="grid-one main-bg section">
                    <div class="grid-one-content main-content">
                        <div class="intro-text-content">
                            <h2 class="grid-main-heading">Top 3 trabalhos</h2>
                            <p class="grid-descrition">Aqui estão alguns trabalhos recentes.</p>
                            <div class="grid-section">
                                <article>
                                    <h3>Primeiro</h3>
                                    <p>Este botão adicionaria uma caixa à linha de caixas de conteúdo abaixo do texto introdutório.
                                        Isso deve colocar a caixa nesse local, independentemente de onde o usuário esteja escrevendo
                                        no momento.</p>
                                </article>
                                <article>
                                    <h3>Segundo</h3>
                                    <p>Eu sugeriria incluir um pop-up que permita escolher onde inserir a caixa na linha (no início
                                        ou no final), qual título atribuir à caixa, qual texto colocar dentro dela e para qual
                                        página a caixa deve direcionar. A caixa inteira deve funcionar como um link para a página de
                                        destino.</p>
                                </article>
                                <article>
                                    <h3>Terceiro</h3>
                                    <p>Você também pode incluir um atributo de tipo contendo o tipo MIME do recurso, para que o
                                        navegador possa rapidamente identificar quais recursos estão disponíveis e ignorar aqueles
                                        que não são compatíveis.</p>
                                </article>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <?php include_once "rodape.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/script/set-tema.js" defer></script>


</body>

</html>