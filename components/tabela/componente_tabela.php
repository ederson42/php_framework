<?php

class Tabela
{
    public $lista_de_cabecalho;

    public function iniciar_tabela($classe, $lista_de_cabecalho)
    {
        $this->lista_de_cabecalho = $lista_de_cabecalho;
        echo "
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
            <table class='{$classe}'> 
                <tr>";
                    foreach($this->lista_de_cabecalho as $cabecalho)
                    {
                        echo "
                            <th>{$cabecalho}</th>
                        ";
                    }
        echo "</tr>";
    }

    public function crie_todas_linhas_na_tabela($linhas_tmp)
    {
        while ($row = mysqli_fetch_assoc($linhas_tmp)) 
        {
            echo "<tr>";
                foreach($this->lista_de_cabecalho as $cabeca)
                {
                    $cabeca_corrigida = $this->converta_caracteres($cabeca);
                    echo "<td>{$row[$cabeca_corrigida]}</td>";
                }
            echo "</tr>";
        }
    }

    private function converta_caracteres($caracter_tmp)
    {
        $string = strtolower($caracter_tmp); 
        $string = str_replace(' ', '_', $string); 
        $string = str_replace(['Á', 'Ã', 'Â', 'À', 'Ä'], 'a', $string); // Substitui caracteres especiais
        $string = str_replace(['É', 'Ê', 'È', 'Ë'], 'e', $string);
        $string = str_replace(['Í', 'Î', 'Ì', 'Ï'], 'i', $string);
        $string = str_replace(['Ó', 'Ô', 'Ò', 'Õ', 'Ö'], 'o', $string);
        $string = str_replace(['Ú', 'Û', 'Ù', 'Ü'], 'u', $string);
        $string = str_replace('Ç', 'c', $string);
        $string = str_replace('Ñ', 'n', $string);
        return $string;
    }

    public function fechar_tabela()
    {
        echo "
            </table>
        ";
    }
}
?>
