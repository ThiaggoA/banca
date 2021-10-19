<?php
/* Smarty version 3.1.40, created on 2021-10-19 05:54:31
  from 'C:\xampp\htdocs\banca\view\produtos_detalhes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_616e4177ee25c2_36115898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d63c5bd2d092fcd2c7092a039d3706b541136cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\banca\\view\\produtos_detalhes.tpl',
      1 => 1634615653,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616e4177ee25c2_36115898 (Smarty_Internal_Template $_smarty_tpl) {
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
favicon/manifest.json">
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

    <title>Quitanda Online :: Detalhes do Produto "Banana Prata"</title>
</head>

<body>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
        <main class="flex-fill">
            <div class="container">
                <div class="row g-3">
                    <div class="col-12 col-sm-6">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['PROD_IMG'];?>
" class="img-thumbnail" id="imgProduto">
                        <br class="clearfix">
                        <div class="row my-3 gx-3">
                            <div class="col-3">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['PROD_IMG'];?>
" class="img-thumbnail" onclick="trocarImagem(this)">
                            </div>
                            <div class="col-3">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['PROD_IMG'];?>
" class="img-thumbnail" onclick="trocarImagem(this)">
                            </div>
                            <div class="col-3">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['PROD_IMG'];?>
" class="img-thumbnail" onclick="trocarImagem(this)">
                            </div>
                            <div class="col-3">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['PROD_IMG'];?>
" class="img-thumbnail" onclick="trocarImagem(this)">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <h1><?php echo $_smarty_tpl->tpl_vars['P']->value['PROD_NOME'];?>
</h1>
                        <p>
                            <?php echo $_smarty_tpl->tpl_vars['P']->value['PROD_DESCRICAO'];?>

                        </p>
                        <p>
                            <?php echo $_smarty_tpl->tpl_vars['P']->value['PROD_DESCRICAO'];?>

                        </p>
                        <p>
                        <form name="carrinho" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_COMPRAR']->value;?>
">
                            <input type="hidden" name="PROD_ID" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['PROD_ID'];?>
">
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
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


    <?php echo '<script'; ?>
 src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        function trocarImagem(el) {
            var imgProduto = document.getElementById("imgProduto");
            imgProduto.src = el.src;
        }
    <?php echo '</script'; ?>
>
</body>

</html><?php }
}
