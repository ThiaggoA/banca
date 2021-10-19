<?php
/* Smarty version 3.1.40, created on 2021-10-19 08:40:00
  from 'C:\xampp\htdocs\banca\view\pedido_finalizar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_616e68406a9ee9_43589069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c70cf680ed9179676955053536c7a98530f48f01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\banca\\view\\pedido_finalizar.tpl',
      1 => 1634625597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616e68406a9ee9_43589069 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
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
            <div class="container text-center">
                <h1>Obrigado!</h1>
                <hr>
                <h3>Anote o número de seu pedido:</h3>
                <h2 class="text-danger"><b>004571</b></h2>
                <p>Em até 2 horas, seu pedido será entregue. Qualquer dúvida sobre este pedido, entre em contato conosco e informe o número do pedido para que possamos te ajudar.</p>
                <p>Tenha um ótimo dia!</p>
                <p>
                    Atenciosamente,<br>
                    Equipe Quitanda Online
                </p>
                <p>
                    <a href="/index.html" class="btn btn-danger btn-lg">Voltar à Página Principal</a>
                </p>
            </div>
        </main>
    </div>
    <?php echo '<script'; ?>
 src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
