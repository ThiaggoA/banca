<?php
/* Smarty version 3.1.40, created on 2021-10-18 00:56:59
  from 'C:\xampp\htdocs\banca\view\contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_616caa3b0d6cf5_74111857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '588290cdec203b9250502724822c68ddbbe53ed9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\banca\\view\\contato.tpl',
      1 => 1634496654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616caa3b0d6cf5_74111857 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $_smarty_tpl->tpl_vars['GET_MEDIA']->value;?>
/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo $_smarty_tpl->tpl_vars['GET_MEDIA']->value;?>
/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $_smarty_tpl->tpl_vars['GET_MEDIA']->value;?>
/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $_smarty_tpl->tpl_vars['GET_MEDIA']->value;?>
/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $_smarty_tpl->tpl_vars['GET_MEDIA']->value;?>
/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $_smarty_tpl->tpl_vars['GET_MEDIA']->value;?>
/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo $_smarty_tpl->tpl_vars['GET_MEDIA']->value;?>
/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/estilos.css">

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

</html><?php }
}
