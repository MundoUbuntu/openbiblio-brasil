<h1> Copiar Novo e Editar Páginas: </ h1>
<br> <br>

Subseções de ajuda:
<ul>
  <li> <a href="#desc"> Descrições de campo </a> </ li>
  <li> <a href="#barc"> Número de código de barras que entra de uma estrutura de numeração externa </a> </ li>
  <li> <a href="#auto"> Número de código de barras - gerar automaticamente </a> </ li>
  <li> <a href="#seri"> Copie números de série integrados nos números de códigos de barras </a> </ li>
</ ul>
<br> <br>

<a name="desc">
A tabela a seguir fornece descrições para os campos localizados no Copiar Novo e Editar Páginas. </a>
<br> <br>

<table class = "primary">
  <tr> <th> Campo </ th> <th> Descrição </ th> </ tr>
  <tr>
    <td class = "primary" valign = "top"> Número de Código de Barras </ td>
    <Td class = "primary" valign = "top"> Código único que identifica uma cópia,
Máximo de 20 caracteres. Este campo é obrigatório porque identifica a cópia em formulários de Circulação
(Check Out, Check In, Hold).
<br> Veja também:
<a href="../shared/help.php?page=barcodes"> Compreendendo os códigos de barras </a>
    </ td>
  </ tr>
  <tr>
    <td class = "primary" valign = "top"> Descrição </ td>
    <td class = "primary" valign = "top"> Texto curto descrevendo características para uma cópia. </ td>
  </ tr>
  <tr>
    <td class = "primary" valign = "top"> Status </ td>
    <td class = "primary" valign = "top"> <b> Somente em Editar Copia </ b>.
<br> Veja também:
<a href="../shared/help.php?page=status"> Compreendendo alterações de status de bibliografia </a>
    </ td>
  </ tr>
</ table>
<br> <br>

<a name="barc"> Número de código de barras que entra de uma estrutura de numeração externa </a>:
<ul>
  <li> Digite o número do código de barras manualmente ou use um scanner de código de barras se a cópia já estiver rotulada, </ li>
  <li> Enviar (Autogenerate unchecked). </ li>
</ ul>
<br>

<a name="auto">
Ao enviar uma nova cópia com o <input name = "autobarco" type = "checkbox" verificado> Autogenerate </a>
Opção para o campo Número de código de barras verificado, OpenBiblio tenta atribuir um número de código de barras exclusivo
Automaticamente, seguindo as regras da estrutura de numeração interna:
<ul>
  <li> A primeira parte é calculada a partir do <i> bibid </ i> pelo qual a bibliografia é internamente conhecida por
OpenBiblio, com zeros avançados. O comprimento padrão é de 5 dígitos, isso pode ser alterado editando o valor para
$ Nzeros em biblio_copy_new.php </ li>
  <li> A última parte é igual ao <i> copyid interno </ i> da cópia. </ Li>
</ ul>
<br> <br>

<a name="seri">
Copiar números de série integrados nos números de códigos de barras </a> facilitem a entrada de informações de cópia de um simples
Arquivo de cartão quando números exclusivos não foram atribuídos, apenas números de série para várias cópias de um título.
<br>
A página de pesquisa de código de barras contém informações sobre
<a href="../shared/help.php?page=opacLookup#seri"> Reconhecendo a cópia de números de série em números de códigos de barras gerados automaticamente </a>.
<br>
Ao adicionar cópias marcadas com identificação de número de série para uma Bibliografia:
<ul>
  <li> Verifique Autogenerate, </ li>
  <li> envie novas cópias até que o número de série da cópia corresponda com o último dígito do último número de código de barras, </ li>
  <li> apague cópias permanentemente indisponíveis, edite o status para outras pessoas. </ li>
</ ul>
<br> <br>