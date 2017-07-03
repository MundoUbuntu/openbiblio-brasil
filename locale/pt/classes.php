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
#*  Translation text for class Biblio
#****************************************************************************
$trans["biblioError1"]            = "\$text = 'Call number is required.';";

#****************************************************************************
#*  Translation text for class BiblioField
#****************************************************************************
$trans["biblioFieldError1"]       = "\$text = 'Field is required.';";
$trans["biblioFieldError2"]       = "\$text = 'Tag must be numeric.';";

#****************************************************************************
#*  Translation text for class BiblioQuery
#****************************************************************************
$trans["biblioQueryQueryErr1"]    = "\$text = 'Erro ao acessar informa��es bibliogr�ficas.';";
$trans["biblioQueryQueryErr2"]    = "\$text = 'Erro ao acessar bibliografia informa��es de campo.';";
$trans["biblioQueryInsertErr1"]   = "\$text = 'Erro ao inserir novas informa��es bibliogr�ficas.';";
$trans["biblioQueryInsertErr2"]   = "\$text = 'Erro ao inserir novas informa��es de campo de bibliografia.';";
$trans["biblioQueryUpdateErr1"]   = "\$text = 'Erro ao atualizar a informa��o bibliogr�fica.';";
$trans["biblioQueryUpdateErr2"]   = "\$text = 'Erro ao limpar as informa��es de campo da bibliografia para atualiza��o.';";
$trans["biblioQueryDeleteErr"]    = "\$text = 'Erro ao eliminar informa��es bibliogr�ficas.';";

#****************************************************************************
#*  Translation text for class BiblioSearchQuery
#****************************************************************************
$trans["biblioSearchQueryErr1"]   = "\$text = 'Erro ao contar os resultados da pesquisa bibliogr�fica.';";
$trans["biblioSearchQueryErr2"]   = "\$text = 'Erro ao pesquisar informa��es bibliogr�ficas.';";
$trans["biblioSearchQueryErr3"]   = "\$text = 'Erro ao ler a informa��o bibliogr�fica.';";

#****************************************************************************
#*  Translation text for class BiblioCopy
#****************************************************************************
$trans["biblioCopyError1"]        = "\$text = 'N�mero de c�digo de barras � necess�rio.';";
$trans["biblioCopyError2"]        = "\$text = 'Caracteres inv�lidos no n�mero de c�digo de barras.';";

#****************************************************************************
#*  Translation text for class BiblioCopyQuery
#****************************************************************************
$trans["biblioCopyQueryErr1"]     = "\$text = 'Erro ao verificar o c�digo de barras dup.';";
$trans["biblioCopyQueryErr2"]     = "\$text = 'N�mero c�digo de barras %barcodeNmbr% j� est� em uso.';";
$trans["biblioCopyQueryErr3"]     = "\$text = 'Erro ao inserir nova bibliografia copiar informa��es.';";
$trans["biblioCopyQueryErr4"]     = "\$text = 'Erro ao acessar bibliografia copiar informa��es.';";
$trans["biblioCopyQueryErr5"]     = "\$text = 'Erro ao atualizar a bibliografia copiar informa��es.';";
$trans["biblioCopyQueryErr6"]     = "\$text = 'Erro ao eliminar informa��es bibliogr�ficas.';";
$trans["biblioCopyQueryErr7"]     = "\$text = 'Erro ao acessar a informa��o da bibliografia para obter o c�digo da cole��o.';";
$trans["biblioCopyQueryErr8"]     = "\$text = 'Erro ao acessar as informa��es de coleta para verificar os dias devidos.';";
$trans["biblioCopyQueryErr9"]     = "\$text = 'Ocorreu um erro ao verificar c�pias em ';";
$trans["biblioCopyQueryErr10"]    = "\$text = 'Ocorreu um erro ao verificar os limites de compra';";
$trans["biblioCopyQueryErr11"]    = "\$text = 'Erro ao buscar o maior n�mero de c�pias.';";

#****************************************************************************
#*  Translation text for class BiblioFieldQuery
#****************************************************************************
$trans["biblioFieldQueryErr1"]    = "\$text = 'Erro ao ler um campo de bibliografia.';";
$trans["biblioFieldQueryErr2"]    = "\$text = 'Erro ao ler campos de bibliografia.';";
$trans["biblioFieldQueryInsertErr"] = "\$text = 'Erro ao inserir um novo campo de bibliografia.';";
$trans["biblioFieldQueryUpdateErr"] = "\$text = 'Erro ao atualizar campo de bibliografia.';";
$trans["biblioFieldQueryDeleteErr"] = "\$text = 'Erro ao excluir o campo de bibliografia.';";

#****************************************************************************
#*  Translation text for class UsmarcBlockDmQuery
#****************************************************************************
$trans["usmarcBlockDmQueryErr1"]  = "\$text = 'Erro ao acessar os dados do bloco de marc.';";

#****************************************************************************
#*  Translation text for class UsmarcTagDmQuery
#****************************************************************************
$trans["usmarcTagDmQueryErr1"]    = "\$text = 'Erro ao acessar os dados da tag marc.';";

#****************************************************************************
#*  Translation text for class UsmarcSubfieldDmQuery
#****************************************************************************
$trans["usmarcSubfldDmQueryErr1"] = "\$text = 'Erro ao acessar os dados do subcampo marc.';";

#****************************************************************************
#*  Translation text for class BiblioHoldQuery
#****************************************************************************
$trans["biblioHoldQueryErr1"]     = "\$text = 'Erro ao acessar os dados de reten��o por identifica��o bibliogr�fica.';";
$trans["biblioHoldQueryErr2"]     = "\$text = 'Erro ao acessar os dados de espera pelo id do membro.';";
$trans["biblioHoldQueryErr3"]     = "\$text = 'Erro ao obter bibid e copyid para colocar a espera.';";
$trans["biblioHoldQueryErr4"]     = "\$text = 'Erro ao inserir dados de espera.';";
$trans["biblioHoldQueryErr5"]     = "\$text = 'Erro ao excluir dados de espera.';";
$trans["biblioHoldQueryErr6"]     = "\$text = 'Erro ao obter o primeiro membro de espera para uma c�pia.';";

#****************************************************************************
#*  Translation text for class ReportQuery
#****************************************************************************
$trans["reportQueryErr1"]         = "\$text = 'Erro ao executar um relat�rio.';";

#****************************************************************************
#*  Translation text for class ReportCriteria
#****************************************************************************
$trans["reportCriteriaErr1"]      = "\$text = 'O valor n�o num�rico n�o � v�lido com coluna num�rica.';";
$trans["reportCriteriaDateTimeErr"] = "\$text = 'Formato de data e hora inv�lido.';";
$trans["reportCriteriaDateErr"]   = "\$text = 'Formato de data inv�lido.';";

#****************************************************************************
#*  Translation text for class LabelFormat and LetterFormat
#****************************************************************************
$trans["labelFormatFontErr"]      = "\$text = 'Tipo de fonte inv�lido especificado na defini��o de etiqueta xml. Tipos de fontes v�lidos s�o Courier, Helvetica e Times-Roman.';";
$trans["labelFormatFontSizeErr"]  = "\$text = 'Tamanho de letra inv�lido especificado na defini��o de etiqueta xml. O tamanho da fonte deve ser num�rico.';";
$trans["labelFormatFontSizeErr2"] = "\$text = 'Tamanho de letra inv�lido especificado na defini��o de etiqueta xml. O tamanho da fonte deve ser maior que zero.';";
$trans["labelFormatLMarginErr"]   = "\$text = 'Margem esquerda inv�lida especificada na defini��o de etiqueta xml. A margem esquerda deve ser num�rica.';";
$trans["labelFormatLMarginErr2"]  = "\$text = 'Margem esquerda inv�lida especificada na defini��o de etiqueta xml. A margem esquerda deve ser maior que zero.';";
$trans["labelFormatRMarginErr"]   = "\$text = 'Margem direita inv�lida especificada na defini��o de etiqueta xml. A margem direita deve ser num�rica.';";
$trans["labelFormatRMarginErr2"]  = "\$text = 'Margem direita inv�lida especificada na defini��o de etiqueta xml. A margem direita deve ser maior que zero.';";
$trans["labelFormatTMarginErr"]   = "\$text = '
Margem superior inv�lida especificada na defini��o de etiqueta xml. A margem superior deve ser num�rica.';";
$trans["labelFormatTMarginErr2"]  = "\$text = 'Margem superior inv�lida especificada na defini��o de etiqueta xml. A margem superior deve ser maior que zero.';";
$trans["labelFormatBMarginErr"]   = "\$text = 'Margem inferior inv�lida especificada na defini��o de etiqueta xml. A margem inferior deve ser num�rica.';";
$trans["labelFormatBMarginErr2"]  = "\$text = 'Margem inferior inv�lida especificada na defini��o de etiqueta xml. A margem inferior deve ser maior do que zero.';";
$trans["labelFormatColErr"]       = "\$text = 'Colunas inv�lidas especificadas na defini��o de etiqueta xml. As colunas devem ser num�ricas.';";
$trans["labelFormatColErr2"]      = "\$text = 'Colunas inv�lidas especificadas na defini��o de etiqueta xml. As colunas devem ser maiores do que zero.';";
$trans["labelFormatWidthErr"]     = "\$text = 'Largura inv�lida especificada na defini��o do r�tulo xml. A largura deve ser num�rica.';";
$trans["labelFormatWidthErr2"]    = "\$text = 'Largura inv�lida especificada na defini��o do r�tulo xml. A largura deve ser maior que zero.';";
$trans["labelFormatHeightErr"]    = "\$text = 'Altura inv�lida especificada na defini��o do r�tulo xml. Altura deve ser num�rica.';";
$trans["labelFormatHeightErr2"]   = "\$text = 'Altura inv�lida especificada na defini��o do r�tulo xml. A altura deve ser maior que zero.';";
$trans["labelFormatNoLabelsErr"]  = "\$text = 'Linhas de r�tulos inv�lidas especificadas na defini��o de etiqueta xml.';";

#****************************************************************************
#*  Translation text for class BiblioStatusHistQuery
#****************************************************************************
$trans["biblioStatusHistQueryErr1"] = "\$text = 'Erro ao obter o hist�rico de status da bibliografia por meio de uma refer�ncia bibliogr�fica.';";
$trans["biblioStatusHistQueryErr2"] = "\$text = 'Erro ao obter o hist�rico de status da bibliografia pelo ID do membro';";
$trans["biblioStatusHistQueryErr3"] = "\$text = 'Erro ao inserir o hist�rico de status da bibliografia';";
$trans["biblioStatusHistQueryErr4"] = "\$text = 'Erro ao excluir o hist�rico de status da bibliografia por meio do ID de c�pia';";
$trans["biblioStatusHistQueryErr5"] = "\$text = 'Erro ao excluir o hist�rico de status da bibliografia pelo ID do membro';";

#****************************************************************************
#*  Translation text for class MemberAccountTransaction
#****************************************************************************
$trans["memberAccountTransError1"]  = "\$text = '� necess�rio um valor.';";
$trans["memberAccountTransError2"]  = "\$text = 'O valor deve ser num�rico.';";
$trans["memberAccountTransError3"]  = "\$text = '
Descri��o necess�ria.';";

#****************************************************************************
#*  Translation text for class MemberAccountQuery
#****************************************************************************
$trans["memberAccountQueryErr1"]    = "\$text = 'Erro ao acessar informa��es da conta do membro.';";
$trans["memberAccountQueryErr2"]    = "\$text = 'Erro ao inserir informa��es da conta do membro.';";
$trans["memberAccountQueryErr3"]    = "\$text = 'Erro ao excluir informa��es da conta do membro.';";

?>
