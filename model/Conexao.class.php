<!-- <?php

    Class Conexao extends Config{

        private $HOST, $USER, $SENHA, $BANCO;

        protected  $obj, $itens=array(), $prefix;

        function __construct(){
            $this->HOST = self::DB_HOST;
            $this->USER = self::DB_USER;
            $this->SENHA = self::DB_SENHA;
            $this->BANCO = self::DB_BANCO;
            // $this->BANCO = self::DB_PREFIX;

            try{
                if($this->Conectar() == null){
                    $this->Conectar();
                }
                
            }catch(Exception $e){
                exit($e->getMessage(). '<h2> Falha na conexão com o Banco de Dados! </h2>');
            }
        }

        private function Conectar(){

            $options = array(
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
            );

            $link = new PDO("mysql:host={$this->HOST};dbname={$this->BANCO}" , 
            $this->USER, $this->SENHA, $options);
            return $link;

        }

        function ExecuteSQL($query, array $params = NULL){
            $this->obj = $this->Conectar()->prepare($query);
            return $this->obj->execute();
        }

        function ListarDados(){
            return $this->obj->fetch(PDO::FETCH_ASSOC);
        }

        function TotalDados(){
            return $this->obj->rowCount();
        }

        function GetItens(){
            return $this->itens;
        }

    

    }


?> -->