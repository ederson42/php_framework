<?php

class BarraLateral
{

    public static function iniciar_barra_lateral($classe, $lista_de_links)
    {
        echo "<link rel='stylesheet' href='src/componentes/barra_lateral/estilo.css'>";
        echo "
            <div class='{$classe} w3-light-grey w3-bar-block' style='width:15%'>
                <h3 class='w3-bar-item'>Menu</h3>
            ";
                foreach($lista_de_links as $link)
                {
                    $nome_do_link_minusculo = strtolower($link);
                    echo "
                        <a href='{$nome_do_link_minusculo}.php' class='w3-bar-item w3-button'>{$link}</a>
                    ";
                }
        echo "</div>";

    }
}
?>
