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
$trans["mbrDupBarcode"]           = "\$text = 'Este número de código de barra, %barcode%, ja está em uso.';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHeading"]            = "\$text='Circulação';";
$trans["indexCardHdr"]            = "\$text='Procurar membro por número de cartão:';";
$trans["indexCard"]               = "\$text='Número do cartão:';";
$trans["indexSearch"]             = "\$text='Pesquisa';";
$trans["indexNameHdr"]            = "\$text='Procurar membro por sobrenome:';";
$trans["indexName"]               = "\$text='Último nome começa com:';";

#****************************************************************************
#*  Translation text for page mbr_new_form.php, mbr_edit_form.php and mbr_fields.php
#****************************************************************************
$trans["Mailing Address:"] = "\$text='Endereço para correspondência:';";
$trans["mbrNewForm"]              = "\$text='Adicionar Novo';";
$trans["mbrEditForm"]             = "\$text='Editar';";
$trans["mbrFldsHeader"]           = "\$text='Usuário:';";
$trans["mbrFldsCardNmbr"]         = "\$text='Numero do Cartão:';";
$trans["mbrFldsLastName"]         = "\$text='Sobrenome:';";
$trans["mbrFldsFirstName"]        = "\$text='Nome:';";
$trans["mbrFldsAddr1"]            = "\$text='Endereço residencial 1:';";
$trans["mbrFldsAddr2"]            = "\$text='Endereço comercial:';";
$trans["mbrFldsCity"]             = "\$text='Cidade:';";
$trans["mbrFldsStateZip"]         = "\$text='Estado, Cep:';";
$trans["mbrFldsHomePhone"]        = "\$text='Telefone residencia:';";
$trans["mbrFldsWorkPhone"]        = "\$text='Celular:';";
$trans["mbrFldsEmail"]            = "\$text='Email:';";
$trans["mbrFldsClassify"]         = "\$text='Classificação:';";
$trans["mbrFldsGrade"]            = "\$text='Série Escolar:';";
$trans["mbrFldsTeacher"]          = "\$text='Professor da Escola:';";
$trans["mbrFldsSubmit"]           = "\$text='Enviar';";
$trans["mbrFldsCancel"]           = "\$text='Cancelar';";
$trans["mbrsearchResult"]         = "\$text='Resultado Pesquisa: ';";
$trans["mbrsearchprev"]           = "\$text='Anterior';";
$trans["mbrsearchnext"]           = "\$text='Próximo';";
$trans["mbrsearchNoResults"]      = "\$text='Nenhum resultado encontrado.';";
$trans["mbrsearchFoundResults"]   = "\$text=' Resultados encontrados.';";
$trans["mbrsearchSearchResults"]  = "\$text='Procurar Resultados:';";
$trans["mbrsearchCardNumber"]     = "\$text='Numero do cartão:';";
$trans["mbrsearchClassification"] = "\$text='Classificação:';";

#****************************************************************************
#*  Translation text for page mbr_new.php
#****************************************************************************
$trans["mbrNewSuccess"]           = "\$text='O Usuário foi adicionado com êxito.';";

#****************************************************************************
#*  Translation text for page mbr_edit.php
#****************************************************************************
$trans["mbrEditSuccess"]          = "\$text='Usuário foi atualizado com sucesso.';";

#****************************************************************************
#*  Translation text for page mbr_view.php
#****************************************************************************
$trans["mbrViewHead1"]            = "\$text='Informações do Membro:';";
$trans["mbrViewName"]             = "\$text='Nome:';";
$trans["mbrViewAddr"]             = "\$text='Endereço:';";
$trans["mbrViewCardNmbr"]         = "\$text='Número do Cartão:';";
$trans["mbrViewClassify"]         = "\$text='Classificação:';";
$trans["mbrViewPhone"]            = "\$text='Telefone:';";
$trans["mbrViewPhoneHome"]        = "\$text='H:';";
$trans["mbrViewPhoneWork"]        = "\$text='M:';";
$trans["mbrViewEmail"]            = "\$text='E-mail:';";
$trans["mbrViewGrade"]            = "\$text='Série Escolar:';";
$trans["mbrViewTeacher"]          = "\$text='Professor:';";
$trans["mbrViewHead2"]            = "\$text='Estatísticas de Empréstimo:';";
$trans["mbrViewStatColHdr1"]      = "\$text='Material';";
$trans["mbrViewStatColHdr2"]      = "\$text='Contagem';";
$trans["mbrViewStatColHdr3"]      = "\$text='Limites';";
$trans["mbrViewStatColHdr4"]      = "\$text='Conferir';";
$trans["mbrViewStatColHdr5"]      = "\$text='Renovação';";
$trans["mbrViewHead3"]            = "\$text='Conferir Bibliografia:';";
$trans["mbrViewBarcode"]          = "\$text='Número Código de barras:';";
$trans["mbrViewCheckOut"]         = "\$text='Contagem';";
$trans["mbrViewHead4"]            = "\$text='Bibliografias atualmente excluídas:';";
$trans["mbrViewOutHdr1"]          = "\$text='Verificado';";
$trans["mbrViewOutHdr2"]          = "\$text='Material';";
$trans["mbrViewOutHdr3"]          = "\$text='Código de Barras';";
$trans["mbrViewOutHdr4"]          = "\$text='Título';";
$trans["mbrViewOutHdr5"]          = "\$text='Autor';";
$trans["mbrViewOutHdr6"]          = "\$text='Devolvido';";
$trans["mbrViewOutHdr7"]          = "\$text='Dias atrasados';";
$trans["mbrViewOutHdr8"]          = "\$text='Renovação';";
$trans["mbrViewOutHdr9"]          = "\$text='Dia(s)';";
$trans["mbrViewNoCheckouts"]      = "\$text='Nenhuma bibliografia está atualmente em verificação.';";
$trans["mbrViewHead5"]            = "\$text='Adicionar:';";
$trans["mbrViewHead6"]            = "\$text='Bibliografias em espera:';";
$trans["mbrViewPlaceHold"]        = "\$text='Adicionar;";
$trans["mbrViewHoldHdr1"]         = "\$text='Função';";
$trans["mbrViewHoldHdr2"]         = "\$text='Colocado em espera';";
$trans["mbrViewHoldHdr3"]         = "\$text='Material';";
$trans["mbrViewHoldHdr4"]         = "\$text='Código de Barras';";
$trans["mbrViewHoldHdr5"]         = "\$text='Título';";
$trans["mbrViewHoldHdr6"]         = "\$text='Autor';";
$trans["mbrViewHoldHdr7"]         = "\$text='Status';";
$trans["mbrViewHoldHdr8"]         = "\$text='Devolvido;";
$trans["mbrViewNoHolds"]          = "\$text='Nenhuma bibliografia está atualmente em espera.';";
$trans["mbrViewBalMsg"]           = "\$text='Note: Usuário saldo %bal%.';";
$trans["mbrPrintCheckouts"]	  = "\$text='Imprimir comprovante;";
$trans["mbrViewDel"]              = "\$text='deletar';";

#****************************************************************************
#*  Translation text for page checkout.php
#****************************************************************************
$trans["checkoutBalErr"]          = "\$text='Usuário deve pagar o saldo da conta pendentes antes de devolver.';";
$trans["checkoutErr1"]            = "\$text='Número do código de barras deve ser todos os caracteres alfanuméricos.';";
$trans["checkoutErr2"]            = "\$text='Nenhuma bibliografia foi encontrado com o número do código de barras.';";
$trans["checkoutErr3"]            = "\$text=Bibliografia com número do código de barras %barcode% Já foi verificado.';";
$trans["checkoutErr4"]            = "\$text='Bibliografia com número do código %barcode% Não está disponível.';";
$trans["checkoutErr5"]            = "\$text='Bibliografia com número do código de barras %barcode% Está atualmente em espera para outro usuário.';";
$trans["checkoutErr6"]            = "\$text='Usuário atingiu o limite de check-out para o tipo de material da bibliografia especificada.';";
$trans["checkoutErr7"]            = "\$text='Bibliografia com número de código de barras %barcode% Atingiu o limite de renovação.';";
$trans["checkoutErr8"]            = "\$text='Bibliografia com número de código de barras %barcode% não pode ser renovado.';";

#****************************************************************************
#*  Translation text for page shelving_cart.php
#****************************************************************************
$trans["shelvingCartErr1"]        = "\$text='Número do código de barras deve ser todos os caracteres alfanuméricos.';";
$trans["shelvingCartErr2"]        = "\$text='Nenhuma bibliografia foi encontrado com o número do código de barras.';";
$trans["shelvingCartTrans"]       = "\$text='Taxa de atraso(barcode=%barcode%)';";

#****************************************************************************
#*  Translation text for page checkin_form.php
#****************************************************************************
$trans["checkinFormHdr1"]         = "\$text='Bibliografia:';";
$trans["checkinFormBarcode"]      = "\$text='Numero Código de Barras:';";
$trans["checkinFormShelveButton"] = "\$text='Adicionar Carrinho de Devolução à Estante';";
$trans["checkinFormCheckinLink1"] = "\$text='Devolver itens selecionados';";
$trans["checkinFormCheckinLink2"] = "\$text='Devolver todos os itens';";
$trans["checkinFormHdr2"]         = "\$text='Lista atual de carrinho de prateleira:';";
$trans["checkinFormColHdr1"]      = "\$text='Data de inclusão';";
$trans["checkinFormColHdr2"]      = "\$text='Código de Barras';";
$trans["checkinFormColHdr3"]      = "\$text='Título';";
$trans["checkinFormColHdr4"]      = "\$text='Autor';";
$trans["checkinFormEmptyCart"]    = "\$text='Nenhuma bibliografia está atualmente no carrinho de estantes.';";

#****************************************************************************
#*  Translation text for page checkin.php
#****************************************************************************
$trans["checkinErr1"]             = "\$text='Nenhum item foi selecionado.';";

#****************************************************************************
#*  Translation text for page hold_message.php
#****************************************************************************
$trans["holdMessageHdr"]          = "\$text='Bibliografia foi colocada em espera!';";
$trans["holdMessageMsg1"]         = "\$text='A bibliografia com número de código de barras %barcode% Você está tentando fazer check-in tem um ou mais pedidos de espera colocados nele.  <b>Por favor arquive esta bibliografia em vez de colocá-lo em seu carrinho de prateleiras.</b>  O código de status para esta bibliografia foi ajustado para.';";
$trans["holdMessageMsg2"]         = "\$text='Voltar a devolver na bibliografia.';";

#****************************************************************************
#*  Translation text for page place_hold.php
#****************************************************************************
$trans["placeHoldErr1"]           = "\$text='Código de barras deve ser numérico.';";
$trans["placeHoldErr2"]           = "\$text='Código de barras não existe.';";
$trans["placeHoldErr3"]           = "\$text='Este usuário já tenha esse item verificado -- Não colocar na espera.';";

#****************************************************************************
#*  Translation text for page mbr_del_confirm.php
#****************************************************************************
$trans["mbrDelConfirmWarn"]       = "\$text = 'Usuário, %name%, tem %checkoutCount% empréstimos(s) e %holdCount% solicitação(ções) de espera.  Todos os materiais devem ser verificados e todas as solicitações de espera excluídas antes de excluir este usuário.';";
$trans["mbrDelConfirmReturn"]     = "\$text = 'Retornar à informação do usuártio;";
$trans["mbrDelConfirmMsg"]        = "\$text = 'Tem certeza de que deseja excluir este usuário, %name%?  Isso também excluirá todo o histórico de compra deste usuário.';";

#****************************************************************************
#*  Translation text for page mbr_del.php
#****************************************************************************
$trans["mbrDelSuccess"]           = "\$text='Usuário, %name%, foi deletado.';";
$trans["mbrDelReturn"]            = "\$text='Retornar à pesquisa de usuário';";

#****************************************************************************
#*  Translation text for page mbr_history.php
#****************************************************************************
$trans["mbrHistoryHead1"]         = "\$text='Histórico de Empréstimos do Usuário:';";
$trans["mbrHistoryNoHist"]        = "\$text='Nenhum histórico foi encontrado.';";
$trans["mbrHistoryHdr1"]          = "\$text='Código de barras';";
$trans["mbrHistoryHdr2"]          = "\$text='Título';";
$trans["mbrHistoryHdr3"]          = "\$text='Autor';";
$trans["mbrHistoryHdr4"]          = "\$text='Novo Status';";
$trans["mbrHistoryHdr5"]          = "\$text='Data da Mudança de Status';";
$trans["mbrHistoryHdr6"]          = "\$text='Data de devolução';";

#****************************************************************************
#*  Translation text for page mbr_account.php
#****************************************************************************
$trans["mbrAccountLabel"]         = "\$text='Adicionar uma transação:';";
$trans["mbrAccountTransTyp"]      = "\$text='Tipo de transação:';";
$trans["mbrAccountAmount"]        = "\$text='Valor total:';";
$trans["mbrAccountDesc"]          = "\$text='Descrição:';";
$trans["mbrAccountHead1"]         = "\$text='Transações de conta de usuário:';";
$trans["mbrAccountNoTrans"]       = "\$text='Nenhuma transação encontrada.';";
$trans["mbrAccountOpenBal"]       = "\$text='Saldo inicial';";
$trans["mbrAccountDel"]           = "\$text='deletar';";
$trans["mbrAccountHdr1"]          = "\$text='Função';";
$trans["mbrAccountHdr2"]          = "\$text='Data';";
$trans["mbrAccountHdr3"]          = "\$text='Tipo Transação';";
$trans["mbrAccountHdr4"]          = "\$text='Descrição';";
$trans["mbrAccountHdr5"]          = "\$text='Quantia';";
$trans["mbrAccountHdr6"]          = "\$text='Saldo';";

#****************************************************************************
#*  Translation text for page mbr_transaction.php
#****************************************************************************
$trans["mbrTransactionSuccess"]   = "\$text='Transação realizado com sucesso.';";

#****************************************************************************
#*  Translation text for page mbr_transaction_del_confirm.php
#****************************************************************************
$trans["mbrTransDelConfirmMsg"]   = "\$text='Tem certeza de que deseja excluir esta transação?';";

#****************************************************************************
#*  Translation text for page mbr_transaction_del.php
#****************************************************************************
$trans["mbrTransactionDelSuccess"] = "\$text='Transação realizada com sucesso.';";

#****************************************************************************
#*  Translation text for page mbr_print_checkouts.php
#****************************************************************************
$trans["mbrPrintCheckoutsTitle"]  = "\$text='Verificações para %mbrName%';";
$trans["mbrPrintCheckoutsHdr1"]   = "\$text='Data atual:';";
$trans["mbrPrintCheckoutsHdr2"]   = "\$text='Usuário:';";
$trans["mbrPrintCheckoutsHdr3"]   = "\$text='Número do cartão:';";
$trans["mbrPrintCheckoutsHdr4"]   = "\$text='Classificação:';";
$trans["mbrPrintCloseWindow"]     = "\$text='Fechar janela';";


#****************************************************************************
#*  Translation text for page offline.php
#****************************************************************************
$trans["Upload Offline Circulation"]  = "\$text='Enviar Circulação Manual';";
$trans["Date:"]   = "\$text='Data:';";
$trans["Command File:"]   = "\$text='Arquivo de Controle:';";
$trans["Upload"]   = "\$text='Enviar Arquivo';";
$trans["Command Sheet"]   = "\$text='Planilha Modelo';";
?>
