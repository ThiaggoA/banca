<?php

require './lib/autoload.php';

$smarty = new Template();

$produtos = new Produtos();
$produtos->BuscarProdutosID(Rotas::$pag[1]);


$smarty->assign('GET_TEMA', Rotas::get_SiteTema());
$smarty->assign('GET_HOME', Rotas::get_SiteHome());
$smarty->assign('GET_MEDIA', Rotas::get_Media());
// $smarty->assign('PRO_INFO', Rotas::pag_ProdutosDetalhes());


$smarty->assign('PRO', $produtos->GetItens());




// echo '<pre>';
// var_dump($produtos->GetItens());
// echo '</pre>';

$smarty->display('produtos_detalhes.tpl');

?>
