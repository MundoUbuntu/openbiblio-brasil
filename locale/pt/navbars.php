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
$trans["homeLicenseLink"]          = "\$text = 'Licença';";

#****************************************************************************
#*  Translation text for page admin.php
#****************************************************************************
$trans["adminSummary"]             = "\$text = 'Painel de Adminstração';";
$trans["adminStaff"]               = "\$text = 'Equipe de Administração';";
$trans["adminSettings"]            = "\$text = 'Configurações da Biblioteca';";
$trans["Member Types"]       = "\$text = 'Tipos de Membros';";
$trans["Member Fields"]       = "\$text = 'Campos de Membros';";
$trans["Member Fields "]       = "\$text = 'Campos de Membros';";
$trans["Copy Fields"]       = "\$text = 'Copiar Campos';";
$trans["Copy Fields "]       = "\$text = 'Copiar Campos';";
$trans["adminMaterialTypes"]       = "\$text = 'Tipos de Materiais';";
$trans["adminCollections"]         = "\$text = 'Coleções';";
$trans["Checkout Privs"]         = "\$text = 'Regras de Empréstimos';";
$trans["adminThemes"]              = "\$text = 'Temas';";
$trans["adminTranslation"]         = "\$text = 'Tradução';";

#****************************************************************************
#*  Translation text for page cataloging.php
#****************************************************************************
$trans["catalogSummary"]           = "\$text = 'Resumo do Catálogo';";
$trans["catalogSearch1"]           = "\$text = 'Pesquisa Biblio';";
$trans["catalogSearch2"]           = "\$text = 'Pesquisa Bibliográfica';";
$trans["catalogResults"]           = "\$text = 'Pesquisa Resultados';";
$trans["catalogBibInfo"]           = "\$text = 'Informações Bibliográficas';";
$trans["catalogBibEdit"]           = "\$text = 'Editar-Básico';";
$trans["catalogBibEditMarc"]       = "\$text = 'Editar-MARC';";
$trans["catalogBibMarcNewFld"]     = "\$text = 'Novo Campo MARC';";
$trans["catalogBibMarcNewFldShrt"] = "\$text = 'Novo MARC';";
$trans["catalogBibMarcEditFld"]    = "\$text = 'Editar Campo MARC';";
$trans["catalogCopyNew"]           = "\$text = 'Nova Cópia';";
$trans["catalogCopyEdit"]          = "\$text = 'Editar Cópia';";
$trans["catalogHolds"]             = "\$text = 'Solicitações em Espera;";
$trans["catalogDelete"]            = "\$text = 'Deletar';";
$trans["catalogBibNewLike"]        = "\$text = 'Novo Como';";
$trans["catalogBibNew"]            = "\$text = 'Nova Bibliografia';";
$trans["Upload Marc Data"]         = "\$text = 'Enviar dados MARC';";

#****************************************************************************
#*  Translation text for page reports.php
#****************************************************************************
$trans["reportsSummary"]        = "\$text = 'Resumo de relatório';";
$trans["reportsReportListLink"] = "\$text = 'Lista de relatórios';";
$trans["reportsLabelsLink"]     = "\$text = 'Imprimir Etiqueta';";
$trans["reportsLettersLink"]    = "\$text = 'Imprimir Cartas';";
$trans["Report List"]           = "\$text = 'Lista de relatórios';";
$trans["Print List"]            = "\$text = 'Lista de Impressão';";
$trans["Help"]                  = "\$text = 'Ajuda';";

#****************************************************************************
#*  Translation text for page opac.php
#****************************************************************************
$trans["catalogSearch1"]           = "\$text = 'Pesquisa';";
$trans["catalogSearch2"]           = "\$text = 'Pesquisa Bibliográfica';";
$trans["catalogResults"]           = "\$text = 'Procurar Resultados';";
$trans["catalogBibInfo"]           = "\$text = 'Informações Bibliográficas;";

#Added

$trans["memberInfo"]="\$text = 'Informação de usuário';";
$trans["memberSearch"]="\$text = 'Pesquisar Usuário';";
$trans["editInfo"]="\$text = 'Editar Informações';";
$trans["checkoutHistory"]= "\$text = 'Histórico de Empréstimos;";
$trans["account"]="\$text = 'Conta';";
$trans["checkIn"]="\$text = 'Devolução';";
$trans["Offline Circulation"]="\$text = 'Circulação Manual';";
$trans["memberSearch"]= "\$text = 'Pesquisa de Usuário';";
$trans["newMember"]   = "\$text = 'Novo Usuário';";
$trans["account"]     = "\$text = 'Conta';";
?>
