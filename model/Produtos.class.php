<?php

Class Produtos extends Conexao{
    function __construct(){
        parent::__construct();
    }

    function BuscarProdutos(){
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.FK_CATEGORIAS_CAT_ID = c.CAT_ID";

        // $query .= "ORDER BY PROD_ID DESC";

        $this->ExecuteSQL($query);

        $this->ListarProdutos();

    }

    function BuscarProdutosID($id){
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.FK_CATEGORIAS_CAT_ID = c.CAT_ID";

        $query .= " AND PROD_ID = {$id}";

        $this->ExecuteSQL($query);

        $this->ListarProdutos();

    }

    function ListarProdutos(){
        $contador = 1;
        while($lista = $this->ListarDados()):
        $this->itens[$contador] = array(
            'PROD_ID' => $lista['PROD_ID'],
            'PROD_NOME' => $lista['PROD_NOME'],
            'PROD_DESCRICAO' => $lista['PROD_DESCRICAO'],
            'PROD_ESTOQUE' => $lista['PROD_ESTOQUE'],
            'PROD_IMG' => Rotas::get_ImageURL().$lista['PROD_IMG'],
            'PROD_SLUG' => $lista['PROD_SLUG'],
            //'PROD_REFERENCIA' => $lista['PROD_REFERENCIA'],
            'PROD_FABRICANTE' => $lista['PROD_FABRICANTE'],
            'PROD_ATIVO' => $lista['PROD_ATIVO'],
            'PROD_FRETE_FREE' => $lista['PROD_FRETE_FREE'],
            'PROD_PRECO' => $lista['PROD_PRECO'],
            'PROD_FRETE_FREE' => $lista['PROD_FRETE_FREE'],
            'CAT_ID' => $lista['CAT_ID'],
            'CAT_NOME' => $lista['CAT_NOME']
            );
        $contador ++;
        endwhile;
        

    }




}

?>