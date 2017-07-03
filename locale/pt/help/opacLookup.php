<h1> Página de pesquisa de código de barras: </ h1>
<br> <br>
O link de pesquisa nos formulários Check Out, Check In e Hold abre uma janela popup secundária, quase idêntica à
Catálogo de Acesso Público Online (OPAC). Nas páginas de resultados de uma pesquisa, cada Código de Barra de Copiar possui links adicionais
(Verificar / Em espera). Quando selecionado, feche a janela pop-up e retorne o código de barras ao primário.
Formulário correspondente da janela, pronto para ser enviado.
<br> <br>

Subseções de ajuda:
<ul>
  <li> <a href="#exam"> Exemplo: selecionando um número de código de barras dos resultados da pesquisa </a> </ li>
  <li> <a href="#seri"> Reconhecendo a cópia de números de série em números de códigos de barras gerados automaticamente </a> </ li>
</ ul>
<br> <br>

<a name="exam">
O exemplo a seguir mostra os links para selecionar um número de código de barras. </a>
Se o seu navegador mostrar dicas de ferramentas, o ponteiro do mouse explicará a ação dos links.
<br> <br>

<! - ***************************************************** ****************************
    * Tabela de resultados de impressão EXEMPLO MUITO COMPLETAMENTE TRADUZIDO POR $ loc-> getText
    ********************************************************** ************************ ->
<table class = "primary">
  <tbody> <tr>
    <th colspan = "3" align = "left" nowrap = "yes" valign = "top">
      <? Php echo $ loc-> getText ("biblioSearchResults"); ?>:
    </ th>
  </ tr>
  
  <tr>

    <td class = "primary" rowspan = "2" align = "center" nowrap = "true" valign = "top">
      1. <br>
      <a href="#exam" title="<?php echo $loc-> getText ("biblioSearchDetail");?> ">
      <Img src = "../ images / book.gif" alt = "book" align = "bottom" border = "0" height = "20" width = "20"> </a>
    </ td>
    <td class = "primário" colspan = "2" valign = "top">
      <table class = "primary" width = "100%">
        <tbody> <tr>

          <td class = "noborder" valign = "top" width = "1%"> <b> <? Php echo $ loc-> getText ("biblioSearchTitle"); ?>: </ B> </ td>
          <td class = "noborder" colspan = "3"> <a href="#exam" title="<?php echo $loc-> getText ("biblioSearchDetail") ;?> "> Ribsy </a> </ td>
        </ tr>
        <tr>
          <td class = "noborder" valign = "top"> <b> <? Php echo $ loc-> getText ("biblioSearchAuthor"); ?>: </ B> </ td>
          <td class = "noborder" colspan = "3"> Cleary, Beverly </ td>
        </ tr>

        <tr>
          <td class = "noborder" valign = "top"> <font class = "small"> <b> <? Php echo $ loc-> getText ("biblioSearchMaterial"); ?>: </ B> </ font> </ td>
          <td class = "noborder" colspan = "3"> <font class = "small"> livro </ font> </ td>
        </ tr>
        <tr>
          <td class = "noborder" valign = "top"> <font class = "small"> <b> <? Php echo $ loc-> getText ("biblioSearchCollection"); ?>: </ B> </ font> </ td>
          <td class = "noborder" colspan = "3"> <font class = "small"> Juvenile Fiction </ font> </ td>

        </ tr>
        <tr>
          <Td class = "noborder" nowrap = "sim" valign = "top"> <font class = "small"> <b> <? Php echo $ loc-> getText ("biblioSearchCall"); ?>: </ B> </ font> </ td>
          <td class = "noborder" colspan = "3"> <font class = "small"> JF Cle </ font> </ td>
        </ tr>
      </ tbody> </ table>
    </ td>
  </ tr>

        <tr>
        <td class = "primary" nowrap = "true"> <font class = "small"> <b> <? Php echo $ loc-> getText ("biblioSearchCopyBCode"); ?> </ B>: 000051
            <a href="#exam" title="<?php echo $loc-> getText ("biblioSearchBCode2Chk");?> "> <? Php echo $ loc-> getText (" biblioSearchOutIn "); ?> </a> | <a href="#exam" title="<?php echo $loc-> getText ("biblioSearchBCode2Hold");?> "> <? Php echo $ loc-> getText (" biblioSearchHold "); ?> </a>
                  </ Font> </ td>
        <td class = "primary" nowrap = "true"> <font class = "small"> <b> <? Php echo $ loc-> getText ("biblioSearchCopyStatus"); ?> </ B>: marcado </ font> </ td>
      </ tr>

    
  <tr>
    <td class = "primary" rowspan = "2" align = "center" nowrap = "true" valign = "top">
      2. <br>
      <a href="#exam" title="<?php echo $loc-> getText ("biblioSearchDetail");?> ">
      <Img src = "../ images / book.gif" alt = "book" align = "bottom" border = "0" height = "20" width = "20"> </a>
    </ td>
    <td class = "primário" colspan = "2" valign = "top">
      <table class = "primary" width = "100%">

        <tbody> <tr>
          <td class = "noborder" valign = "top" width = "1%"> <b> <? Php echo $ loc-> getText ("biblioSearchTitle"); ?>: </ B> </ td>
          <td class = "noborder" colspan = "3"> <a href="#exam" title="<?php echo $loc-> getText ("biblioSearchDetail");?> "> Henry Huggins </a> < / Td>
        </ tr>
        <tr>
          <td class = "noborder" valign = "top"> <b> <? Php echo $ loc-> getText ("biblioSearchAuthor"); ?>: </ B> </ td>
          <td class = "noborder" colspan = "3"> Cleary, Beverly </ td>

        </ tr>
        <tr>
          <td class = "noborder" valign = "top"> <font class = "small"> <b> <? Php echo $ loc-> getText ("biblioSearchMaterial"); ?>: </ B> </ font> </ td>
          <td class = "noborder" colspan = "3"> <font class = "small"> livro </ font> </ td>
        </ tr>
        <tr>
          <td class = "noborder" valign = "top"> <font class = "small"> <b> <? php echo $ loc-> getText ("biblioSearchCollection"); ?>: </ B> </ font> </ td>

          <td class = "noborder" colspan = "3"> <font class = "small"> Juvenile Fiction </ font> </ td>
        </ tr>
        <tr>
          <td class = "n