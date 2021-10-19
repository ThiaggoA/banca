<?php

class Carrinho{

    private $total_valor, $total_peso, $itens = array();


    function GetCarrinho($sessao = NULL){

        $i = 1; $sub = 1.00; $peso = 0;
        
        

        foreach($_SESSION['PRO'] as $lista){
            $sub = ($lista['VALOR_US'] * $lista['QTD']);
            $this->total_valor += $sub;

            $this->itens[$i] = array(

            'PROD_ID' => $lista['ID'],
            'PROD_NOME' => $lista['NOME'],
            'PROD_PRECO' => $lista['VALOR'],
            'PROD_PRECO_US' => $lista['VALOR_US'],
            'PROD_ESTOQUE' => $lista['QTD'],
            'PROD_IMG' => $lista['IMG'],
            'PROD_LINK' => $lista['LINK'],
            'PROD_SUBTOTAL' => Sistema::MoedaBR($sub),
            'PROD_SUBTOTAL_US' => $sub,

            );

            $i++;
        }

        if(count($this->itens) > 0){
            return $this->itens;
        }else{
            echo '<h4> Não há produtos no carrinho </h4>';

        }

    }

    function GetTotal(){
        return $this->total_valor;
    }

    function GetPeso(){
        return $this->total_peso;
    }
    function CarrinhoAdd($id){
        $produtos = new Produtos();
        $produtos->BuscarProdutosID($id);

        foreach($produtos->GetItens() as $PRO){
            $ID = $PRO['PROD_ID'];
            $NOME = $PRO['PROD_NOME'];
            $VALOR_US = $PRO['PROD_PRECO_US'];
            $VALOR = $PRO['PROD_PRECO'];
            $QTD = 1;
            $IMG = $PRO['PROD_IMG'];
            $LINK = Rotas::pag_ProdutosDetalhes().'/'.$ID.'/'.$PRO['PROD_SLUG'];
            $ACAO = $_POST['ACAO'];
        }

        switch($ACAO){
            case 'add':
                    if(!isset($_SESSION['PRO'][$ID]['ID'])){
                        $_SESSION['PRO'][$ID]['ID'] = $ID;
                        $_SESSION['PRO'][$ID]['NOME'] = $NOME;
                        $_SESSION['PRO'][$ID]['VALOR_US'] = $VALOR_US;
                        $_SESSION['PRO'][$ID]['VALOR'] = $VALOR;
                        $_SESSION['PRO'][$ID]['QTD'] = $QTD;
                        $_SESSION['PRO'][$ID]['IMG'] = $IMG;
                        $_SESSION['PRO'][$ID]['LINK'] = $LINK;

                    }else{
                        $_SESSION['PRO'][$ID]['QTD'] += $QTD;
                    }
                break;

            case 'del':
                    $this->CarrinhoDeletar($id);
                break;

            case 'limpar':
                
                break;

        }
    }

    function CarrinhoDeletar($id){
        unset($_SESSION['PRO'][$id]);
    }

    function CarrinhoLimpar(){
        unset($_SESSION['PRO']);
    }










}
?>