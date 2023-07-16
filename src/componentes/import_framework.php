<?php
require_once("tabela/componente_tabela.php");
require_once("barra_lateral/componente_barra_lateral.php");
require_once("src/controller.php");

///////////     COMPONENTES DO FAKE FRAMEWORK   ///////////
$tag_tabela = new Tabela();
///////////     COMPONENTES DO FAKE FRAMEWORK   ///////////

///////////     OBJETOS INICIADOS PARA SERREM USANDOS EM TODO O PROJETO    ///////////
$banco_dados = new ConexaoBancoDados();
///////////     OBJETOS INICIADOS PARA SERREM USANDOS EM TODO O PROJETO    ///////////

/////// ARRAY COM NOMES DE LINKS DA BARRA LATERAL ///////
$lista_links = array(
    'HOME',
    'POSTADOS',
    'CONTATO'
);

/////// BARRA LATERAL QUE INICIARÁ EM TODAS AS PÁGINAS ///////
BarraLateral::iniciar_barra_lateral('w3-sidebar', $lista_links);
?>
