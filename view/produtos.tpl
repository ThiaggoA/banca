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

        <div class="container">
            <div id="carouselMain" class="carousel slide carousel-dark" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <img src="{$GET_MEDIA}/slides/slide01.jpg" class="d-none d-md-block w-100" alt="">
                        <img src="{$GET_MEDIA}/slides/slide01small.jpg" class="d-block d-md-none  w-100" alt="">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="{$GET_MEDIA}/slides/slide01.jpg" class="d-none d-md-block w-100" alt="">
                        <img src="{$GET_MEDIA}/slides/slide01small.jpg" class="d-block d-md-none  w-100" alt="">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="{$GET_MEDIA}/slides/slide01.jpg" class="d-none d-md-block w-100" alt="">
                        <img src="{$GET_MEDIA}/slides/slide01small.jpg" class="d-block d-md-none  w-100" alt="">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselMain" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselMain" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>
            </div>
            <hr class="mt-3">
        </div>

        <main class="flex-fill">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-5">
                        <form class="justify-content-center justify-content-md-start mb-3 mb-md-0">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" placeholder="Digite aqui o que procura">
                                <button class="btn btn-danger">Buscar</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-md-7">
                        <div class="d-flex flex-row-reverse justify-content-center justify-content-md-start">
                            <form class="d-inline-block">
                                <select class="form-select form-select-sm">
                                    <option>Ordenar pelo nome</option>
                                    <option>Ordenar pelo menor preço</option>
                                    <option>Ordenar pelo maior preço</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>

                <hr mt-3>

                <div class="row g-3">

                    {foreach from=$PRO item=P}

                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card text-center bg-light">
                            <a href="#" class="position-absolute end-0 p-2 text-danger">
                                <i class="bi-suit-heart" style="font-size: 24px; line-height: 24px;"></i>
                            </a>
                            <a href="{$PRO_INFO}/{$P.PROD_ID}/{$P.PROD_SLUG}">
                                <img src="{$P.PROD_IMG}" class="card-img-top">
                            </a>
                            <div class="card-header">
                                R$ {$P.PROD_PRECO}
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{$P.PROD_NOME}</h5>
                                <p class="card-text truncar-3l">
                                    {$P.PROD_DESCRICAO}
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-success">320,5kg em estoque</small>
                            </div>
                        </div>
                    </div>
                    {/foreach}
            </div>
        </main>
    </div>
    <script src="{$GET_TEMA}/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>