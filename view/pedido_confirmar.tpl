<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/estilos.css">

    <title>Quitanda Online :: Fechamento da Compra</title>
</head>

<body>
    <div class="d-flex flex-column wrapper">
        <main class="flex-fill">
            <div class="container">
                <h1>Confira os Itens</h1>
                <h3>Confira os itens e clique em <b>Continuar</b> para prosseguir para a <b>seleção do endereço de entrega</b>.</h3>
                <ul class="list-group mb-3">
                {foreach from=$PRO item=P}
                    <li class="list-group-item py-3">
                        <div class="row g-3">
                            <div class="col-4 col-md-3 col-lg-2">
                                <a href="#">
                                    <img src="" class="img-thumbnail">
                                </a>
                            </div>
                            <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
                                <h4>
                                    <b><a href="#" class="text-decoration-none text-danger">
                                            {$P.PROD_NOME}</a></b>
                                </h4>
                                <h5>
                                    Abacate manteiga da melhor qualidade possível e muito fresco.
                                    <br>
                                    <b>
                                        4 unidade(s) <br>
                                        R$ 15,96
                                    </b>
                                </h5>
                            </div>                            
                        </div>
                    </li>
                {/foreach} 
                    <li class="list-group-item pt-3 pb-0">
                    <form name="pedido_finalizar" id="pedido_finalizar" method="post" action="{$PAG_FINALIZAR}">
                        <div class="text-end">
                            <h4 class="text-dark mb-3">
                                Valor Total: R$ {$TOTAL}
                            </h4>
                            <a href="{$PAG_CARRINHO}" class="btn btn-outline-success btn-lg mb-3">
                                Voltar ao Carrinho
                            </a>
                            <button class="btn" type="submit">
                            <a class="btn btn-danger btn-lg ms-2 mb-3">Continuar</a>
                            </button>
                        </div>
                    </form>
                    </li>
                </ul>
            </div>
        </main>
    </div>
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>