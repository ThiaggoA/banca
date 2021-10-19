<?php

require './lib/autoload.php';

$smarty = new Template();

$produtos = new Produtos();
$produtos->BuscarProdutosID(Rotas::$pag[1]);


$smarty->assign('GET_TEMA', Rotas::get_SiteTema());
$smarty->assign('GET_HOME', Rotas::get_SiteHome());
$smarty->assign('GET_MEDIA', Rotas::get_Media());
$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('PAG_COMPRAR', Rotas::pag_CarrinhoAlterar());
// $smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());

// $smarty->assign('PRO_INFO', Rotas::pag_ProdutosDetalhes());

// $id = Rotas::$pag[1];
// foreach ($produtos->GetItens() as $PRO){
//     $_SESSION['PRO'][$id]['ID'] = $PRO['PROD_ID'];
//     $_SESSION['PRO'][$id]['NOME'] = $PRO['PROD_NOME'];
//     $_SESSION['PRO'][$id]['VALOR'] = $PRO['PROD_PRECO'];
//     $_SESSION['PRO'][$id]['VALOR_US'] = $PRO['PROD_PRECO_US'];
//     $_SESSION['PRO'][$id]['QTD'] = 1;
//     $_SESSION['PRO'][$id]['IMG'] = $PRO['PROD_IMG'];
//     $_SESSION['PRO'][$id]['LINK'] = 'sssslink';

//     $id++;
// }
// echo '<pre>';
// var_dump($produtos->GetItens());
// echo '</pre>';


$smarty->display('produtos_detalhes.tpl');

?>
