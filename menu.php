<nav class="navbar navbar-expand-lg fixed-top menu mb-3">
  <div class="container">
    <a class="navbar-brand text-white d-flex align-items-center" href="index.php">
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-anthropic" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M9.218 2h2.402L16 12.987h-2.402zM4.379 2h2.512l4.38 10.987H8.82l-.895-2.308h-4.58l-.896 2.307H0L4.38 2.001zm2.755 6.64L5.635 4.777 4.137 8.64z" />
      </svg>
      <span class="p-1">System</span>
    </a>

    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal" aria-controls="menuPrincipal" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menuPrincipal">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="clientes.php">Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="tickets.php">Tickets</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="configDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Configurações
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="configDropdown">

            <li class="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="#" onclick="event.preventDefault()">Alterar Tema</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); setTema('claro')">Claro</a></li>
                <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); setTema('escuro')">Escuro</a></li>
              </ul>
            </li>


            <li><a class="dropdown-item" href="editar-usuario.php">Editar Usuário</a></li>
            <li><a class="dropdown-item" href="criar-usuario.php">Criar Usuário</a></li>
            <li><a class="dropdown-item" href="mudar-senha.php">Mudar Senha</a></li>
            <li><a class="dropdown-item" href="ver-usuarios.php">Verificar Usuários</a></li>
            <li><a class="dropdown-item" href="log.php">Log</a></li>
            <li><a class="dropdown-item" href="permissoes.php">Gerenciar Permissões</a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>