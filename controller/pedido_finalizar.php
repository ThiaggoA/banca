<?php

// require './lib/autoload.php';

if(isset($_SESSION['PRO'])){



$smarty = new Template();

$carrinho = new Carrinho();

$smarty -> assign('PRO', $carrinho->GetCarrinho());
$smarty -> assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
$smarty -> assign('PAG_CAR_ALTERAR', Rotas::pag_CarrinhoAlterar());
$smarty -> assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty -> assign('PAG_FINALIZAR', Rotas::pag_Carrinho());

// echo '<PRE>';
// var_dump($carrinho->GetCarrinho());
// echo '</PRE>';

// $smarty->assign('GET_TEMA', Rotas::get_SiteTema());
$smarty->assign('GET_HOME', Rotas::get_SiteHome());
// $smarty->assign('GET_MEDIA', Rotas::get_Media());
// $smarty->assign('PRO_INFO', Rotas::pag_ProdutosDetalhes());


// $smarty->assign('PRO', $produtos->GetItens());


// echo '<pre>';
// var_dump($produtos->GetItens());
// echo '</pre>';

$smarty->display('pedido_finalizar.tpl');

}
?>