<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Início</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <?php include_once "menu.php"; ?>
  <main class="flex-fill d-flex justify-content-center align-items-center">
    <div class="container mt-5">
      <div class="principal shadow mb-2 mt-5 p-4 white-bg rounded">
        <section id="inicio" class="intro main-bg section text-white">
          <div class="row align-items-center">

            <div class="col-md-6">
              <h2>O Firefox 85 chega em janeiro</h2>
              <p>
                Para encerrar janeiro, temos o orgulho de apresentar o lançamento do Firefox 85. Nesta versão,
                estamos trazendo suporte para a pseudo-classe <code>:focus-visible</code> no CSS e as ferramentas de
                desenvolvimento associadas, além da remoção completa do suporte ao Flash no Firefox.
              </p>
            </div>
            <div class="col-md-6 text-center">
              <img src="assets/css/img/java-script.svg" alt="Desenho com logos de HTML, CSS e JS" class="img-fluid w-100">
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