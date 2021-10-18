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

    <title>Barraca de Feira :: Contato</title>
</head>

<body>
        <main class="flex-fill">
            <div class="container">
                <div class="row justify-content-center">
                    <form class="col-sm-10 col-md-8 col-lg-6" method="POST"action="envio">
                        <h1>Entre em Contato</h1>

                        <div class="form-floating mb-3">
                            <input type="text" id="txtNomeCompleto" name="txtNomeCompleto" class="form-control" placeholder=" " autofocus>
                            <label for="txtNomeCompleto">Nome Completo</label>
                        </div>
                        
                        <div class="form-floating mb-3">
                            <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder=" ">
                            <label for="txtEmail">E-mail</label>
                        </div>

                        <div class="form-floating mb-3">
                            <textarea id="txtMensagem" class="form-control" name="txtMensagem" placeholder=" " style="height: 200px;"></textarea>
                            <label for="txtMensagem">Mensagem</label>
                        </div>

                        <button id="btnenviar" name="btnenviar" type="submit" class="btn btn-lg btn-danger">Enviar Mensagem</button>

                        <p class="mt-3">
                            Faremos nosso melhor para responder sua mensagem em até 2 dias úteis.
                        </p>

                        <p class="mt-3">
                            Atenciosamente,<br>
                            Central de Relacionamento Quitanda Online
                        </p>
                    </form>
                </div>
            </div>
        </main>
</body>

</html>