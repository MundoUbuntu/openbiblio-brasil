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
$trans["adminSubmit"]              = "\$text = 'Entrar';";
$trans["adminCancel"]              = "\$text = 'Cancelar';";
$trans["adminDelete"]              = "\$text = 'Deletar';";
$trans["adminUpdate"]              = "\$text = 'atualizar';";
$trans["adminFootnote"]            = "\$text = 'Os campos marcados com %symbol% é requerido.';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = 'Administrador';";
$trans["indexDesc"]                = "\$text = 'Use as funções localizadas na área de navegação à esquerda para gerenciar a equipe de sua biblioteca e os registros administrativos.';";

#****************************************************************************
#*  Translation text for page collections*.php
#****************************************************************************
$trans["adminCollections_delReturn"]                 = "\$text = 'retornar a lista de coleção';";
$trans["adminCollections_delStart"]                 = "\$text = 'Coleção, ';";

#****************************************************************************
#*  Translation text for page collections_del.php
#****************************************************************************
$trans["adminCollections_delEnd"]                 = "\$text = ', foi excluida.';";

#****************************************************************************
#*  Translation text for page collections_del_confirm.php
#****************************************************************************
$trans["adminCollections_del_confirmText"]                 = "\$text = 'Tem certeza de que deseja excluir a coleção, ';";

#****************************************************************************
#*  Translation text for page collections_edit.php
#****************************************************************************
$trans["adminCollections_editEnd"]                 = "\$text = ', Foi atualizada.';";

#****************************************************************************
#*  Translation text for page collections_edit_form.php
#****************************************************************************
$trans["adminCollections_edit_formEditcollection"]                 = "\$text = 'Edite a coleção:';";
$trans["adminCollections_edit_formDescription"]                 = "\$text = 'Descrição:';";
$trans["adminCollections_edit_formDaysdueback"]                 = "\$text = Foi atualizado:';";
$trans["adminCollections_edit_formDailyLateFee"]                 = "\$text = 'Taxa diaria de atraso:';";
$trans["adminCollections_edit_formNote"]                 = "\$text = '*Nota:';";
$trans["adminCollections_edit_formNoteText"]                 = "\$text = '
Ajustar os dias devidos de volta a zero torna a coleção inteira indisponível para checagem.';";

#****************************************************************************
#*  Translation text for page collections_list.php
#****************************************************************************
$trans["adminCollections_listAddNewCollection"]                 = "\$text = 'Adicione nova coleção';";
$trans["adminCollections_listCollections"]                 = "\$text = 'Coleções:';";
$trans["adminCollections_listFunction"]                 = "\$text = 'Função';";
$trans["adminCollections_listDescription"]                 = "\$text = 'Descrição';";
$trans["adminCollections_listDaysdueback"]                 = "\$text = 'Dias<br>Devolvido';";
$trans["adminCollections_listDailylatefee"]                 = "\$text = 'Dairia<br>Taxa diaria';";
$trans["adminCollections_listBibliographycount"]                 = "\$text = 'Bibliografia<br>Contagem';";
$trans["adminCollections_listEdit"]                 = "\$text = 'Editar';";
$trans["adminCollections_listDel"]                 = "\$text = 'deletar';";
$trans["adminCollections_ListNote"]                 = "\$text = '*Nota:';";
$trans["adminCollections_ListNoteText"]                 = "\$text = 'A função de exclusão só está disponível em coleções que possuem uma contagem bibliográfica de zero.<br>Se você deseja excluir uma coleção com uma contagem de bibliografia maior que zero, primeiro você precisará alterar o tipo de material nessas bibliografias para outro tipo de material.';";

#****************************************************************************
#*  Translation text for page collections_new.php
#****************************************************************************
$trans["adminCollections_newAdded"]                 = "\$text = ', foi adicionado.';";

#****************************************************************************
#*  Translation text for page collections_new_form.php
#****************************************************************************
$trans["adminCollections_new_formAddnewcollection"]                 = "\$text = 'Adcionar nova coleção:';";
$trans["adminCollections_new_formDescription"]                 = "\$text = 'Descrição:';";
$trans["adminCollections_new_formDaysdueback"]                 = "\$text = 'Dias devidos:';";
$trans["adminCollections_new_formDailylatefee"]                 = "\$text = 'Taxa diária de atraso:';";
$trans["adminCollections_new_formNote"]                 = "\$text = '*Nota:';";
$trans["adminCollections_new_formNoteText"]                 = "\$text = 'Ajustar os dias devidos de volta a zero torna a coleção inteira indisponível para checagem.';";

#****************************************************************************
#*  Translation text for page materials_del.php
#****************************************************************************
$trans["admin_materials_delMaterialType"]                 = "\$text = 'Tipo de material, ';";
$trans["admin_materials_delMaterialdeleted"]                 = "\$text = ', Foi deletado.';";
$trans["admin_materials_Return"]                 = "\$text = 'returnar para a lista de tipo de material';";

#****************************************************************************
#*  Translation text for page materials_del_form.php
#****************************************************************************
$trans["admin_materials_delAreyousure"]                 = "\$text = 'Tem certeza de que deseja excluir o tipo de material, ';";

#****************************************************************************
#*  Translation text for page materials_edit_form.php
#****************************************************************************
$trans["admin_materials_delEditmaterialtype"]                 = "\$text = 'Edite Tipo de Material:';";
$trans["admin_materials_delDescription"]                 = "\$text = 'Descrição:';";
$trans["admin_materials_delunlimited"]                 = "\$text = '(Digite zero para ilimitado)';";
$trans["admin_materials_delImagefile"]                 = "\$text = 'Arquivo de imagem:';";
$trans["admin_materials_delNote"]                 = "\$text = '*Nota:';";
$trans["admin_materials_delNoteText"]                 = "\$text = 'Os arquivos de imagem devem estar localizados no diretório openbiblio / images.';";

#****************************************************************************
#*  Translation text for page materials_edit.php
#****************************************************************************
$trans["admin_materials_editEnd"]                 = "\$text = ', Atualizado.';";

#****************************************************************************
#*  Translation text for page materials_list.php
#****************************************************************************
$trans["admin_materials_listAddmaterialtypes"]                 = "\$text = 'Adicione novo tipo de material';";
$trans["admin_materials_listMaterialtypes"]                 = "\$text = 'Tipos de material:';";
$trans["admin_materials_listFunction"]                 = "\$text = 'Função';";
$trans["admin_materials_listDescription"]                 = "\$text = 'Descrição';";
$trans["admin_materials_listLimits"]                 = "\$text = 'Limites';";
$trans["admin_materials_listCheckoutlimit"]                 = "\$text = 'conferir';";
$trans["admin_materials_listRenewallimit"]                 = "\$text = 'Renovação';";
$trans["admin_materials_listImageFile"]                 = "\$text = 'Imagem<br>arquivo';";
$trans["admin_materials_listBibcount"]                 = "\$text = 'Bibliografia<br>Contagem';";
$trans["admin_materials_listEdit"]                 = "\$text = 'editar';";
$trans["admin_materials_listDel"]                 = "\$text = 'deletar';";
$trans["admin_materials_listNote"]                 = "\$text = '*Nota:';";
$trans["admin_materials_listNoteText"]                 = "\$text = 'A função de exclusão só está disponível em tipos de material que tenham uma contagem bibliográfica de zero. Se você deseja excluir um tipo de material com uma contagem de bibliografia maior que zero, primeiro você precisará alterar o tipo de material nessas bibliografias para outro tipo de material.';";

#****************************************************************************
#*  Translation text for page materials_new.php
#****************************************************************************
$trans["admin_materials_listNewadded"]                 = "\$text = ', Adicionado.';";

#****************************************************************************
#*  Translation text for page materials_new_form.php
#****************************************************************************
$trans["admin_materials_new_formNoteText"]                 = "\$text = 'Os arquivos de imagem devem estar localizados no arquivo openbiblio/diretório de imagens.';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["admin_noauth"]                 = "\$text = '
Você não está autorizado a usar a guia Administrador.';";

#****************************************************************************
#*  Translation text for page settings_edit.php
#****************************************************************************

#****************************************************************************
#*  Translation text for page settings_edit_form.php
#****************************************************************************
$trans["admin_settingsUpdated"]                 = "\$text = Você não está autorizado a usar a guia Administrador.';";
$trans["admin_settingsEditsettings"]                 = "\$text = 'Editar configurações da biblioteca:';";
$trans["admin_settingsLibName"]                 = "\$text = 'Nome da Biblioteca:';";
$trans["admin_settingsLibimageurl"]                 = "\$text = 'Imagem da Biblioteca (URL):';";
$trans["admin_settingsOnlyshowimginheader"]                 = "\$text = 'Mostrar apenas a imagem no cabeçalho:';";
$trans["admin_settingsLibhours"]                 = "\$text = 'Horário da Biblioteca:';";
$trans["admin_settingsLibphone"]                 = "\$text = 'Telefone da Biblioteca:';";
$trans["admin_settingsLibURL"]                 = "\$text = 'Biblioteca URL:';";
$trans["admin_settingsOPACURL"]                 = "\$text = 'Catálogo On-line URL:';";
$trans["admin_settingsSessionTimeout"]                 = "\$text = 'Sessão é Finalizada em:';";
$trans["admin_settingsMinutes"]                 = "\$text = 'minutos';";
$trans["admin_settingsSearchResults"]                 = "\$text = 'Resultados de pesquisa:';";
$trans["admin_settingsItemsperpage"]                 = "\$text = 'itens por página';";
$trans["admin_settingsPurgebibhistory"]                 = "\$text = 'Limpar Histórico da Bibliografia:';";
$trans["days"]                 = "\$text = 'dias';";
$trans["Max. hold length:"]                 = "\$text = 'Tempo máximo de Empréstimo:';";
$trans["admin_settingsmonths"]                 = "\$text = 'meses';";
$trans["admin_settingsBlockCheckouts"]                 = "\$text = 'Bloquear os empréstimos quando tiver multas devidas:';";
$trans["admin_settingsLocale"]                 = "\$text = 'Tradução:';";
$trans["admin_settingsHTMLChar"]                 = "\$text = 'Codificação de Caracteres HTML (Charset):';";
$trans["admin_settingsHTMLTagLangAttr"]                 = "\$text = 'HTML Tag Lang Attribute:';";
$trans["admin_settingsUpdated"]                 = "\$text = 'Configurações da Biblioteca foram atualizadas com sucesso.';";

#****************************************************************************
#*  Translation text for all staff pages
#****************************************************************************
$trans["adminStaff_Staffmember"]                 = "\$text = 'Membro da equipe,';";
$trans["adminStaff_Return"]                 = "\$text = 'retornar para lista de membros da equipe';";
$trans["adminStaff_Yes"]                 = "\$text = 'Sim';";
$trans["adminStaff_No"]                 = "\$text = 'Não';";


#****************************************************************************
#*  Translation text for page staff_del.php
#****************************************************************************
$trans["adminStaff_delDeleted"]                 = "\$text = ', Deletado.';";

#****************************************************************************
#*  Translation text for page staff_delete_confirm.php
#****************************************************************************
$trans["adminStaff_del_confirmConfirmText"]                 = "\$text = 'Você tem certeza que quer deletar um membro da equipe, ';";

#****************************************************************************
#*  Translation text for page staff_edit.php
#****************************************************************************
$trans["adminStaff_editUpdated"]                 = "\$text = ', Atualizado.';";

#****************************************************************************
#*  Translation text for page staff_edit_form.php
#****************************************************************************
$trans["adminStaff_edit_formHeader"]                 = "\$text = 'Editar informações de membro de equipe:';";
$trans["adminStaff_edit_formLastname"]                 = "\$text = 'Sobrenome:';";
$trans["adminStaff_edit_formFirstname"]                 = "\$text = 'Nome:';";
$trans["adminStaff_edit_formLogin"]                 = "\$text = 'Login Usuário:';";
$trans["adminStaff_edit_formAuth"]                 = "\$text = 'Autorização:';";
$trans["adminStaff_edit_formCirc"]                 = "\$text = 'Circulação';";
$trans["adminStaff_edit_formUpdatemember"]                 = "\$text = 'Atualizar usuário';";
$trans["adminStaff_edit_formCatalog"]                 = "\$text = 'Catalogo';";
$trans["adminStaff_edit_formAdmin"]                 = "\$text = 'Administração';";
$trans["adminStaff_edit_formReports"]                 = "\$text = 'Relatórios';";
$trans["adminStaff_edit_formSuspended"]                 = "\$text = 'Suspenso:';";

#****************************************************************************
#*  Translation text for page staff_list.php
#****************************************************************************
$trans["adminStaff_list_formHeader"]                 = "\$text = 'Adicionar novo membro da equipe';";
$trans["adminStaff_list_Columnheader"]                 = "\$text = ' Membro da equipe:';";
$trans["adminStaff_list_Function"]                 = "\$text = 'Função';";
$trans["adminStaff_list_Edit"]                 = "\$text = 'editar';";
$trans["adminStaff_list_Pwd"]                 = "\$text = 'pwd';";
$trans["adminStaff_list_Del"]                 = "\$text = 'deleletar';";

#****************************************************************************
#*  Translation text for page staff_new.php
#****************************************************************************
$trans["adminStaff_new_Added"]                 = "\$text = ', Adicionado.';";

#****************************************************************************
#*  Translation text for page staff_new_form.php
#****************************************************************************
$trans["adminStaff_new_form_Header"]          	= "\$text = 'Adicionar novo membro da equipe:';";
$trans["adminStaff_new_form_Password"]          = "\$text = 'Senha:';";
$trans["adminStaff_new_form_Reenterpassword"]   = "\$text = 'Redigitar senha:';";

#****************************************************************************
#*  Translation text for page staff_pwd_reset.php
#****************************************************************************
$trans["adminStaff_pwd_reset_Passwordreset"]   = "\$text = 'A senha foi redefinida.';";

#****************************************************************************
#*  Translation text for page staff_pwd_reset_form.php
#****************************************************************************
$trans["adminStaff_pwd_reset_form_Resetheader"]   = "\$text = 'Deletar membro da equipe:';";

#****************************************************************************
#*  Translation text for theme pages
#****************************************************************************
$trans["adminTheme_Return"]                 = "\$text = 'retornar a lista de temas';";
$trans["adminTheme_Theme"]                 = "\$text = 'Tema, ';";

#****************************************************************************
#*  Translation text for page theme_del.php
#****************************************************************************
$trans["adminTheme_Deleted"]                 = "\$text = ',Deletado.';";
#****************************************************************************
#*  Translation text for page theme_del_confirm.php
#****************************************************************************
$trans["adminTheme_Deleteconfirm"]                 = "\$text = 'Tem certeza de que deseja excluir o tema, ';";
#****************************************************************************
#*  Translation text for page theme_edit.php
#****************************************************************************
$trans["adminTheme_Updated"]                 = "\$text = ', atualizado.';";

#****************************************************************************
#*  Translation text for page theme_edit_form.php
#****************************************************************************
$trans["adminTheme_Preview"]                 = "\$text = 'Visualizar alterações de tema';";

#****************************************************************************
#*  Translation text for page theme_list.php
#****************************************************************************
$trans["adminTheme_Changetheme"]                 = "\$text = 'Alterar o tema em uso:';";
$trans["adminTheme_Choosetheme"]                 = "\$text = 'Escolha um novo tema:';";
$trans["adminTheme_Addnew"]                 = "\$text = 'Adicionar novo tema';";
$trans["adminTheme_themes"]                 = "\$text = 'Temas:';";
$trans["adminTheme_function"]                 = "\$text = 'Função';";
$trans["adminTheme_Themename"]                 = "\$text = 'Nome do Tema';";
$trans["adminTheme_Usage"]                 = "\$text = 'Usar';";
$trans["adminTheme_Edit"]                 = "\$text = 'editar';";
$trans["adminTheme_Copy"]                 = "\$text = 'copiar';";
$trans["adminTheme_Del"]                 = "\$text = 'deletar';";
$trans["adminTheme_Inuse"]                 = "\$text = 'in uso';";
$trans["adminTheme_Note"]                 = "\$text = '*Noto:';";
$trans["adminTheme_Notetext"]                 = "\$text = 'A função Excluir não está disponível sobre o tema que está atualmente em uso.';";

#****************************************************************************
#*  Translation text for page theme_list.php
#****************************************************************************
$trans["adminTheme_Theme2"]                 = "\$text = 'Tema:';";
$trans["adminTheme_Tablebordercolor"]                 = "\$text = 'Cor da borda da tabela:';";
$trans["adminTheme_Errorcolor"]                 = "\$text = 'Erro Cor:';";
$trans["adminTheme_Tableborderwidth"]                 = "\$text = 'Largura da borda da tabela:';";
$trans["adminTheme_Tablecellpadding"]                 = "\$text = 'Espaçamento entre as celulas da tabela:';";
$trans["adminTheme_Title"]                 = "\$text = 'Título';";
$trans["adminTheme_Mainbody"]                 = "\$text = 'Corpo principal;";
$trans["adminTheme_Navigation"]                 = "\$text = 'Navigação';";
$trans["adminTheme_Tabs"]                 = "\$text = 'fundo';";
$trans["adminTheme_Backgroundcolor"]                 = "\$text = 'Cor de fundo:';";
$trans["adminTheme_Fontface"]                 = "\$text = 'Fonte:';";
$trans["adminTheme_Fontsize"]                 = "\$text = 'Tamanho da fonte:';";
$trans["adminTheme_Bold"]                 = "\$text = 'Negrito';";
$trans["adminTheme_Fontcolor"]                 = "\$text = 'Cor da fonte:';";
$trans["adminTheme_Linkcolor"]                 = "\$text = 'Link da cor:';";
$trans["adminTheme_Align"]                 = "\$text = 'Alinhar:';";
$trans["adminTheme_Right"]                 = "\$text = 'Direita';";
$trans["adminTheme_Left"]                 = "\$text = 'Esquerda';";
$trans["adminTheme_Center"]                 = "\$text = 'Centralizar';";

$trans["adminTheme_HeaderWording"]                 = "\$text = 'Editar';";


#****************************************************************************
#*  Translation text for page theme_new.php
#****************************************************************************
$trans["adminTheme_new_Added"]                 = "\$text = ', Adicionado.';";

#****************************************************************************
#*  Translation text for page theme_new_form.php
#****************************************************************************

#****************************************************************************
#*  Translation text for page theme_preview.php
#****************************************************************************
$trans["adminTheme_preview_Themepreview"]                 = "\$text = 'Pré-visualização de temas';";
$trans["adminTheme_preview_Librarytitle"]                 = "\$text = 'Título da Biblioteca';";
$trans["adminTheme_preview_CloseWindow"]                 = "\$text = 'Fechar janela';";
$trans["adminTheme_preview_Home"]                 = "\$text = 'Inicial';";
$trans["adminTheme_preview_Circulation"]   = "\$text = 'Circulação';";
$trans["adminTheme_preview_Cataloging"]    = "\$text = 'Catalogação';";
$trans["adminTheme_preview_Admin"]         = "\$text = 'Administração';";
$trans["adminTheme_preview_Samplelink"]    = "\$text = 'Prévia Link';";
$trans["adminTheme_preview_Thisstart"]     = "\$text = 'Esta é uma prévia do ';";
$trans["adminTheme_preview_Thisend"]       = "\$text = 'tema.';";
$trans["adminTheme_preview_Samplelist"]    = "\$text = 'Lista de amostras:';";
$trans["adminTheme_preview_Tableheading"]  = "\$text = 'Cabeçalho da tabela';";
$trans["adminTheme_preview_Sampledatarow1"]= "\$text = 'Linha de dados da amostra 1';";
$trans["adminTheme_preview_Sampledatarow2"]= "\$text = 'Linha de dados da amostra 2';";
$trans["adminTheme_preview_Sampledatarow3"]= "\$text = 'Linha de dados da amostra 3';";
$trans["adminTheme_preview_Samplelink"]    = "\$text = 'Prévia link';";
$trans["adminTheme_preview_Sampleerror"]   = "\$text = 'Erro';";
$trans["adminTheme_preview_Sampleinput"]   = "\$text = 'Entre com amostra';";
$trans["adminTheme_preview_Samplebutton"]  = "\$text = 'Botão Amostra';";
$trans["adminTheme_preview_Poweredby"]     = "\$text = 'Desenvolvido por OpenBiblio e traduzido por Cláudio Antonio Gomes e Henrique Monteiro';";
$trans["adminTheme_preview_Copyright"]     = "\$text = 'Copyright &copy; 2002-2005 Dave Stevens';";
$trans["adminTheme_preview_underthe"]      = "\$text = 'under the';";
$trans["adminTheme_preview_GNU"]           = "\$text = 'GNU General Public License';";

#****************************************************************************
#*  Translation text for page theme_use.php
#****************************************************************************

?>
