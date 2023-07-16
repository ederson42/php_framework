<?php
///////////     CHAMA A BASE DO FAKE FRAMEWORK    ///////////
require_once("src/componentes/import_framework.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSTADOS</title>
</head>
<body>
<div style="margin-left:15%">

<div class="w3-container w3-teal">
    <h1>POSTADOS</h1>
</div>

<?php

///////////     CRIA ARRAY QUE SERVIRÁ TANTO DE CABEÇALHO COMO 
//              PARA MOSTRAR LINHAS DO BANCO DE DADOS    ///////////
$lista_cabecalho = array(
    'SRO',
    'UNIDADE',
    'CODIGO',
    'CEP',
    'PRAZO',
    'DATA_POSTAGEM',
    'FORMATO',
);

///////////    RETORNA UMA CONSULTA DO BANCO DE DADOS
// ESTE MÉTODO SÓ PRECISA DO NOME DA TABELA, 
// A COLUNA QUE SERÁ PESQUISADA E O QUE PESQUISAR
$resultado = $banco_dados->select_all_from('Postados', 'prazo', '22-04-2023');

//      AQUI INICIA A TABELA QUE PRECISA SÓ DO NOME DA CLASSE CSS
//      E O ARRAY DE CABEÇALHO
$tag_tabela->iniciar_tabela('tabela_teste', $lista_cabecalho);
    $tag_tabela->crie_todas_linhas_na_tabela($resultado);
$tag_tabela->fechar_tabela();

?>
</div>
</body>
</html>


