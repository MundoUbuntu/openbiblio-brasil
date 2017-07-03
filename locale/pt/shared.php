<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
/**********************************************************************************
 *   Instructions for translators:
 *
 *   All gettext key/value pairs are specified as follows:
 *     $trans["key"] = "<php translation code to set the $text variable>";
 *   Allowing translators the ability to execute php code withint the transFunc string
 *   provides the maximum amount of flexibility to format the languange syntax.
 *
 *   Formatting rules:
 *   - Resulting translation string must be stored in a variable called $text.
 *   - Input arguments must be surrounded by % characters (i.e. %pageCount%).
 *   - A backslash ('\') needs to be placed before any special php characters 
 *     (such as $, ", etc.) within the php translation code.
 *
 *   Simple Example:
 *     $trans["homeWelcome"]       = "\$text='Welcome to OpenBiblio';";
 *
 *   Example Containing Argument Substitution:
 *     $trans["searchResult"]      = "\$text='page %page% of %pages%';";
 *
 *   Example Containing a PHP If Statment and Argument Substitution:
 *     $trans["searchResult"]      = 
 *       "if (%items% == 1) {
 *         \$text = '%items% result';
 *       } else {
 *         \$text = '%items% results';
 *       }";
 *
 **********************************************************************************
 */

#****************************************************************************
#*  Common translation text shared among multiple pages
#****************************************************************************
$trans["sharedCancel"]             = "\$text = 'Cancela';";
$trans["sharedDelete"]             = "\$text = 'Deletar';";

#****************************************************************************
#*  Translation text for page biblio_view.php
#****************************************************************************
$trans["biblioViewTble1Hdr"]       = "\$text = 'Informa��es Bibliogr�ficas';";
$trans["biblioViewMaterialType"]   = "\$text = 'Tipo de Material';";
$trans["biblioViewCollection"]     = "\$text = 'Cole��o';";
$trans["biblioViewCallNmbr"]       = "\$text = 'N�mero de Chamada';";
$trans["biblioViewTble2Hdr"]       = "\$text = 'Copiar Informa��es Bibliogr�ficas';";
$trans["biblioViewTble2Col1"]      = "\$text = 'C�digo de Barras #';";
$trans["biblioViewTble2Col2"]      = "\$text = 'Descri��o';";
$trans["biblioViewTble2Col3"]      = "\$text = 'Situa��o';";
$trans["biblioViewTble2Col4"]      = "\$text = 'Situa��o Dt';";
$trans["biblioViewTble2Col5"]      = "\$text = 'Devido';";
$trans["biblioViewTble2ColFunc"]   = "\$text = 'Fun��o';";
$trans["biblioViewTble2Coldel"]    = "\$text = 'deletar';";
$trans["biblioViewTble2Coledit"]   = "\$text = 'editar';";
$trans["biblioViewTble3Hdr"]       = "\$text = 'Informa��es bibliogr�ficas adicionais';";
$trans["biblioViewNoAddInfo"]      = "\$text = 'N�o h� informa��es bibliogr�ficas adicionais dispon�veis.';";
$trans["biblioViewNoCopies"]       = "\$text = 'Nenhuma c�pia foi criada.';";
$trans["biblioViewOpacFlg"]        = "\$text = 'Mostrar na Pesquisa/OPAC';";
$trans["biblioViewNewCopy"]        = "\$text = 'Adicionar nova c�pia';";
$trans["biblioViewNeweCopy"]       = "\$text = 'Adicionar nova c�pia eletr�nica';";
$trans["biblioViewYes"]            = "\$text = 'Sim';";
$trans["biblioViewNo"]             = "\$text = 'N�o';";

#****************************************************************************
#*  Translation text for page biblio_search.php
#****************************************************************************
$trans["biblioSearchNoResults"]    = "\$text = 'Nenhum resultado encontrado.';";
$trans["biblioSearchResults"]      = "\$text = 'Procurar Resultados';";
$trans["biblioSearchResultPages"]  = "\$text = 'P�ginas de Resultados';";
$trans["biblioSearchPrev"]         = "\$text = 'anterior';";
$trans["biblioSearchNext"]         = "\$text = 'pr�ximo';";
$trans["biblioSearchResultTxt"]    = "if (%items% == 1) {
                                        \$text = '%items% Resultado encontrado.';
                                      } else {
                                        \$text = '%items% Resultado encontrado';
                                      }";
$trans["biblioSearchauthor"]       = "\$text = ' Ordenados por autor';";
$trans["biblioSearchtitle"]        = "\$text = ' Ordenado por t�tulo';";
$trans["biblioSearchSortByAuthor"] = "\$text = 'Classificado por autor';";
$trans["biblioSearchSortByTitle"]  = "\$text = 'Classificado por t�tulo';";
$trans["biblioSearchTitle"]        = "\$text = 'T�tulo';";
$trans["biblioSearchAuthor"]       = "\$text = 'Autor';";
$trans["biblioSearchMaterial"]     = "\$text = 'Material';";
$trans["biblioSearchCollection"]   = "\$text = 'Colr��o';";
$trans["biblioSearchCall"]         = "\$text = 'N�mero de Chamada';";
$trans["biblioSearchCopyBCode"]    = "\$text = 'Copiar c�digo de barras';";
$trans["biblioSearchCopyStatus"]   = "\$text = 'Condi��o';";
$trans["biblioSearchNoCopies"]     = "\$text = 'N�o h� c�pias dispon�veis.';";
$trans["biblioSearchHold"]         = "\$text = 'Aguardar';";
$trans["biblioSearchOutIn"]        = "\$text = 'Conferir';";
$trans["biblioSearchDetail"]       = "\$text = 'Mostrar informa��es detalhadas sobre bibliografia';";
$trans["biblioSearchBCode2Chk"]    = "\$text = 'Verificar C�digo de barras ou entrar em formul�rio';";
$trans["biblioSearchBCode2Hold"]   = "\$text = 'Manter C�digo de Barras de Formul�rio de espera';";

#****************************************************************************
#*  Translation text for page loginform.php
#****************************************************************************
$trans["loginFormTbleHdr"]         = "\$text = 'Colaborador';";
$trans["loginFormUsername"]        = "\$text = 'Usu�rio';";
$trans["loginFormPassword"]        = "\$text = 'Senha';";
$trans["loginFormLogin"]           = "\$text = 'Entrar';";

#****************************************************************************
#*  Translation text for page hold_del_confirm.php
#****************************************************************************
$trans["holdDelConfirmMsg"]        = "\$text = 'Tem certeza de que deseja excluir este pedido de espera?';";

#****************************************************************************
#*  Translation text for page hold_del.php
#****************************************************************************
$trans["holdDelSuccess"]           = "\$text='O pedido de espera foi exclu�do com sucesso.';";

#****************************************************************************
#*  Translation text for page help_header.php
#****************************************************************************
$trans["helpHeaderTitle"]          = "\$text='Ajuda';";
$trans["helpHeaderCloseWin"]       = "\$text='Fechar janela';";
$trans["helpHeaderContents"]       = "\$text='Conte�do';";
$trans["helpHeaderPrint"]          = "\$text='Impress�o';";

$trans["catalogResults"]           = "\$text='Procurar Resultados';";

#****************************************************************************
#*  Translation text for page header.php and header_opac.php
#****************************************************************************
$trans["headerTodaysDate"]         = "\$text='data de hoje:';";
$trans["headerDateFormat"]         = "\$text='M d, Y';";
$trans["headerLibraryHours"]       = "\$text='hor�rio da biblioteca:';";
$trans["headerLibraryPhone"]       = "\$text='Telefone da Biblioteca:';";
$trans["headerHome"]               = "\$text='Inicial';";
$trans["headerCirculation"]        = "\$text='Circula��o';";
$trans["headerCataloging"]         = "\$text='Cataloga��o';";
$trans["headerAdmin"]              = "\$text='Administra��o';";
$trans["headerReports"]            = "\$text='
Relat�rios';";

#****************************************************************************
#*  Translation text for page footer.php
#****************************************************************************
$trans["footerLibraryHome"]        = "\$text='In�cio da Biblioteca';";
$trans["footerOPAC"]               = "\$text='Pesquisa/OPAC';";
$trans["footerHelp"]               = "\$text='Ajuda';";
$trans["footerPoweredBy"]          = "\$text='Powered by OpenBiblio version';";
$trans["footerDatabaseVersion"]    = "\$text='database version';";
$trans["footerCopyright"]          = "\$text='Copyright';";
$trans["footerUnderThe"]           = "\$text='sob a';";
$trans["footerGPL"]                = "\$text='GNU General Public License';";

?>
