<?php
/* Smarty version 3.1.40, created on 2021-10-19 02:45:22
  from 'C:\xampp\htdocs\banca\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_616e1522d4a716_78807466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8682505321f5cdf59bf8e3ef249481e668c49204' => 
    array (
      0 => 'C:\\xampp\\htdocs\\banca\\view\\index.tpl',
      1 => 1634604277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616e1522d4a716_78807466 (Smarty_Internal_Template $_smarty_tpl) {
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

    <title> Banca Comunitária :: Página Principal</title>
</head>

<body>
    <div class="d-flex flex-column wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary border-bottom shadow-sm mb-3">
            <div class="container">
                <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
"><b>Banca Comunitária</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target=".navbar-collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?php echo $_smarty_tpl->tpl_vars['GET_CONTATO']->value;?>
">Contato</a>
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
                                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
" class="nav-link text-white">
                                    <i class="bi-cart" style="font-size:24px;line-height:24px;"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        
        <?php 
        
        Rotas::get_Pagina();
        
        
        ?>
        

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
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/bootstrap/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
