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
$trans["circCancel"]              = "\$text = 'Cancelar';";
$trans["circDelete"]              = "\$text = 'Deletar';";
$trans["circLogout"]              = "\$text = 'Sair do Sistema';";
$trans["Logout"]              = "\$text = 'Sair do Sistema';";
$trans["circAdd"]                 = "\$text = 'Adicionar';";
$trans["mbrDupBarcode"]           = "\$text = 'Este n�mero de c�digo de barra, %barcode%, ja est� em uso.';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHeading"]            = "\$text='Circula��o';";
$trans["indexCardHdr"]            = "\$text='Procurar membro por n�mero de cart�o:';";
$trans["indexCard"]               = "\$text='N�mero do cart�o:';";
$trans["indexSearch"]             = "\$text='Pesquisa';";
$trans["indexNameHdr"]            = "\$text='Procurar membro por sobrenome:';";
$trans["indexName"]               = "\$text='�ltimo nome come�a com:';";

#****************************************************************************
#*  Translation text for page mbr_new_form.php, mbr_edit_form.php and mbr_fields.php
#****************************************************************************
$trans["Mailing Address:"] = "\$text='Endere�o para correspond�ncia:';";
$trans["mbrNewForm"]              = "\$text='Adicionar Novo';";
$trans["mbrEditForm"]             = "\$text='Editar';";
$trans["mbrFldsHeader"]           = "\$text='Usu�rio:';";
$trans["mbrFldsCardNmbr"]         = "\$text='Numero do Cart�o:';";
$trans["mbrFldsLastName"]         = "\$text='Sobrenome:';";
$trans["mbrFldsFirstName"]        = "\$text='Nome:';";
$trans["mbrFldsAddr1"]            = "\$text='Endere�o residencial 1:';";
$trans["mbrFldsAddr2"]            = "\$text='Endere�o comercial:';";
$trans["mbrFldsCity"]             = "\$text='Cidade:';";
$trans["mbrFldsStateZip"]         = "\$text='Estado, Cep:';";
$trans["mbrFldsHomePhone"]        = "\$text='Telefone residencia:';";
$trans["mbrFldsWorkPhone"]        = "\$text='Celular:';";
$trans["mbrFldsEmail"]            = "\$text='Email:';";
$trans["mbrFldsClassify"]         = "\$text='Classifica��o:';";
$trans["mbrFldsGrade"]            = "\$text='S�rie Escolar:';";
$trans["mbrFldsTeacher"]          = "\$text='Professor da Escola:';";
$trans["mbrFldsSubmit"]           = "\$text='Enviar';";
$trans["mbrFldsCancel"]           = "\$text='Cancelar';";
$trans["mbrsearchResult"]         = "\$text='Resultado Pesquisa: ';";
$trans["mbrsearchprev"]           = "\$text='Anterior';";
$trans["mbrsearchnext"]           = "\$text='Pr�ximo';";
$trans["mbrsearchNoResults"]      = "\$text='Nenhum resultado encontrado.';";
$trans["mbrsearchFoundResults"]   = "\$text=' Resultados encontrados.';";
$trans["mbrsearchSearchResults"]  = "\$text='Procurar Resultados:';";
$trans["mbrsearchCardNumber"]     = "\$text='Numero do cart�o:';";
$trans["mbrsearchClassification"] = "\$text='Classifica��o:';";

#****************************************************************************
#*  Translation text for page mbr_new.php
#****************************************************************************
$trans["mbrNewSuccess"]           = "\$text='O Usu�rio foi adicionado com �xito.';";

#****************************************************************************
#*  Translation text for page mbr_edit.php
#****************************************************************************
$trans["mbrEditSuccess"]          = "\$text='Usu�rio foi atualizado com sucesso.';";

#****************************************************************************
#*  Translation text for page mbr_view.php
#****************************************************************************
$trans["mbrViewHead1"]            = "\$text='Informa��es do Membro:';";
$trans["mbrViewName"]             = "\$text='Nome:';";
$trans["mbrViewAddr"]             = "\$text='Endere�o:';";
$trans["mbrViewCardNmbr"]         = "\$text='N�mero do Cart�o:';";
$trans["mbrViewClassify"]         = "\$text='Classifica��o:';";
$trans["mbrViewPhone"]            = "\$text='Telefone:';";
$trans["mbrViewPhoneHome"]        = "\$text='H:';";
$trans["mbrViewPhoneWork"]        = "\$text='M:';";
$trans["mbrViewEmail"]            = "\$text='E-mail:';";
$trans["mbrViewGrade"]            = "\$text='S�rie Escolar:';";
$trans["mbrViewTeacher"]          = "\$text='Professor:';";
$trans["mbrViewHead2"]            = "\$text='Estat�sticas de Empr�stimo:';";
$trans["mbrViewStatColHdr1"]      = "\$text='Material';";
$trans["mbrViewStatColHdr2"]      = "\$text='Contagem';";
$trans["mbrViewStatColHdr3"]      = "\$text='Limites';";
$trans["mbrViewStatColHdr4"]      = "\$text='Conferir';";
$trans["mbrViewStatColHdr5"]      = "\$text='Renova��o';";
$trans["mbrViewHead3"]            = "\$text='Conferir Bibliografia:';";
$trans["mbrViewBarcode"]          = "\$text='N�mero C�digo de barras:';";
$trans["mbrViewCheckOut"]         = "\$text='Contagem';";
$trans["mbrViewHead4"]            = "\$text='Bibliografias atualmente exclu�das:';";
$trans["mbrViewOutHdr1"]          = "\$text='Verificado';";
$trans["mbrViewOutHdr2"]          = "\$text='Material';";
$trans["mbrViewOutHdr3"]          = "\$text='C�digo de Barras';";
$trans["mbrViewOutHdr4"]          = "\$text='T�tulo';";
$trans["mbrViewOutHdr5"]          = "\$text='Autor';";
$trans["mbrViewOutHdr6"]          = "\$text='Devolvido';";
$trans["mbrViewOutHdr7"]          = "\$text='Dias atrasados';";
$trans["mbrViewOutHdr8"]          = "\$text='Renova��o';";
$trans["mbrViewOutHdr9"]          = "\$text='Dia(s)';";
$trans["mbrViewNoCheckouts"]      = "\$text='Nenhuma bibliografia est� atualmente em verifica��o.';";
$trans["mbrViewHead5"]            = "\$text='Adicionar:';";
$trans["mbrViewHead6"]            = "\$text='Bibliografias em espera:';";
$trans["mbrViewPlaceHold"]        = "\$text='Adicionar;";
$trans["mbrViewHoldHdr1"]         = "\$text='Fun��o';";
$trans["mbrViewHoldHdr2"]         = "\$text='Colocado em espera';";
$trans["mbrViewHoldHdr3"]         = "\$text='Material';";
$trans["mbrViewHoldHdr4"]         = "\$text='C�digo de Barras';";
$trans["mbrViewHoldHdr5"]         = "\$text='T�tulo';";
$trans["mbrViewHoldHdr6"]         = "\$text='Autor';";
$trans["mbrViewHoldHdr7"]         = "\$text='Status';";
$trans["mbrViewHoldHdr8"]         = "\$text='Devolvido;";
$trans["mbrViewNoHolds"]          = "\$text='Nenhuma bibliografia est� atualmente em espera.';";
$trans["mbrViewBalMsg"]           = "\$text='Note: Usu�rio saldo %bal%.';";
$trans["mbrPrintCheckouts"]	  = "\$text='Imprimir comprovante;";
$trans["mbrViewDel"]              = "\$text='deletar';";

#****************************************************************************
#*  Translation text for page checkout.php
#****************************************************************************
$trans["checkoutBalErr"]          = "\$text='Usu�rio deve pagar o saldo da conta pendentes antes de devolver.';";
$trans["checkoutErr1"]            = "\$text='N�mero do c�digo de barras deve ser todos os caracteres alfanum�ricos.';";
$trans["checkoutErr2"]            = "\$text='Nenhuma bibliografia foi encontrado com o n�mero do c�digo de barras.';";
$trans["checkoutErr3"]            = "\$text=Bibliografia com n�mero do c�digo de barras %barcode% J� foi verificado.';";
$trans["checkoutErr4"]            = "\$text='Bibliografia com n�mero do c�digo %barcode% N�o est� dispon�vel.';";
$trans["checkoutErr5"]            = "\$text='Bibliografia com n�mero do c�digo de barras %barcode% Est� atualmente em espera para outro usu�rio.';";
$trans["checkoutErr6"]            = "\$text='Usu�rio atingiu o limite de check-out para o tipo de material da bibliografia especificada.';";
$trans["checkoutErr7"]            = "\$text='Bibliografia com n�mero de c�digo de barras %barcode% Atingiu o limite de renova��o.';";
$trans["checkoutErr8"]            = "\$text='Bibliografia com n�mero de c�digo de barras %barcode% n�o pode ser renovado.';";

#****************************************************************************
#*  Translation text for page shelving_cart.php
#****************************************************************************
$trans["shelvingCartErr1"]        = "\$text='N�mero do c�digo de barras deve ser todos os caracteres alfanum�ricos.';";
$trans["shelvingCartErr2"]        = "\$text='Nenhuma bibliografia foi encontrado com o n�mero do c�digo de barras.';";
$trans["shelvingCartTrans"]       = "\$text='Taxa de atraso(barcode=%barcode%)';";

#****************************************************************************
#*  Translation text for page checkin_form.php
#****************************************************************************
$trans["checkinFormHdr1"]         = "\$text='Bibliografia:';";
$trans["checkinFormBarcode"]      = "\$text='Numero C�digo de Barras:';";
$trans["checkinFormShelveButton"] = "\$text='Adicionar Carrinho de Devolu��o � Estante';";
$trans["checkinFormCheckinLink1"] = "\$text='Devolver itens selecionados';";
$trans["checkinFormCheckinLink2"] = "\$text='Devolver todos os itens';";
$trans["checkinFormHdr2"]         = "\$text='Lista atual de carrinho de prateleira:';";
$trans["checkinFormColHdr1"]      = "\$text='Data de inclus�o';";
$trans["checkinFormColHdr2"]      = "\$text='C�digo de Barras';";
$trans["checkinFormColHdr3"]      = "\$text='T�tulo';";
$trans["checkinFormColHdr4"]      = "\$text='Autor';";
$trans["checkinFormEmptyCart"]    = "\$text='Nenhuma bibliografia est� atualmente no carrinho de estantes.';";

#****************************************************************************
#*  Translation text for page checkin.php
#****************************************************************************
$trans["checkinErr1"]             = "\$text='Nenhum item foi selecionado.';";

#****************************************************************************
#*  Translation text for page hold_message.php
#****************************************************************************
$trans["holdMessageHdr"]          = "\$text='Bibliografia foi colocada em espera!';";
$trans["holdMessageMsg1"]         = "\$text='A bibliografia com n�mero de c�digo de barras %barcode% Voc� est� tentando fazer check-in tem um ou mais pedidos de espera colocados nele.  <b>Por favor arquive esta bibliografia em vez de coloc�-lo em seu carrinho de prateleiras.</b>  O c�digo de status para esta bibliografia foi ajustado para.';";
$trans["holdMessageMsg2"]         = "\$text='Voltar a devolver na bibliografia.';";

#****************************************************************************
#*  Translation text for page place_hold.php
#****************************************************************************
$trans["placeHoldErr1"]           = "\$text='C�digo de barras deve ser num�rico.';";
$trans["placeHoldErr2"]           = "\$text='C�digo de barras n�o existe.';";
$trans["placeHoldErr3"]           = "\$text='Este usu�rio j� tenha esse item verificado -- N�o colocar na espera.';";

#****************************************************************************
#*  Translation text for page mbr_del_confirm.php
#****************************************************************************
$trans["mbrDelConfirmWarn"]       = "\$text = 'Usu�rio, %name%, tem %checkoutCount% empr�stimos(s) e %holdCount% solicita��o(��es) de espera.  Todos os materiais devem ser verificados e todas as solicita��es de espera exclu�das antes de excluir este usu�rio.';";
$trans["mbrDelConfirmReturn"]     = "\$text = 'Retornar � informa��o do usu�rtio;";
$trans["mbrDelConfirmMsg"]        = "\$text = 'Tem certeza de que deseja excluir este usu�rio, %name%?  Isso tamb�m excluir� todo o hist�rico de compra deste usu�rio.';";

#****************************************************************************
#*  Translation text for page mbr_del.php
#****************************************************************************
$trans["mbrDelSuccess"]           = "\$text='Usu�rio, %name%, foi deletado.';";
$trans["mbrDelReturn"]            = "\$text='Retornar � pesquisa de usu�rio';";

#****************************************************************************
#*  Translation text for page mbr_history.php
#****************************************************************************
$trans["mbrHistoryHead1"]         = "\$text='Hist�rico de Empr�stimos do Usu�rio:';";
$trans["mbrHistoryNoHist"]        = "\$text='Nenhum hist�rico foi encontrado.';";
$trans["mbrHistoryHdr1"]          = "\$text='C�digo de barras';";
$trans["mbrHistoryHdr2"]          = "\$text='T�tulo';";
$trans["mbrHistoryHdr3"]          = "\$text='Autor';";
$trans["mbrHistoryHdr4"]          = "\$text='Novo Status';";
$trans["mbrHistoryHdr5"]          = "\$text='Data da Mudan�a de Status';";
$trans["mbrHistoryHdr6"]          = "\$text='Data de devolu��o';";

#****************************************************************************
#*  Translation text for page mbr_account.php
#****************************************************************************
$trans["mbrAccountLabel"]         = "\$text='Adicionar uma transa��o:';";
$trans["mbrAccountTransTyp"]      = "\$text='Tipo de transa��o:';";
$trans["mbrAccountAmount"]        = "\$text='Valor total:';";
$trans["mbrAccountDesc"]          = "\$text='Descri��o:';";
$trans["mbrAccountHead1"]         = "\$text='Transa��es de conta de usu�rio:';";
$trans["mbrAccountNoTrans"]       = "\$text='Nenhuma transa��o encontrada.';";
$trans["mbrAccountOpenBal"]       = "\$text='Saldo inicial';";
$trans["mbrAccountDel"]           = "\$text='deletar';";
$trans["mbrAccountHdr1"]          = "\$text='Fun��o';";
$trans["mbrAccountHdr2"]          = "\$text='Data';";
$trans["mbrAccountHdr3"]          = "\$text='Tipo Transa��o';";
$trans["mbrAccountHdr4"]          = "\$text='Descri��o';";
$trans["mbrAccountHdr5"]          = "\$text='Quantia';";
$trans["mbrAccountHdr6"]          = "\$text='Saldo';";

#****************************************************************************
#*  Translation text for page mbr_transaction.php
#****************************************************************************
$trans["mbrTransactionSuccess"]   = "\$text='Transa��o realizado com sucesso.';";

#****************************************************************************
#*  Translation text for page mbr_transaction_del_confirm.php
#****************************************************************************
$trans["mbrTransDelConfirmMsg"]   = "\$text='Tem certeza de que deseja excluir esta transa��o?';";

#****************************************************************************
#*  Translation text for page mbr_transaction_del.php
#****************************************************************************
$trans["mbrTransactionDelSuccess"] = "\$text='Transa��o realizada com sucesso.';";

#****************************************************************************
#*  Translation text for page mbr_print_checkouts.php
#****************************************************************************
$trans["mbrPrintCheckoutsTitle"]  = "\$text='Verifica��es para %mbrName%';";
$trans["mbrPrintCheckoutsHdr1"]   = "\$text='Data atual:';";
$trans["mbrPrintCheckoutsHdr2"]   = "\$text='Usu�rio:';";
$trans["mbrPrintCheckoutsHdr3"]   = "\$text='N�mero do cart�o:';";
$trans["mbrPrintCheckoutsHdr4"]   = "\$text='Classifica��o:';";
$trans["mbrPrintCloseWindow"]     = "\$text='Fechar janela';";


#****************************************************************************
#*  Translation text for page offline.php
#****************************************************************************
$trans["Upload Offline Circulation"]  = "\$text='Enviar Circula��o Manual';";
$trans["Date:"]   = "\$text='Data:';";
$trans["Command File:"]   = "\$text='Arquivo de Controle:';";
$trans["Upload"]   = "\$text='Enviar Arquivo';";
$trans["Command Sheet"]   = "\$text='Planilha Modelo';";
?>
