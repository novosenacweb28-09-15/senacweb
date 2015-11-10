<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="css/normalize.css">

        <link rel="stylesheet" href="/css/main.css">

        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="centralizar">

            <header id="cabecalho">
                <!-- Adicionar .logo -->
                <a href="index.html" class="logo">
                    <img src="/img/logo.jpg" alt="Logo IMDB" />
                </a>
                <!-- Adicionar Menu -->
                <nav class="menu">
                    <a class="menu-link" href="/home">Home</a>
                    <a class="menu-link" href="/listadefilmes">Lista de Filmes</a>
                    <a class="menu-link" href="/sobre">Sobre</a>
                </nav>
                <!-- Adicionar Campo de Pesquisa -->
                <form class="form-pesquisa">
                    <input type="text" name="pesquisa" />
                    <button>Pesquisar</button>
                </form>
            </header>
            </a>
        <?php include_once $page. '.php';?> 
        </div>

    </body>

</html>