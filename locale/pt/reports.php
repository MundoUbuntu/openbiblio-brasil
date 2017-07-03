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
$trans["indexHdr"]                 = "\$text = 'Relat�rios';";
$trans["indexDesc"]                = "\$text = 'Use a lista de relat�rios ou r�tulos localizada na �rea de navega��o � esquerda para produzir relat�rios ou etiquetas.';";

#****************************************************************************
#*  Translation text for page report_list.php
#****************************************************************************
$trans["reportListHdr"]            = "\$text = 'Lista de relat�rios';";
$trans["reportListDesc"]           = "\$text = 'Escolha um dos seguintes links para executar um relat�rio.';";
$trans["reportListXmlErr"]         = "\$text = 'Ocorreu um erro ao analisar a defini��o do relat�rio xml.';";
$trans["reportListCannotRead"]     = "\$text = 'N�o � poss�vel ler o arquivo: %fileName%';";

#****************************************************************************
#*  Translation text for page label_list.php
#****************************************************************************
$trans["labelListHdr"]             = "\$text = 'Lista de etiquetas';";
$trans["labelListDesc"]            = "\$text = Escolha um dos seguintes links para produzir etiquetas em formato pdf.';";
$trans["displayLabelsXmlErr"]      = "\$text = 'Ocorreu um erro ao analisar a defini��o do relat�rio xml.  Error = ';";

#****************************************************************************
#*  Translation text for page letter_list.php
#****************************************************************************
$trans["letterListHdr"]            = "\$text = 'Lista de letras';";
$trans["letterListDesc"]           = "\$text = 'Escolha um dos seguintes links para produzir letras em formato pdf.';";
$trans["displayLettersXmlErr"]      = "\$text = 'Ocorreu um erro ao analisar a defini��o do relat�rio xml.  Error = ';";

#****************************************************************************
#*  Translation text for page report_criteria.php
#****************************************************************************
$trans["reportCriteriaHead1"]      = "\$text = 'Crit�rios de pesquisa de relat�rio(opcional)';";
$trans["reportCriteriaHead2"]      = "\$text = 'Ordem de classifica��o do relat�rio(opcional)';";
$trans["reportCriteriaHead3"]      = "\$text = 'Tipo de sa�da do relat�rio';";
$trans["reportCriteriaCrit1"]      = "\$text = 'Crit�rio 1:';";
$trans["reportCriteriaCrit2"]      = "\$text = 'Crit�rio 2:';";
$trans["reportCriteriaCrit3"]      = "\$text = 'Crit�rio 3:';";
$trans["reportCriteriaCrit4"]      = "\$text = 'Crit�rio 4:';";
$trans["reportCriteriaEQ"]         = "\$text = '=';";
$trans["reportCriteriaNE"]         = "\$text = 'n�o =';";
$trans["reportCriteriaLT"]         = "\$text = '&lt;';";
$trans["reportCriteriaGT"]         = "\$text = '&gt;';";
$trans["reportCriteriaLE"]         = "\$text = '&lt ou =';";
$trans["reportCriteriaGE"]         = "\$text = '&gt ou =';";
$trans["reportCriteriaBT"]         = "\$text = 'entre';";
$trans["reportCriteriaAnd"]        = "\$text = 'e';";
$trans["reportCriteriaRunReport"]  = "\$text = 'Executar relat�rio';";
$trans["reportCriteriaSortCrit1"]  = "\$text = 'Ordenar 1:';";
$trans["reportCriteriaSortCrit2"]  = "\$text = 'Ordenar 2:';";
$trans["reportCriteriaSortCrit3"]  = "\$text = 'Ordenas 3:';";
$trans["reportCriteriaAscending"]  = "\$text = 'Ascendente';";
$trans["reportCriteriaDescending"] = "\$text = 'descendente';";
$trans["reportCriteriaStartOnLabel"] = "\$text = 'Iniciar impress�o de etiqueta:';";
$trans["reportCriteriaOutput"]     = "\$text = 'Tipo de saida:';";
$trans["reportCriteriaOutputHTML"] = "\$text = 'HTML';";
$trans["reportCriteriaOutputCSV"]  = "\$text = 'CSV';";

#****************************************************************************
#*  Translation text for page run_report.php
#****************************************************************************
$trans["runReportReturnLink1"]     = "\$text = 'Crit�rios de sele��o de relat�rios';";
$trans["runReportReturnLink2"]     = "\$text = 'Lista de relat�rios';";
$trans["runReportTotal"]           = "\$text = 'Total de linhas:';";

#****************************************************************************
#*  Translation text for page display_labels.php
#****************************************************************************
$trans["displayLabelsStartOnLblErr"] = "\$text = 'O campo deve ser num�rico.';";
$trans["displayLabelsXmlErr"]      = "\$text = 'Ocorreu um erro ao analisar a defini��o do relat�rio xml.  Erro = ';";
$trans["displayLabelsCannotRead"]  = "\$text = 'N�o � poss�vel ler o arquivo de etiqueta: %fileName%';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["noauthMsg"]                = "\$text = 'Voc� n�o est� autorizado a usar a guia Relat�rios.';";

#****************************************************************************
#*  Report Titles
#****************************************************************************
$trans["reportHolds"]              = "\$text = 'Solicita��es de Reserva contendo informa��es de contato de Membros';";
$trans["reportCheckouts"]          = "\$text = 'Lista de Empr�stimos';";
$trans["Over Due Letters"]         = "\$text = 'Carta por Atraso;";
$trans["reportLabels"]             = "\$text = 'Lista de Impress�o de Etiquetas';";
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
$trans["biblio.last_change_dt"]    = "\$text = '�ltima modifica��o';";
$trans["biblio.material_cd"]       = "\$text = 'Material CD';";
$trans["biblio.collection_cd"]     = "\$text = 'Cole��o';";
$trans["biblio.call_nmbr1"]        = "\$text = 'Ligar 1';";
$trans["biblio.call_nmbr2"]        = "\$text = 'Ligar 2';";
$trans["biblio.call_nmbr3"]        = "\$text = 'ligar 3';";
$trans["biblio.title_remainder"]   = "\$text = 'Sub T�tulo';";
$trans["biblio.responsibility_stmt"] = "\$text = 'Indica��o da responsabilidade, tradutor, etc.:';";
$trans["biblio.opac_flg"]          = "\$text = 'OPAC Flag';";

$trans["biblio_copy.barcode_nmbr"] = "\$text = 'C�digo de Barras';";
$trans["biblio.title"]             = "\$text = 'T�tulo';";
$trans["biblio.author"]            = "\$text = 'Autor';";
$trans["biblio_copy.status_begin_dt"]   = "\$text = 'Status Data Inicial';";
$trans["biblio_copy.due_back_dt"]       = "\$text = 'Due Back Date';";
$trans["member.mbrid"]             = "\$text = 'Usu�rio ID';";
$trans["member.barcode_nmbr"]      = "\$text = 'C�digo de Barra Usu�rio';";
$trans["member.last_name"]         = "\$text = 'Sobrenome';";
$trans["member.first_name"]        = "\$text = 'Nome';";
$trans["member.address"]          = "\$text = 'Endere�o';";
$trans["biblio_hold.hold_begin_dt"] = "\$text = 'Data inicial de espera';";
$trans["member.home_phone"]        = "\$text = 'Telefone Residencial';";
$trans["member.work_phone"]        = "\$text = 'Telefone Comercial';";
$trans["member.email"]             = "\$text = 'Email';";
$trans["biblio_status_dm.description"] = "\$text = 'Status';";
$trans["settings.library_name"]    = "\$text = 'Nome da Biblioteca';";
$trans["settings.library_hours"]   = "\$text = 'Hor�rio da Biblioteca';";
$trans["settings.library_phone"]   = "\$text = 'Telefone da biblioteca';";
$trans["days_late"]                = "\$text = 'Dias de atraso';";
$trans["title"]                    = "\$text = 'T�tulo';";
$trans["author"]                   = "\$text = 'Autor';";
$trans["due_back_dt"]              = "\$text = 'Devolvido';";
$trans["checkoutCount"]            = "\$text = 'Contagem de Sa�da';";


#****************************************************************************
#*  Tradu��o MundoUbuntu
#****************************************************************************
$trans["Cataloging"]			= "\$text = 'Cataloga��o';";
$trans["Circulation"]    		= "\$text = 'Circula��o';";
$trans["Statistics"]    		= "\$text = 'Estat�sticas';";
$trans["Acquisition"]    		= "\$text = 'Aquisi��o';";
$trans["Copy Search"]    		= "\$text = 'Busca de C�pias';";
$trans["Duplicate Titles"]    	= "\$text = 'T�tulos Duplicados';";
$trans["Item Checkout History"] = "\$text = 'Hist�rico de Pedidos de itens';";
$trans["No results found."]    	= "\$text = 'Nenhum resultado encontrado.';";
$trans["Member Search"]    		= "\$text = 'Busca de Membros';";
$trans["Most Popular Authors"]  = "\$text = 'Autores mais Populares';";
$trans["Periodic Checkout Count"] 	= "\$text = 'Contagem de Empr�stimos Peri�dicos';";
$trans["After (Date or yesterday)"] = "\$text = 'Ap�s (Data ou yesterday) ';";
$trans["Before"]    				= "\$text = 'Antes';";
$trans["Collection"]    			= "\$text = 'G�nero do Acervo';";
$trans["Sort By"]    				= "\$text = 'Ordernar por';";
$trans["Format"]    				= "\$text = 'Formato';";
$trans["Submit"]    				= "\$text = ' Enviar ';";
$trans["Barcode Starts With"]    	= "\$text = 'C�digo de Barras Come�a com';";
$trans["List of Barcodes (spaced)"] = "\$text = 'Lista de C�digos de Barras (Espa�ados)';";
$trans["Newer than (Date or today)"]= "\$text = 'Mais novos que (Data ou today)';";
$trans["Duplicate Criteria"]    	= "\$text = 'Crit�rio de Duplica��o';";
$trans["Name Contains"]    			= "\$text = 'Nome cont�m';";
$trans["Address or Phone or Email Contains"] = "\$text = 'Endere�o, Telefone ou Email cont�m';";
$trans["Call Number"]    		= "\$text = 'N�mero do Tombo';";
$trans["As of"]    				= "\$text = 'A partir de';";
$trans["Out since"]    			= "\$text = 'Fora desde';";
$trans["Due before"]    		= "\$text = 'Vencimento antes';";
$trans["Minimum balance"]    	= "\$text = 'Saldo M�nimo';";
$trans["Placed before"]    		= "\$text = 'Criado antes de';";
$trans["Placed since"]    		= "\$text = 'Criado a partir de';";
$trans["Group By"]    			= "\$text = 'Agrupar por';";
$trans["Time Span"]    			= "\$text = 'Intervalo de Tempo';";	
$trans["Labels"]    			= "\$text = 'Etiquetas';";	
$trans["Skip Labels"]    		= "\$text = 'Pular Etiquetas';";
?>
