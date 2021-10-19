<?php
/* Smarty version 3.1.40, created on 2021-10-19 08:59:05
  from 'C:\xampp\htdocs\banca\view\pedido_confirmar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_616e6cb9ad6887_44245709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bad4d7000bd049ea0c98ba8663cc609d53115a26' => 
    array (
      0 => 'C:\\xampp\\htdocs\\banca\\view\\pedido_confirmar.tpl',
      1 => 1634626719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616e6cb9ad6887_44245709 (Smarty_Internal_Template $_smarty_tpl) {
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
            <div class="container">
                <h1>Confira os Itens</h1>
                <h3>Confira os itens e clique em <b>Continuar</b> para prosseguir para a <b>seleção do endereço de entrega</b>.</h3>
                <ul class="list-group mb-3">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
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
                                            <?php echo $_smarty_tpl->tpl_vars['P']->value['PROD_NOME'];?>
</a></b>
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
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
                    <li class="list-group-item pt-3 pb-0">
                    <form name="pedido_finalizar" id="pedido_finalizar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_FINALIZAR']->value;?>
">
                        <div class="text-end">
                            <h4 class="text-dark mb-3">
                                Valor Total: R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>

                            </h4>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
" class="btn btn-outline-success btn-lg mb-3">
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
    <?php echo '<script'; ?>
 src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
