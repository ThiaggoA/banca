<?php
/* Smarty version 3.1.40, created on 2021-10-19 09:29:38
  from 'C:\xampp\htdocs\banca\view\carrinho.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_616e73e2a0e633_67150401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b888c8a16bc1066b2a29e943f214c66df916212' => 
    array (
      0 => 'C:\\xampp\\htdocs\\banca\\view\\carrinho.tpl',
      1 => 1634628572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616e73e2a0e633_67150401 (Smarty_Internal_Template $_smarty_tpl) {
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

    <title>Quitanda Online :: Carrinho de Compras</title>
</head>

<body>
    <div class="d-flex flex-column wrapper">


        <main class="flex-fill">
            <div class="container">
                <h1>Carrinho de Compras</h1>
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
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['PROD_IMG'];?>
" class="img-thumbnail">
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
                                </h5>
                            </div>
                            <div
                                class="col-6 offset-6 col-sm-6 offset-sm-6 col-md-4 offset-md-8 col-lg-3 offset-lg-0 col-xl-2 align-self-center mt-3">
                                <form name="carrinho_dell" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CAR_ALTERAR']->value;?>
">
                                    <div class="input-group">
                                    
                                        <button class="btn btn-outline-dark btn-sm" type="button">
                                            <i class="bi-caret-down" style="font-size: 16px; line-height: 16px;"></i>
                                        </button>
                                        <input type="text" class="form-control text-center border-dark" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['PROD_ESTOQUE'];?>
">
                                        <button class="btn btn-outline-dark btn-sm" type="button">
                                            <i class="bi-caret-up" style="font-size: 16px; line-height: 16px;"></i>
                                        </button>
                                            <input type="hidden" name="PROD_ID" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['PROD_ID'];?>
">
                                            <input type="hidden" name="ACAO" value="del">
                                        <button class="btn btn-outline-danger border-dark btn-sm" type="submit">
                                            <i class="bi-trash" style="font-size: 16px; line-height: 16px;"></i>
                                        </button>
                                    </div>
                                <form>
                                <div class="text-end mt-2">
                                    <small class="text-secondary">Valor kg: R$ 3,99</small><br>
                                    <span class="text-dark">Valor Item: R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['PROD_SUBTOTAL'];?>
</span>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    <li class="list-group-item py-3">
                    <form name="pedido_confirmar" id="pedido_confirmar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CONFIRMAR']->value;?>
">
                        <div class="text-end">
                            <h4 class="text-dark mb-3">
                                Valor Total: R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>

                            </h4>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
" class="btn btn-outline-secondary btn-lg">
                                Continuar Comprando                            
                            </a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
" class="btn btn-outline-success btn-lg">
                                Continuar Comprando                            
                            </a>
                            <button class="btn" type="submit">
                            <a class="btn btn-danger btn-lg ms-2 mt-xs-3">Fechar Compra</a>
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
