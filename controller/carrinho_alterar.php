<?php
if(!isset($_POST['PROD_ID']) OR $_POST['PROD_ID'] < 1){

    echo '<h4 class="alert alter-danger">Erro na operação</h4>';
    Rotas::Redirecionar(0,Rotas::pag_Carrinho());
    exit;
}
// require './lib/autoload.php';

// $smarty = new Template();


$id = $_POST['PROD_ID'];

$carrinho = new Carrinho();

try{

    $carrinho->CarrinhoAdd($id);

}catch(Exception $e){

    echo '<h4 class="alert alter-danger">Erro na operação</h4>';
}

Rotas::Redirecionar(0,Rotas::pag_Carrinho());


// $smarty -> assign('PRO', $carrinho->GetCarrinho());
// $smarty -> assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));

// echo '<PRE>';
// var_dump($carrinho->GetCarrinho());
// echo '</PRE>';

// $smarty->assign('GET_TEMA', Rotas::get_SiteTema());
// $smarty->assign('GET_HOME', Rotas::get_SiteHome());
// $smarty->assign('GET_MEDIA', Rotas::get_Media());
// $smarty->assign('PRO_INFO', Rotas::pag_ProdutosDetalhes());


// $smarty->assign('PRO', $produtos->GetItens());


// echo '<pre>';
// var_dump($produtos->GetItens());
// echo '</pre>';

// $smarty->display('carrinho.tpl');

?>