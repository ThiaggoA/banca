<?php

if(!isset($_SESSION)){
    session_start();
}

require './lib/autoload.php';

$smarty = new Template();

// Rotas::get_Pagina();

$smarty->assign('GET_TEMA', Rotas::get_SiteTema());
$smarty->assign('GET_HOME', Rotas::get_SiteHome());
$smarty->assign('GET_MEDIA', Rotas::get_Media());
$smarty->assign('GET_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());



// $dados = new Conexao();
// $sql = "SELECT * FROM `categorias`";
// $dados->ExecuteSQL($sql);
//  echo $dados->TotalDados();

// echo '<PRE>';
// var_dump($list);
// echo '</PRE>';

$smarty -> display('index.tpl');



?>