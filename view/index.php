    <!DOCTYPE html>
    <html lang="pt-br">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>PHP Básico (4º período)</title>

            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
            <link href="../assets/css/stilo.css" rel="stylesheet">
        </head>

        <body>
            <div class="container-fluid">

                <header>

                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="index.php?pagina=home">PHP Básico</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="index.php?pagina=home">Início</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Sobre</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Contato</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Aldecir Fonseca
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="submenu">
                                            <li><a class="dropdown-item" href="index.php?action=list">Departamento</a></li>
                                            <li><a class="dropdown-item" href="#">Produto</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Usuário</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>

                </header>

                <main>

                    <div class="container mt-4">
                        <?php
                            if (isset($_GET['action'])) {
                                require_once "../controller/controller.php";     
                            }
                            else {
                                require "home.php";
                            }
                        ?>
                    
                    </div>

                </main>

                <footer>
                    <span>&copy; 2025 - ADS PHP Básico (4º Período) | Todos os direitos reservados</span>
                </footer>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
            <script src="../assets/js/script.js" defer></script>
        </body>

    </html>
