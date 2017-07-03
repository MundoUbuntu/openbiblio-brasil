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
$trans["biblioQueryQueryErr1"]    = "\$text = 'Erro ao acessar informações bibliográficas.';";
$trans["biblioQueryQueryErr2"]    = "\$text = 'Erro ao acessar bibliografia informações de campo.';";
$trans["biblioQueryInsertErr1"]   = "\$text = 'Erro ao inserir novas informações bibliográficas.';";
$trans["biblioQueryInsertErr2"]   = "\$text = 'Erro ao inserir novas informações de campo de bibliografia.';";
$trans["biblioQueryUpdateErr1"]   = "\$text = 'Erro ao atualizar a informação bibliográfica.';";
$trans["biblioQueryUpdateErr2"]   = "\$text = 'Erro ao limpar as informações de campo da bibliografia para atualização.';";
$trans["biblioQueryDeleteErr"]    = "\$text = 'Erro ao eliminar informações bibliográficas.';";

#****************************************************************************
#*  Translation text for class BiblioSearchQuery
#****************************************************************************
$trans["biblioSearchQueryErr1"]   = "\$text = 'Erro ao contar os resultados da pesquisa bibliográfica.';";
$trans["biblioSearchQueryErr2"]   = "\$text = 'Erro ao pesquisar informações bibliográficas.';";
$trans["biblioSearchQueryErr3"]   = "\$text = 'Erro ao ler a informação bibliográfica.';";

#****************************************************************************
#*  Translation text for class BiblioCopy
#****************************************************************************
$trans["biblioCopyError1"]        = "\$text = 'Número de código de barras é necessário.';";
$trans["biblioCopyError2"]        = "\$text = 'Caracteres inválidos no número de código de barras.';";

#****************************************************************************
#*  Translation text for class BiblioCopyQuery
#****************************************************************************
$trans["biblioCopyQueryErr1"]     = "\$text = 'Erro ao verificar o código de barras dup.';";
$trans["biblioCopyQueryErr2"]     = "\$text = 'Número código de barras %barcodeNmbr% já está em uso.';";
$trans["biblioCopyQueryErr3"]     = "\$text = 'Erro ao inserir nova bibliografia copiar informações.';";
$trans["biblioCopyQueryErr4"]     = "\$text = 'Erro ao acessar bibliografia copiar informações.';";
$trans["biblioCopyQueryErr5"]     = "\$text = 'Erro ao atualizar a bibliografia copiar informações.';";
$trans["biblioCopyQueryErr6"]     = "\$text = 'Erro ao eliminar informações bibliográficas.';";
$trans["biblioCopyQueryErr7"]     = "\$text = 'Erro ao acessar a informação da bibliografia para obter o código da coleção.';";
$trans["biblioCopyQueryErr8"]     = "\$text = 'Erro ao acessar as informações de coleta para verificar os dias devidos.';";
$trans["biblioCopyQueryErr9"]     = "\$text = 'Ocorreu um erro ao verificar cópias em ';";
$trans["biblioCopyQueryErr10"]    = "\$text = 'Ocorreu um erro ao verificar os limites de compra';";
$trans["biblioCopyQueryErr11"]    = "\$text = 'Erro ao buscar o maior número de cópias.';";

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
$trans["biblioHoldQueryErr1"]     = "\$text = 'Erro ao acessar os dados de retenção por identificação bibliográfica.';";
$trans["biblioHoldQueryErr2"]     = "\$text = 'Erro ao acessar os dados de espera pelo id do membro.';";
$trans["biblioHoldQueryErr3"]     = "\$text = 'Erro ao obter bibid e copyid para colocar a espera.';";
$trans["biblioHoldQueryErr4"]     = "\$text = 'Erro ao inserir dados de espera.';";
$trans["biblioHoldQueryErr5"]     = "\$text = 'Erro ao excluir dados de espera.';";
$trans["biblioHoldQueryErr6"]     = "\$text = 'Erro ao obter o primeiro membro de espera para uma cópia.';";

#****************************************************************************
#*  Translation text for class ReportQuery
#****************************************************************************
$trans["reportQueryErr1"]         = "\$text = 'Erro ao executar um relatório.';";

#****************************************************************************
#*  Translation text for class ReportCriteria
#****************************************************************************
$trans["reportCriteriaErr1"]      = "\$text = 'O valor não numérico não é válido com coluna numérica.';";
$trans["reportCriteriaDateTimeErr"] = "\$text = 'Formato de data e hora inválido.';";
$trans["reportCriteriaDateErr"]   = "\$text = 'Formato de data inválido.';";

#****************************************************************************
#*  Translation text for class LabelFormat and LetterFormat
#****************************************************************************
$trans["labelFormatFontErr"]      = "\$text = 'Tipo de fonte inválido especificado na definição de etiqueta xml. Tipos de fontes válidos são Courier, Helvetica e Times-Roman.';";
$trans["labelFormatFontSizeErr"]  = "\$text = 'Tamanho de letra inválido especificado na definição de etiqueta xml. O tamanho da fonte deve ser numérico.';";
$trans["labelFormatFontSizeErr2"] = "\$text = 'Tamanho de letra inválido especificado na definição de etiqueta xml. O tamanho da fonte deve ser maior que zero.';";
$trans["labelFormatLMarginErr"]   = "\$text = 'Margem esquerda inválida especificada na definição de etiqueta xml. A margem esquerda deve ser numérica.';";
$trans["labelFormatLMarginErr2"]  = "\$text = 'Margem esquerda inválida especificada na definição de etiqueta xml. A margem esquerda deve ser maior que zero.';";
$trans["labelFormatRMarginErr"]   = "\$text = 'Margem direita inválida especificada na definição de etiqueta xml. A margem direita deve ser numérica.';";
$trans["labelFormatRMarginErr2"]  = "\$text = 'Margem direita inválida especificada na definição de etiqueta xml. A margem direita deve ser maior que zero.';";
$trans["labelFormatTMarginErr"]   = "\$text = '
Margem superior inválida especificada na definição de etiqueta xml. A margem superior deve ser numérica.';";
$trans["labelFormatTMarginErr2"]  = "\$text = 'Margem superior inválida especificada na definição de etiqueta xml. A margem superior deve ser maior que zero.';";
$trans["labelFormatBMarginErr"]   = "\$text = 'Margem inferior inválida especificada na definição de etiqueta xml. A margem inferior deve ser numérica.';";
$trans["labelFormatBMarginErr2"]  = "\$text = 'Margem inferior inválida especificada na definição de etiqueta xml. A margem inferior deve ser maior do que zero.';";
$trans["labelFormatColErr"]       = "\$text = 'Colunas inválidas especificadas na definição de etiqueta xml. As colunas devem ser numéricas.';";
$trans["labelFormatColErr2"]      = "\$text = 'Colunas inválidas especificadas na definição de etiqueta xml. As colunas devem ser maiores do que zero.';";
$trans["labelFormatWidthErr"]     = "\$text = 'Largura inválida especificada na definição do rótulo xml. A largura deve ser numérica.';";
$trans["labelFormatWidthErr2"]    = "\$text = 'Largura inválida especificada na definição do rótulo xml. A largura deve ser maior que zero.';";
$trans["labelFormatHeightErr"]    = "\$text = 'Altura inválida especificada na definição do rótulo xml. Altura deve ser numérica.';";
$trans["labelFormatHeightErr2"]   = "\$text = 'Altura inválida especificada na definição do rótulo xml. A altura deve ser maior que zero.';";
$trans["labelFormatNoLabelsErr"]  = "\$text = 'Linhas de rótulos inválidas especificadas na definição de etiqueta xml.';";

#****************************************************************************
#*  Translation text for class BiblioStatusHistQuery
#****************************************************************************
$trans["biblioStatusHistQueryErr1"] = "\$text = 'Erro ao obter o histórico de status da bibliografia por meio de uma referência bibliográfica.';";
$trans["biblioStatusHistQueryErr2"] = "\$text = 'Erro ao obter o histórico de status da bibliografia pelo ID do membro';";
$trans["biblioStatusHistQueryErr3"] = "\$text = 'Erro ao inserir o histórico de status da bibliografia';";
$trans["biblioStatusHistQueryErr4"] = "\$text = 'Erro ao excluir o histórico de status da bibliografia por meio do ID de cópia';";
$trans["biblioStatusHistQueryErr5"] = "\$text = 'Erro ao excluir o histórico de status da bibliografia pelo ID do membro';";

#****************************************************************************
#*  Translation text for class MemberAccountTransaction
#****************************************************************************
$trans["memberAccountTransError1"]  = "\$text = 'É necessário um valor.';";
$trans["memberAccountTransError2"]  = "\$text = 'O valor deve ser numérico.';";
$trans["memberAccountTransError3"]  = "\$text = '
Descrição necessária.';";

#****************************************************************************
#*  Translation text for class MemberAccountQuery
#****************************************************************************
$trans["memberAccountQueryErr1"]    = "\$text = 'Erro ao acessar informações da conta do membro.';";
$trans["memberAccountQueryErr2"]    = "\$text = 'Erro ao inserir informações da conta do membro.';";
$trans["memberAccountQueryErr3"]    = "\$text = 'Erro ao excluir informações da conta do membro.';";

?>
