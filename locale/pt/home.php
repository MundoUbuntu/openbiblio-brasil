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
Use as guias de navega��o na parte superior de cada p�gina para acessar a seguinte biblioteca
  administration sections.';";
$trans["indexTab"]           = "\$text='Guia';";
$trans["indexDesc"]          = "\$text='Descri��o';";
$trans["indexCirc"]          = "\$text='Circula��o';";
$trans["indexCircDesc1"]     = "\$text='Use as guias de navega��o no topo de cada p�gina para acessar o use essa guia para gerenciar seus registros de membro.';";
$trans["indexCircDesc2"]     = "\$text='Administra��o de membros (nova, pesquisar, editar, apagar) '; ";
$trans["indexCircDesc3"]     = "\$text='Retirada de bibliografia, reservas, conta do leitor, hist�rico';";
$trans["indexCircDesc4"]     = "\$text='Bibliografia em devolu��o';";
//$trans["indexCircDesc5"]     = "\$text='Usu�rio pagamentos de taxas';";
$trans["indexCat"]           = "\$text='Cataloga��o';";
$trans["indexCatDesc1"]      = "\$text='Utilize esta guia para gerenciar seus registros bibliogr�ficos.';";
$trans["indexCatDesc2"]      = "\$text='Gerenciamento de Bibliografia (novo, progurar, editar, eliminar)';";
//$trans["indexCatDesc3"]      = "\$text='Importar bibliografia em fomato USMarc';";
$trans["indexAdmin"]         = "\$text='Administra��o';";
$trans["indexAdminDesc1"]    = "\$text='Utilize esta guia para gerenciar registros administrativos.';";
$trans["indexAdminDesc2"]    = "\$text='Administra��o de colaboradores (novo, editar, senha, eliminar)';";
$trans["indexAdminDesc3"]    = "\$text='Configura��es Gerais da Biblioteca';";
$trans["indexAdminDesc5"]    = "\$text='
Lista dos Tipos de material da biblioteca';";
$trans["indexAdminDesc4"]    = "\$text='Lista de Cole��es';";
$trans["indexAdminDesc6"]    = "\$text='Editor de Temas da Biblioteca';";
$trans["indexReports"]       = "\$text='Relat�rios';";
$trans["indexReportsDesc1"]  = "\$text='Use esta guia para obter relat�rios dos dados de sua biblioteca.';";
$trans["indexReportsDesc2"]  = "\$text='Relat�rios.';";
$trans["indexReportsDesc3"]  = "\$text='Estat�sticas.';";

?>
