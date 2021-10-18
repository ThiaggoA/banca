<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="{$GET_MEDIA}/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{$GET_MEDIA}/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{$GET_MEDIA}/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{$GET_MEDIA}/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{$GET_MEDIA}/favicon/favicon-16x16.png">
    <link rel="manifest" href="{$GET_MEDIA}/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{$GET_MEDIA}/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="{$GET_TEMA}/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{$GET_TEMA}/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{$GET_TEMA}/css/estilos.css">

    <title> Banca Comunitária :: Página Principal</title>
</head>

<body>
    <div class="d-flex flex-column wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary border-bottom shadow-sm mb-3">
            <div class="container">
                <a class="navbar-brand" href="{$GET_HOME}"><b>Banca Comunitária</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target=".navbar-collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{$GET_HOME}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{$GET_CONTATO}">Contato</a>
                        </li>
                    </ul>
                    <div class="align-self-end">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="/cadastro.html" class="nav-link text-white">Cadastre-se</a>
                            </li>
                            <li class="nav-item">
                                <a href="/login.html" class="nav-link text-white">Entrar</a>
                            </li>
                            <li class="nav-item">
                                <span class="badge rounded-pill bg-light text-danger position-absolute ms-4 mt-0"
                                    title="5 produto(s) no carrinho"><small>5</small></span>
                                <a href="/carrinho.html" class="nav-link text-white">
                                    <i class="bi-cart" style="font-size:24px;line-height:24px;"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        
        {php}
        
        Rotas::get_Pagina();
        
        
        {/php}
        

        <footer class="border-top text-muted bg-light">
            <div class="container">
                <div class="row py-3">
                    <div class="col-12 col-md-4 text-md-left">
                        &copy; 2021 - Banca Comunitária Ltda <br>
                        Rua Virtual Inexistente, 171, Compulândia/PC <br>
                        CPNJ 99.999.999/0001-99
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <a href="/privacidade.html" class="text-decoration-none text-dark">
                            Política de Privacidade
                        </a><br>
                        <a href="/termos.html" class="text-decoration-none text-dark">
                            Termos de Uso
                        </a><br>
                        <a href="/quemsomos.html" class="text-decoration-none text-dark">
                            Quem Somos
                        </a>
                        
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <a href="/contato.html" class="text-decoration-none text-dark">
                            Contato pelo Site
                        </a><br>
                        E-mail: <a href="mailto:email@dominio.com" class="text-decoration-none text-dark">
                            email@dominio.com
                        </a><br>
                        Telefone: <a href="phone:28999990000" class="text-decoration-none text-dark">
                            (28) 99999-0000
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="{$GET_TEMA}/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>