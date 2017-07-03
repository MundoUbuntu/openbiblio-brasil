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
#*  Translation text used on multiple pages
#****************************************************************************
$trans["reportsCancel"]            = "\$text = 'Cancelar';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = 'Relatórios';";
$trans["indexDesc"]                = "\$text = 'Use a lista de relatórios ou rótulos localizada na área de navegação à esquerda para produzir relatórios ou etiquetas.';";

#****************************************************************************
#*  Translation text for page report_list.php
#****************************************************************************
$trans["reportListHdr"]            = "\$text = 'Lista de relatórios';";
$trans["reportListDesc"]           = "\$text = 'Escolha um dos seguintes links para executar um relatório.';";
$trans["reportListXmlErr"]         = "\$text = 'Ocorreu um erro ao analisar a definição do relatório xml.';";
$trans["reportListCannotRead"]     = "\$text = 'Não é possível ler o arquivo: %fileName%';";

#****************************************************************************
#*  Translation text for page label_list.php
#****************************************************************************
$trans["labelListHdr"]             = "\$text = 'Lista de etiquetas';";
$trans["labelListDesc"]            = "\$text = Escolha um dos seguintes links para produzir etiquetas em formato pdf.';";
$trans["displayLabelsXmlErr"]      = "\$text = 'Ocorreu um erro ao analisar a definição do relatório xml.  Error = ';";

#****************************************************************************
#*  Translation text for page letter_list.php
#****************************************************************************
$trans["letterListHdr"]            = "\$text = 'Lista de letras';";
$trans["letterListDesc"]           = "\$text = 'Escolha um dos seguintes links para produzir letras em formato pdf.';";
$trans["displayLettersXmlErr"]      = "\$text = 'Ocorreu um erro ao analisar a definição do relatório xml.  Error = ';";

#****************************************************************************
#*  Translation text for page report_criteria.php
#****************************************************************************
$trans["reportCriteriaHead1"]      = "\$text = 'Critérios de pesquisa de relatório(opcional)';";
$trans["reportCriteriaHead2"]      = "\$text = 'Ordem de classificação do relatório(opcional)';";
$trans["reportCriteriaHead3"]      = "\$text = 'Tipo de saída do relatório';";
$trans["reportCriteriaCrit1"]      = "\$text = 'Critério 1:';";
$trans["reportCriteriaCrit2"]      = "\$text = 'Critério 2:';";
$trans["reportCriteriaCrit3"]      = "\$text = 'Critério 3:';";
$trans["reportCriteriaCrit4"]      = "\$text = 'Critério 4:';";
$trans["reportCriteriaEQ"]         = "\$text = '=';";
$trans["reportCriteriaNE"]         = "\$text = 'não =';";
$trans["reportCriteriaLT"]         = "\$text = '&lt;';";
$trans["reportCriteriaGT"]         = "\$text = '&gt;';";
$trans["reportCriteriaLE"]         = "\$text = '&lt ou =';";
$trans["reportCriteriaGE"]         = "\$text = '&gt ou =';";
$trans["reportCriteriaBT"]         = "\$text = 'entre';";
$trans["reportCriteriaAnd"]        = "\$text = 'e';";
$trans["reportCriteriaRunReport"]  = "\$text = 'Executar relatório';";
$trans["reportCriteriaSortCrit1"]  = "\$text = 'Ordenar 1:';";
$trans["reportCriteriaSortCrit2"]  = "\$text = 'Ordenar 2:';";
$trans["reportCriteriaSortCrit3"]  = "\$text = 'Ordenas 3:';";
$trans["reportCriteriaAscending"]  = "\$text = 'Ascendente';";
$trans["reportCriteriaDescending"] = "\$text = 'descendente';";
$trans["reportCriteriaStartOnLabel"] = "\$text = 'Iniciar impressão de etiqueta:';";
$trans["reportCriteriaOutput"]     = "\$text = 'Tipo de saida:';";
$trans["reportCriteriaOutputHTML"] = "\$text = 'HTML';";
$trans["reportCriteriaOutputCSV"]  = "\$text = 'CSV';";

#****************************************************************************
#*  Translation text for page run_report.php
#****************************************************************************
$trans["runReportReturnLink1"]     = "\$text = 'Critérios de seleção de relatórios';";
$trans["runReportReturnLink2"]     = "\$text = 'Lista de relatórios';";
$trans["runReportTotal"]           = "\$text = 'Total de linhas:';";

#****************************************************************************
#*  Translation text for page display_labels.php
#****************************************************************************
$trans["displayLabelsStartOnLblErr"] = "\$text = 'O campo deve ser numérico.';";
$trans["displayLabelsXmlErr"]      = "\$text = 'Ocorreu um erro ao analisar a definição do relatório xml.  Erro = ';";
$trans["displayLabelsCannotRead"]  = "\$text = 'Não é possível ler o arquivo de etiqueta: %fileName%';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["noauthMsg"]                = "\$text = 'Você não está autorizado a usar a guia Relatórios.';";

#****************************************************************************
#*  Report Titles
#****************************************************************************
$trans["reportHolds"]              = "\$text = 'Solicitações de Reserva contendo informações de contato de Membros';";
$trans["reportCheckouts"]          = "\$text = 'Lista de Empréstimos';";
$trans["Over Due Letters"]         = "\$text = 'Carta por Atraso;";
$trans["reportLabels"]             = "\$text = 'Lista de Impressão de Etiquetas';";
$trans["popularBiblios"]           = "\$text = 'Bibliografias mais Populares ';";
$trans["overdueList"]              = "\$text = 'Lista de membros com Atraso';";
$trans["balanceDueList"]           = "\$text = 'Lista de membros com Saldo Devedor';";

#****************************************************************************
#*  Label Titles
#****************************************************************************
$trans["labelsMulti"]              = "\$text = 'Exemplo de multi etiquetas';";
$trans["labelsSimple"]             = "\$text = ' Exemplo de etiqueta simples';";

#****************************************************************************
#*  Column Text
#****************************************************************************
$trans["biblio.bibid"]             = "\$text = 'Biblio ID';";
$trans["biblio.create_dt"]         = "\$text = 'Data adicionada';";
$trans["biblio.last_change_dt"]    = "\$text = 'ùltima modificação';";
$trans["biblio.material_cd"]       = "\$text = 'Material CD';";
$trans["biblio.collection_cd"]     = "\$text = 'Coleção';";
$trans["biblio.call_nmbr1"]        = "\$text = 'Ligar 1';";
$trans["biblio.call_nmbr2"]        = "\$text = 'Ligar 2';";
$trans["biblio.call_nmbr3"]        = "\$text = 'ligar 3';";
$trans["biblio.title_remainder"]   = "\$text = 'Sub Título';";
$trans["biblio.responsibility_stmt"] = "\$text = 'Indicação da responsabilidade, tradutor, etc.:';";
$trans["biblio.opac_flg"]          = "\$text = 'OPAC Flag';";

$trans["biblio_copy.barcode_nmbr"] = "\$text = 'Código de Barras';";
$trans["biblio.title"]             = "\$text = 'Título';";
$trans["biblio.author"]            = "\$text = 'Autor';";
$trans["biblio_copy.status_begin_dt"]   = "\$text = 'Status Data Inicial';";
$trans["biblio_copy.due_back_dt"]       = "\$text = 'Due Back Date';";
$trans["member.mbrid"]             = "\$text = 'Usuário ID';";
$trans["member.barcode_nmbr"]      = "\$text = 'Código de Barra Usuário';";
$trans["member.last_name"]         = "\$text = 'Sobrenome';";
$trans["member.first_name"]        = "\$text = 'Nome';";
$trans["member.address"]          = "\$text = 'Endereço';";
$trans["biblio_hold.hold_begin_dt"] = "\$text = 'Data inicial de espera';";
$trans["member.home_phone"]        = "\$text = 'Telefone Residencial';";
$trans["member.work_phone"]        = "\$text = 'Telefone Comercial';";
$trans["member.email"]             = "\$text = 'Email';";
$trans["biblio_status_dm.description"] = "\$text = 'Status';";
$trans["settings.library_name"]    = "\$text = 'Nome da Biblioteca';";
$trans["settings.library_hours"]   = "\$text = 'Horário da Biblioteca';";
$trans["settings.library_phone"]   = "\$text = 'Telefone da biblioteca';";
$trans["days_late"]                = "\$text = 'Dias de atraso';";
$trans["title"]                    = "\$text = 'Título';";
$trans["author"]                   = "\$text = 'Autor';";
$trans["due_back_dt"]              = "\$text = 'Devolvido';";
$trans["checkoutCount"]            = "\$text = 'Contagem de Saída';";


#****************************************************************************
#*  Tradução MundoUbuntu
#****************************************************************************
$trans["Cataloging"]			= "\$text = 'Catalogação';";
$trans["Circulation"]    		= "\$text = 'Circulação';";
$trans["Statistics"]    		= "\$text = 'Estatísticas';";
$trans["Acquisition"]    		= "\$text = 'Aquisição';";
$trans["Copy Search"]    		= "\$text = 'Busca de Cópias';";
$trans["Duplicate Titles"]    	= "\$text = 'Títulos Duplicados';";
$trans["Item Checkout History"] = "\$text = 'Histórico de Pedidos de itens';";
$trans["No results found."]    	= "\$text = 'Nenhum resultado encontrado.';";
$trans["Member Search"]    		= "\$text = 'Busca de Membros';";
$trans["Most Popular Authors"]  = "\$text = 'Autores mais Populares';";
$trans["Periodic Checkout Count"] 	= "\$text = 'Contagem de Empréstimos Periódicos';";
$trans["After (Date or yesterday)"] = "\$text = 'Após (Data ou yesterday) ';";
$trans["Before"]    				= "\$text = 'Antes';";
$trans["Collection"]    			= "\$text = 'Gênero do Acervo';";
$trans["Sort By"]    				= "\$text = 'Ordernar por';";
$trans["Format"]    				= "\$text = 'Formato';";
$trans["Submit"]    				= "\$text = ' Enviar ';";
$trans["Barcode Starts With"]    	= "\$text = 'Código de Barras Começa com';";
$trans["List of Barcodes (spaced)"] = "\$text = 'Lista de Códigos de Barras (Espaçados)';";
$trans["Newer than (Date or today)"]= "\$text = 'Mais novos que (Data ou today)';";
$trans["Duplicate Criteria"]    	= "\$text = 'Critério de Duplicação';";
$trans["Name Contains"]    			= "\$text = 'Nome contém';";
$trans["Address or Phone or Email Contains"] = "\$text = 'Endereço, Telefone ou Email contém';";
$trans["Call Number"]    		= "\$text = 'Número do Tombo';";
$trans["As of"]    				= "\$text = 'A partir de';";
$trans["Out since"]    			= "\$text = 'Fora desde';";
$trans["Due before"]    		= "\$text = 'Vencimento antes';";
$trans["Minimum balance"]    	= "\$text = 'Saldo Mínimo';";
$trans["Placed before"]    		= "\$text = 'Criado antes de';";
$trans["Placed since"]    		= "\$text = 'Criado a partir de';";
$trans["Group By"]    			= "\$text = 'Agrupar por';";
$trans["Time Span"]    			= "\$text = 'Intervalo de Tempo';";	
$trans["Labels"]    			= "\$text = 'Etiquetas';";	
$trans["Skip Labels"]    		= "\$text = 'Pular Etiquetas';";
?>
