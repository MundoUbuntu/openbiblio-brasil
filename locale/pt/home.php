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
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHeading"]       = "\$text='Bem vindo ao OpenBiblio';";
$trans["indexIntro"]         = "\$text=
  '
Use as guias de navegação na parte superior de cada página para acessar a seguinte biblioteca
  administration sections.';";
$trans["indexTab"]           = "\$text='Guia';";
$trans["indexDesc"]          = "\$text='Descrição';";
$trans["indexCirc"]          = "\$text='Circulação';";
$trans["indexCircDesc1"]     = "\$text='Use as guias de navegação no topo de cada página para acessar o use essa guia para gerenciar seus registros de membro.';";
$trans["indexCircDesc2"]     = "\$text='Administração de membros (nova, pesquisar, editar, apagar) '; ";
$trans["indexCircDesc3"]     = "\$text='Retirada de bibliografia, reservas, conta do leitor, histórico';";
$trans["indexCircDesc4"]     = "\$text='Bibliografia em devolução';";
//$trans["indexCircDesc5"]     = "\$text='Usuário pagamentos de taxas';";
$trans["indexCat"]           = "\$text='Catalogação';";
$trans["indexCatDesc1"]      = "\$text='Utilize esta guia para gerenciar seus registros bibliográficos.';";
$trans["indexCatDesc2"]      = "\$text='Gerenciamento de Bibliografia (novo, progurar, editar, eliminar)';";
//$trans["indexCatDesc3"]      = "\$text='Importar bibliografia em fomato USMarc';";
$trans["indexAdmin"]         = "\$text='Administração';";
$trans["indexAdminDesc1"]    = "\$text='Utilize esta guia para gerenciar registros administrativos.';";
$trans["indexAdminDesc2"]    = "\$text='Administração de colaboradores (novo, editar, senha, eliminar)';";
$trans["indexAdminDesc3"]    = "\$text='Configurações Gerais da Biblioteca';";
$trans["indexAdminDesc5"]    = "\$text='
Lista dos Tipos de material da biblioteca';";
$trans["indexAdminDesc4"]    = "\$text='Lista de Coleções';";
$trans["indexAdminDesc6"]    = "\$text='Editor de Temas da Biblioteca';";
$trans["indexReports"]       = "\$text='Relatórios';";
$trans["indexReportsDesc1"]  = "\$text='Use esta guia para obter relatórios dos dados de sua biblioteca.';";
$trans["indexReportsDesc2"]  = "\$text='Relatórios.';";
$trans["indexReportsDesc3"]  = "\$text='Estatísticas.';";

?>
