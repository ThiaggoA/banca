<?php

    Class Rotas{

        public static $pag;
        private static $pasta_controller = 'controller';
        private static $pasta_view = 'view';


        static function get_SiteHome(){

            return Config::SITE_URL . '/' .Config::SITE_PASTA;

        }

        static function get_SiteRaiz(){

        return $_SERVER['DOCUMENT_ROOT'] . '/' .Config::SITE_PASTA;

        }

        static function get_SiteTema(){
            
            return self::get_SiteHome() . '/' .self::$pasta_view;
        }

        static function get_Media(){

            return self::get_SiteHome() . '/media';

        }

        static function get_ImageURL(){

            return self::get_SiteHome(). '/media/produtos/';

        }

        static function pag_Contato(){

            return self::get_SiteHome() . '/contato';
        }

        static function pag_Carrinho(){

            return self::get_SiteHome() . '/';
        }

        static function pag_Produtos(){

            return self::get_SiteHome() . '/produtos';
        }

        static function pag_ProdutosDetalhes(){
            
            return self::get_SiteHome() . '/produtos_detalhes';
        }

        static function get_Pagina(){

            if(isset($_GET['pag'])){

                $pagina = $_GET['pag'];

                self::$pag = explode('/', $pagina);

                $pagina = 'controller/' .self::$pag[0]. '.php';

                if(file_exists($pagina)){
                    require $pagina;
                }else{
                    require 'erro.php';
                }
            }
        }
    }
?>
