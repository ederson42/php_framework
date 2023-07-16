<?php


class ConexaoBancoDados 
{
    public $conexao;

    function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "";
        
        $this->conn = mysqli_connect($servername, $username, $password, $dbname);
        
        if (!$this->conn) {
            die("Falha na conexão: " . mysqli_connect_error());
        }       
     }

    public function execute_este_comando_sql($comando_sql)
    {
        return mysqli_query($this->conn, $comando_sql);
    }

    public function select_all_from($tabela, $coluna, $pesquisa)
    {
        $comando_sql = "SELECT * FROM `{$tabela}` WHERE `{$coluna}` = '{$pesquisa}'";
        return mysqli_query($this->conn, $comando_sql);
    }

}

?>
