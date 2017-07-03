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
$trans["catalogSubmit"]            = "\$text = 'Submeter';";
$trans["catalogCancel"]            = "\$text = 'Cancela';";
$trans["catalogRefresh"]           = "\$text = 'Atualizar';";
$trans["catalogDelete"]            = "\$text = 'Deletar';";
$trans["catalogFootnote"]          = "\$text = 'Os campos marcados com %symbol% s�o obrigat�rios.';";
$trans["AnswerYes"]                = "\$text = 'Sim';";
$trans["AnswerNo"]                 = "\$text = 'N�o';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = 'Cataloga��o';";
$trans["indexBarcodeHdr"]          = "\$text = 'Pesquisar bibliografia por C�digo de Barras';";
$trans["indexBarcodeField"]        = "\$text = 'N�mero de C�digo de Barras';";
$trans["indexSearchHdr"]           = "\$text = 'Pesquisar Bibliografia por Frase';";
$trans["indexKeyword"]             = "\$text = 'Palavra-Chave';";
$trans["indexTitle"]               = "\$text = 'T�tulo';";
$trans["indexAuthor"]              = "\$text = 'Autor';";
$trans["indexSubject"]             = "\$text = 'Assunto';";
$trans["indexButton"]              = "\$text = 'Pesquisar';";

#****************************************************************************
#*  Translation text for page biblio_fields.php
#****************************************************************************
$trans["biblioFieldsLabel"]        = "\$text = 'Bibliografia';";
$trans["biblioFieldsMaterialTyp"]  = "\$text = 'Tipo de Material';";
$trans["biblioFieldsCollection"]   = "\$text = 'G�nero do Acervo';";
$trans["biblioFieldsCallNmbr"]     = "\$text = 'C�digo de Chamada';";
$trans["biblioFieldsUsmarcFields"] = "\$text = 'Campos USMARC';";
$trans["biblioFieldsOpacFlg"]      = "\$text = 'Mostrar em Cat�logo P�blico (Pesquisa OPAC)';";

#****************************************************************************
#*  Translation text for page biblio_new.php
#****************************************************************************
$trans["biblioNewFormLabel"]       = "\$text = 'Adicionar novo';";
$trans["biblioNewSuccess"]         = "\$text = A nova nova bibliografia foi criada.  Para adicionar uma c�pia, selecione  \"Nova c�pia\" Navega��o � esquerda ou \"Adicione nova c�pia\" A partir das informa��es de c�pia abaixo.';";

#****************************************************************************
#*  Translation text for page biblio_edit.php
#****************************************************************************
$trans["biblioEditSuccess"]        = "\$text = 'Bibliografia atualizada com sucesso.';";

#****************************************************************************
#*  Translation text for page biblio_copy_new_form.php and biblio_copy_edit_form.php
#****************************************************************************
$trans["biblioCopyNewFormLabel"]   = "\$text = 'Adicionar nova c�pia';";
$trans["biblioCopyNewBarcode"]     = "\$text = 'N�mero C�digo de Barra';";
$trans["biblioCopyNewDesc"]        = "\$text = 'Descri��o';";
$trans["biblioCopyNewAuto"]        = "\$text = 'Gerar autom�ticamente';";
$trans["biblioCopyNewValidBarco"]  = "\$text = 'Validar para imprimir';";
$trans["biblioCopyEditFormLabel"]  = "\$text = 'Editar c�pia';";
$trans["biblioCopyEditFormStatus"] = "\$text = 'Status';";

#****************************************************************************
#*  Translation text for page biblio_copy_new.php
#****************************************************************************
$trans["biblioCopyNewSuccess"]     = "\$text = 'Copiar criada com sucesso.';";

#****************************************************************************
#*  Translation text for page biblio_copy_edit.php
#****************************************************************************
$trans["biblioCopyEditSuccess"]    = "\$text = 'Copia atualizada
 com sucesso.';";

#****************************************************************************
#*  Translation text for page biblio_copy_del_confirm.php
#****************************************************************************
$trans["biblioCopyDelConfirmErr1"] = "\$text = '
N�o foi poss�vel excluir a c�pia. Uma c�pia deve ser verificada antes de ser exclu�da.';";
$trans["biblioCopyDelConfirmMsg"]  = "\$text = 'Tem certeza de que deseja excluir a c�pia com c�digo de barras %barcodeNmbr%?  
Isso tamb�m excluir� todo o hist�rico de altera��es de status para esta c�pia.';";

#****************************************************************************
#*  Translation text for page biblio_copy_del.php
#****************************************************************************
$trans["biblioCopyDelSuccess"]     = "\$text = 'Copiar com c�digo de barras %barcode% Foi exclu�do com �xito.';";

#****************************************************************************
#*  Translation text for page biblio_marc_list.php
#****************************************************************************
$trans["biblioMarcListMarcSelect"] = "\$text = 'Adicionar novo campo MARC';";
$trans["biblioMarcListHdr"]        = "\$text = 'Informa��o do Campo MARC';";
$trans["biblioMarcListTbleCol1"]   = "\$text = 'Fun��o';";
$trans["biblioMarcListTbleCol2"]   = "\$text = 'Tag';";
$trans["biblioMarcListTbleCol3"]   = "\$text = 'Tag Description';";
$trans["biblioMarcListTbleCol4"]   = "\$text = 'Ind 1';";
$trans["biblioMarcListTbleCol5"]   = "\$text = 'Ind 2';";
$trans["biblioMarcListTbleCol6"]   = "\$text = 'Subcampo';";
$trans["biblioMarcListTbleCol7"]   = "\$text = 'Descri��o do Subcampo;";
$trans["biblioMarcListTbleCol8"]   = "\$text = 'Dados do Campo';";
$trans["biblioMarcListNoRows"]     = "\$text = 'Nenhum campo MARC encontrado.';";
$trans["biblioMarcListEdit"]       = "\$text = 'editar';";
$trans["biblioMarcListDel"]        = "\$text = 'deletar';";

#****************************************************************************
#*  Translation text for page usmarc_select.php
#****************************************************************************
$trans["usmarcSelectHdr"]          = "\$text = 'Seletor de Campo MARC';";
$trans["usmarcSelectInst"]         = "\$text = 'Selecione um tipo de campo';";
$trans["usmarcSelectNoTags"]       = "\$text = 'Nenhuma tags encontrada.';";
$trans["usmarcSelectUse"]          = "\$text = 'usar';";
$trans["usmarcCloseWindow"]        = "\$text = 'Fechar a janela';";

#****************************************************************************
#*  Translation text for page biblio_marc_new_form.php
#****************************************************************************
$trans["biblioMarcNewFormHdr"]     = "\$text = 'Adicionar Novo Campo MARC';";
$trans["biblioMarcNewFormTag"]     = "\$text = 'Tag';";
$trans["biblioMarcNewFormSubfld"]  = "\$text = 'Subcampo';";
$trans["biblioMarcNewFormData"]    = "\$text = 'Dados do Campo';";
$trans["biblioMarcNewFormInd1"]    = "\$text = 'Indicador 1';";
$trans["biblioMarcNewFormInd2"]    = "\$text = 'Indicador 2';";
$trans["biblioMarcNewFormSelect"]  = "\$text = 'Selecionar';";

#****************************************************************************
#*  Translation text for page biblio_marc_new.php
#****************************************************************************
$trans["biblioMarcNewSuccess"]     = "\$text = 'Campo MARC adicionado com sucesso.';";

#****************************************************************************
#*  Translation text for page biblio_marc_edit_form.php
#****************************************************************************
$trans["biblioMarcEditFormHdr"]    = "\$text = 'Editar Campo MARC';";

#****************************************************************************
#*  Translation text for page biblio_marc_edit.php
#****************************************************************************
$trans["biblioMarcEditSuccess"]    = "\$text = 'Campo MARC atualizado com sucesso.';";

#****************************************************************************
#*  Translation text for page biblio_marc_del_confirm.php
#****************************************************************************
$trans["biblioMarcDelConfirmMsg"]  = "\$text = 'Tem certeza de que deseja excluir o campo com a tag %tag% e subcampo %subfieldCd%?';";

#****************************************************************************
#*  Translation text for page biblio_marc_del.php
#****************************************************************************
$trans["biblioMarcDelSuccess"]     = "\$text = 'Campo MARC deletado com sucesso.';";

#****************************************************************************
#*  Translation text for page biblio_del_confirm.php
#****************************************************************************
$trans["biblioDelConfirmWarn"]     = "\$text = 'Esta bibliografia tem %copyCount% copias e %holdCount% Solicita��o de espera(s).  Por favor, exclua essas c�pias e / ou segure os pedidos antes de excluir esta bibliografia.';";
$trans["biblioDelConfirmReturn"]   = "\$text = 'Retornar � informa��o bibliogr�fica';";
$trans["biblioDelConfirmMsg"]      = "\$text = 'Tem certeza de que deseja excluir a bibliografia com o t�tulo%title%?';";

#****************************************************************************
#*  Translation text for page biblio_del_confirm.php
#****************************************************************************
$trans["biblioDelMsg"]             = "\$text = 'Bibliografia, %title%, foi deletado.';";
$trans["biblioDelReturn"]          = "\$text = 'Retornar � pesquisa bibliogr�fica';";

#****************************************************************************
#*  Translation text for page biblio_hold_list.php
#****************************************************************************
$trans["biblioHoldListHead"]       = "\$text = 'Solicita��es de espera de bibliografia:';";
$trans["biblioHoldListNoHolds"]    = "\$text = '
Nenhuma c�pia de bibliografia est� atualmente em espera.';";
$trans["biblioHoldListHdr1"]       = "\$text = 'Fun��o';";
$trans["biblioHoldListHdr2"]       = "\$text = 'C�pia';";
$trans["biblioHoldListHdr3"]       = "\$text = 'Colocado em espera';";
$trans["biblioHoldListHdr4"]       = "\$text = 'Usu�rio';";
$trans["biblioHoldListHdr5"]       = "\$text = 'Status';";
$trans["biblioHoldListHdr6"]       = "\$text = 'Devido';";
$trans["biblioHoldListdel"]        = "\$text = 'Deletar';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["NotAuth"]                 = "\$text = 'Voc� n�o est� autorizado a usar a guia Cataloga��o';";

#****************************************************************************
#*  Translation text for page upload_usmarc.php and upload_usmarc_form.php
#****************************************************************************
$trans["MarcUploadTest"]            = "\$text = 'Teste de carga';";
$trans["MarcUploadTestTrue"]        = "\$text = 'Verdadeiro';";
$trans["MarcUploadTestFalse"]       = "\$text = 'Falso';";
$trans["MarcUploadTestFileUpload"]  = "\$text = 'Inserir arquivo USMarc';";
$trans["MarcUploadRecordsUploaded"] = "\$text = 'Registros carregados';";
$trans["MarcUploadMarcRecord"]      = "\$text = 'Registro MARC';";
$trans["MarcUploadTag"]             = "\$text = 'Tag';";
$trans["MarcUploadSubfield"]        = "\$text = 'Sub';";
$trans["MarcUploadData"]            = "\$text = 'Dados';";
$trans["MarcUploadRawData"]         = "\$text = 'Dados Brutos:';";
$trans["UploadFile"]                = "\$text = 'Enviar Arquivo';";

#****************************************************************************
#*  Translation text for page usmarc_select.php
#****************************************************************************
$trans["PoweredByOB"]                 = "\$text = 'Powered by OpenBiblio Traduzido Por Cl�udio A. Gomes e Henrique Monteiro';";
$trans["Copyright"]                   = "\$text = 'Copyright &copy; 2002-2005';";
$trans["underthe"]                    = "\$text = 'under the';";
$trans["GNU"]                 = "\$text = 'GNU General Public License';";

$trans["catalogResults"]                 = "\$text = 'Buscar Resultados';";



?>
