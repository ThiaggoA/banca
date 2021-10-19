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
    <link rel="manifest" href="{$GET_MEDIA}favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{$GET_MEDIA}/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="{$GET_TEMA}/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{$GET_TEMA}/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{$GET_TEMA}/css/estilos.css">

    <title>Quitanda Online :: Detalhes do Produto "Banana Prata"</title>
</head>

<body>
        {foreach from=$PRO item=P}
        <main class="flex-fill">
            <div class="container">
                <div class="row g-3">
                    <div class="col-12 col-sm-6">
                        <img src="{$P.PROD_IMG}" class="img-thumbnail" id="imgProduto">
                        <br class="clearfix">
                        <div class="row my-3 gx-3">
                            <div class="col-3">
                                <img src="{$P.PROD_IMG}" class="img-thumbnail" onclick="trocarImagem(this)">
                            </div>
                            <div class="col-3">
                                <img src="{$P.PROD_IMG}" class="img-thumbnail" onclick="trocarImagem(this)">
                            </div>
                            <div class="col-3">
                                <img src="{$P.PROD_IMG}" class="img-thumbnail" onclick="trocarImagem(this)">
                            </div>
                            <div class="col-3">
                                <img src="{$P.PROD_IMG}" class="img-thumbnail" onclick="trocarImagem(this)">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <h1>{$P.PROD_NOME}</h1>
                        <p>
                            {$P.PROD_DESCRICAO}
                        </p>
                        <p>
                            {$P.PROD_DESCRICAO}
                        </p>
                        <p>
                        <form name="carrinho" method="post" action="{$PAG_COMPRAR}">
                            <input type="hidden" name="PROD_ID" value="{$P.PROD_ID}">
                            <input type="hidden" name="ACAO" value="add">
                            <button class="btn btn-lg btn-danger mb-3 mb-xl-0 me-2">
                                <i class="bi-cart"></i> Adicionar ao Carrinho
                            </button>
                        </form>       
                        </p>
                    </div>
                </div>
            </div>
        </main>
        {/foreach}


    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function trocarImagem(el) {
            var imgProduto = document.getElementById("imgProduto");
            imgProduto.src = el.src;
        }
    </script>
</body>

</html>