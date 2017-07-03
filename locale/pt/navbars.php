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
#*  Translation text shared by various php files under the navbars dir
#****************************************************************************
$trans["login"]                    = "\$text = 'Entrar no Sistema';";
$trans["logout"]                   = "\$text = 'Sair do Sistema';";
$trans["Logout"]                   = "\$text = 'Sair do Sistema';";
$trans["help"]                     = "\$text = 'Ajuda';";

#****************************************************************************
#*  Translation text for page home.php
#****************************************************************************
$trans["homeHomeLink"]             = "\$text = 'Inicial';";
$trans["homeLicenseLink"]          = "\$text = 'Licen�a';";

#****************************************************************************
#*  Translation text for page admin.php
#****************************************************************************
$trans["adminSummary"]             = "\$text = 'Painel de Adminstra��o';";
$trans["adminStaff"]               = "\$text = 'Equipe de Administra��o';";
$trans["adminSettings"]            = "\$text = 'Configura��es da Biblioteca';";
$trans["Member Types"]       = "\$text = 'Tipos de Membros';";
$trans["Member Fields"]       = "\$text = 'Campos de Membros';";
$trans["Member Fields "]       = "\$text = 'Campos de Membros';";
$trans["Copy Fields"]       = "\$text = 'Copiar Campos';";
$trans["Copy Fields "]       = "\$text = 'Copiar Campos';";
$trans["adminMaterialTypes"]       = "\$text = 'Tipos de Materiais';";
$trans["adminCollections"]         = "\$text = 'Cole��es';";
$trans["Checkout Privs"]         = "\$text = 'Regras de Empr�stimos';";
$trans["adminThemes"]              = "\$text = 'Temas';";
$trans["adminTranslation"]         = "\$text = 'Tradu��o';";

#****************************************************************************
#*  Translation text for page cataloging.php
#****************************************************************************
$trans["catalogSummary"]           = "\$text = 'Resumo do Cat�logo';";
$trans["catalogSearch1"]           = "\$text = 'Pesquisa Biblio';";
$trans["catalogSearch2"]           = "\$text = 'Pesquisa Bibliogr�fica';";
$trans["catalogResults"]           = "\$text = 'Pesquisa Resultados';";
$trans["catalogBibInfo"]           = "\$text = 'Informa��es Bibliogr�ficas';";
$trans["catalogBibEdit"]           = "\$text = 'Editar-B�sico';";
$trans["catalogBibEditMarc"]       = "\$text = 'Editar-MARC';";
$trans["catalogBibMarcNewFld"]     = "\$text = 'Novo Campo MARC';";
$trans["catalogBibMarcNewFldShrt"] = "\$text = 'Novo MARC';";
$trans["catalogBibMarcEditFld"]    = "\$text = 'Editar Campo MARC';";
$trans["catalogCopyNew"]           = "\$text = 'Nova C�pia';";
$trans["catalogCopyEdit"]          = "\$text = 'Editar C�pia';";
$trans["catalogHolds"]             = "\$text = 'Solicita��es em Espera;";
$trans["catalogDelete"]            = "\$text = 'Deletar';";
$trans["catalogBibNewLike"]        = "\$text = 'Novo Como';";
$trans["catalogBibNew"]            = "\$text = 'Nova Bibliografia';";
$trans["Upload Marc Data"]         = "\$text = 'Enviar dados MARC';";

#****************************************************************************
#*  Translation text for page reports.php
#****************************************************************************
$trans["reportsSummary"]        = "\$text = 'Resumo de relat�rio';";
$trans["reportsReportListLink"] = "\$text = 'Lista de relat�rios';";
$trans["reportsLabelsLink"]     = "\$text = 'Imprimir Etiqueta';";
$trans["reportsLettersLink"]    = "\$text = 'Imprimir Cartas';";
$trans["Report List"]           = "\$text = 'Lista de relat�rios';";
$trans["Print List"]            = "\$text = 'Lista de Impress�o';";
$trans["Help"]                  = "\$text = 'Ajuda';";

#****************************************************************************
#*  Translation text for page opac.php
#****************************************************************************
$trans["catalogSearch1"]           = "\$text = 'Pesquisa';";
$trans["catalogSearch2"]           = "\$text = 'Pesquisa Bibliogr�fica';";
$trans["catalogResults"]           = "\$text = 'Procurar Resultados';";
$trans["catalogBibInfo"]           = "\$text = 'Informa��es Bibliogr�ficas;";

#Added

$trans["memberInfo"]="\$text = 'Informa��o de usu�rio';";
$trans["memberSearch"]="\$text = 'Pesquisar Usu�rio';";
$trans["editInfo"]="\$text = 'Editar Informa��es';";
$trans["checkoutHistory"]= "\$text = 'Hist�rico de Empr�stimos;";
$trans["account"]="\$text = 'Conta';";
$trans["checkIn"]="\$text = 'Devolu��o';";
$trans["Offline Circulation"]="\$text = 'Circula��o Manual';";
$trans["memberSearch"]= "\$text = 'Pesquisa de Usu�rio';";
$trans["newMember"]   = "\$text = 'Novo Usu�rio';";
$trans["account"]     = "\$text = 'Conta';";
?>
