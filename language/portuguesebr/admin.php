<?php
// $Id: admin.php,v 1.3 2005/10/19 17:20:33 phppp Exp $
//%%%%%%	File Name  index.php   	%%%%%
define("_AM_NEWBB_FORUMCONF","Configura��o do f�rum");
define("_AM_NEWBB_ADDAFORUM","Criar um f�rum");
define("_AM_NEWBB_SYNCFORUM","Sincronizar F�runs");
define("_AM_NEWBB_REORDERFORUM","Reordenar");
define("_AM_NEWBB_FORUM_MANAGER","F�runs");
define("_AM_NEWBB_PRUNE_TITLE","Exclus�es");
define("_AM_NEWBB_CATADMIN","Categorias");
define("_AM_NEWBB_GENERALSET", "Configura��es Gerais" );
define("_AM_NEWBB_MODULEADMIN","Aministra��o do M�dulo:");
define("_AM_NEWBB_HELP","Ajuda");
define("_AM_NEWBB_ABOUT","Sobre");
define("_AM_NEWBB_BOARDSUMMARY","Estat�sticas");
define("_AM_NEWBB_PENDING_POSTS_FOR_AUTH","Mensagens pendentes de aprova��o");
define("_AM_NEWBB_POSTID","Id");
define("_AM_NEWBB_POSTDATE","Data");
define("_AM_NEWBB_POSTER","Enviado por");
define("_AM_NEWBB_TOPICS","T�pico");
define("_AM_NEWBB_SHORTSUMMARY","Resumo");
define("_AM_NEWBB_TOTALPOSTS","Mensagens");
define("_AM_NEWBB_TOTALTOPICS","T�picos");
define("_AM_NEWBB_TOTALVIEWS","Leituras");
define("_AM_NEWBB_BLOCKS","Blocos");
define("_AM_NEWBB_SUBJECT","Assunto");
define("_AM_NEWBB_APPROVE","Aprovar");
define("_AM_NEWBB_APPROVETEXT","Cont�udo desta mensagem");
define("_AM_NEWBB_POSTAPPROVED","Mensagem aprovada");
define("_AM_NEWBB_POSTNOTAPPROVED","Mensagem n�o foi aprovada");
define("_AM_NEWBB_POSTSAVED","Mensagem salva");
define("_AM_NEWBB_POSTNOTSAVED","Mensagem n�o foi salva");

define("_AM_NEWBB_TOPICAPPROVED","T�pico aprovado");
define("_AM_NEWBB_TOPICNOTAPPROVED","T�pico n�o foi aprovado");
define("_AM_NEWBB_TOPICID","Id");
define("_AM_NEWBB_ORPHAN_TOPICS_FOR_AUTH","T�picos aguardando aprova��o");


define('_AM_NEWBB_DEL_ONE','Excluir apenas esta mensagem');
define('_AM_NEWBB_POSTSDELETED','Mensagem selecionada foi exclu�da.');
define('_AM_NEWBB_NOAPPROVEPOST','N�o h� mensagens aguardando aprova��o.');
define('_AM_NEWBB_SUBJECTC','Assunto:');
define('_AM_NEWBB_MESSAGEICON','�cone da mensagem:');
define('_AM_NEWBB_MESSAGEC','Mensagem:');
define('_AM_NEWBB_CANCELPOST','Cancelar');
define('_AM_NEWBB_GOTOMOD','Ir para o M�dulo');

define('_AM_NEWBB_PREFERENCES','Prefer�ncias');
define('_AM_NEWBB_POLLMODULE','M�dulo XoopsPoll (Enquetes)');
define('_AM_NEWBB_POLL_OK','Dispon�vel para uso');
define('_AM_NEWBB_GDLIB1','Biblioteca GD1:');
define('_AM_NEWBB_GDLIB2','Biblioteca GD2:');
define('_AM_NEWBB_AUTODETECTED','Dispon�vel: ');
define('_AM_NEWBB_AVAILABLE','Dispon�vel');
define('_AM_NEWBB_NOTAVAILABLE','<font color="red">Indispon�vel</font>');
define('_AM_NEWBB_NOTWRITABLE','<font color="red">N�o tem permiss�o para grava��o</font>');
define('_AM_NEWBB_IMAGEMAGICK','ImageMagick:');
define('_AM_NEWBB_IMAGEMAGICK_NOTSET','N�o configurado');
define('_AM_NEWBB_ATTACHPATH','Diret�rio para anexos');
define('_AM_NEWBB_THUMBPATH','Diret�rio para miniaturas');
//define('_AM_NEWBB_RSSPATH','Path for RSS feed');
define('_AM_NEWBB_REPORT','Envio de Relat�rios');
define('_AM_NEWBB_REPORT_PENDING','Pendentes');
define('_AM_NEWBB_REPORT_PROCESSED','Processados');

define('_AM_NEWBB_CREATETHEDIR','Criar Diret�rio');
define('_AM_NEWBB_SETMPERM','Alterar permiss�o');
define('_AM_NEWBB_DIRCREATED','O diret�rio foi criado');
define('_AM_NEWBB_DIRNOTCREATED','N�o � poss�vel a cria��o do diret�rio');
define('_AM_NEWBB_PERMSET','Permiss�o alterada alterada com sucesso');
define('_AM_NEWBB_PERMNOTSET','N�o � poss�vel a altera��o da permiss�o');

define('_AM_NEWBB_DIGEST','Notifica��o de Informativo');
define('_AM_NEWBB_DIGEST_PAST','<font color="red">Deveria ter sido enviado h� %d minutos</font>');
define('_AM_NEWBB_DIGEST_NEXT','Ser� enviado em %d minutos');
define('_AM_NEWBB_DIGEST_ARCHIVE','Arquivo de informativos');
define('_AM_NEWBB_DIGEST_SENT','Informativo processado');
define('_AM_NEWBB_DIGEST_FAILED','Informativo n�o processado');

// admin_forum_manager.php
define("_AM_NEWBB_NAME","Nome");
define("_AM_NEWBB_CREATEFORUM","Criar f�rum");
define("_AM_NEWBB_EDIT","Editar");
define("_AM_NEWBB_CLEAR","Limpar");
define("_AM_NEWBB_DELETE","Excluir");
define("_AM_NEWBB_ADD","Incluir");
define("_AM_NEWBB_MOVE","Mover");
define("_AM_NEWBB_ORDER","Reordenar");
define("_AM_NEWBB_TWDAFAP","Nota: Ser�o removidos o F�rum e todas as suas mensagens.<br><br>ATEN��O: Voc� tem certeza que quer excluir este F�rum?");
define("_AM_NEWBB_FORUMREMOVED","F�rum exclu�do.");
define("_AM_NEWBB_CREATENEWFORUM","Incluir f�rum");
define("_AM_NEWBB_EDITTHISFORUM","Editar f�rum:");
define("_AM_NEWBB_SET_FORUMORDER","Ordem:");
define("_AM_NEWBB_ALLOWPOLLS","Permitir vota��es:");
define("_AM_NEWBB_ATTACHMENT_SIZE" ,"Tamanho m�ximo em Kbytes:");
define("_AM_NEWBB_ALLOWED_EXTENSIONS", "Extens�es permitidas:<span style='font-size: xx-small; font-weight: normal; display: block;'>'*' indica aus�ncia de restri��es. Extens�es separadas por |</span>");
//define("_AM_NEWBB_ALLOW_ATTACHMENTS", "Permitir anexos:");
define("_AM_NEWBB_ALLOWHTML","Permitir HTML:");
define("_AM_NEWBB_YES","Sim");
define("_AM_NEWBB_NO","N�o");
define("_AM_NEWBB_ALLOWSIGNATURES","Permitir assinaturas:");
define("_AM_NEWBB_HOTTOPICTHRESHOLD","N� de t�picos para ser popular:");
//define("_AM_NEWBB_POSTPERPAGE","Posts per Page:<span style='font-size: xx-small; font-weight: normal; display: block;'>(This is the number of posts<br /> per topic that will be<br /> displayed per page.)</span>");
//define("_AM_NEWBB_TOPICPERFORUM","Topics per Forum:<span style='font-size: xx-small; font-weight: normal; display: block;'>(This is the number of topics<br /> per forum that will be<br /> displayed per page.)</span>");
//define("_AM_NEWBB_SHOWNAME","Replace user's name with real name:");
//define("_AM_NEWBB_SHOWICONSPANEL","Show icons panel:");
//define("_AM_NEWBB_SHOWSMILIESPANEL","Show smilies panel:");
define("_AM_NEWBB_MODERATOR_REMOVE","Excluir moderadores atuais");
define("_AM_NEWBB_MODERATOR_ADD","Incluir moderadores");
define("_AM_NEWBB_ALLOW_SUBJECT_PREFIX", "Allow Subject Prefix for the Topics");
define("_AM_NEWBB_ALLOW_SUBJECT_PREFIX_DESC", "This allows a Prefix, which will be added to the Topic Subject");


// admin_cat_manager.php

define("_AM_NEWBB_SETCATEGORYORDER","Ordem:");
define("_AM_NEWBB_ACTIVE","Ativo");
define("_AM_NEWBB_INACTIVE","Inativo");
define("_AM_NEWBB_STATE","Status:");
define("_AM_NEWBB_CATEGORYDESC","Descri��o:");
define("_AM_NEWBB_SHOWDESC","Exibir descri��o?");
define("_AM_NEWBB_IMAGE","Imagem:");
//define("_AM_NEWBB_SPONSORIMAGE","Sponsor Image:");
define("_AM_NEWBB_SPONSORLINK","Link do patrocinador:");
define("_AM_NEWBB_DELCAT","Excluir categoria");
define("_AM_NEWBB_WAYSYWTDTTAL","Nota: Isto N�O ir� excluir os f�runs desta categoria, para isso voc� dever� usar o Gerenciador de F�runs.<br /><br />ATEN��O: Voc� tem certeza que quer excluir esta categoria?");



//%%%%%%        File Name  admin_forums.php           %%%%%
define("_AM_NEWBB_FORUMNAME","Nome do f�rum:");
define("_AM_NEWBB_FORUMDESCRIPTION","Descri��o do f�rum:");
define("_AM_NEWBB_MODERATOR","Moderador(s):");
define("_AM_NEWBB_REMOVE","Excluir");
define("_AM_NEWBB_CATEGORY","Nome da categoria:");
define("_AM_NEWBB_DATABASEERROR","Erro no banco de dados ");
define("_AM_NEWBB_CATEGORYUPDATED","Categoria atualizada.");
define("_AM_NEWBB_EDITCATEGORY","Editando categoria:");
define("_AM_NEWBB_CATEGORYTITLE","T�tulo da categoria:");
define("_AM_NEWBB_CATEGORYCREATED","Categoria criada com sucesso!");
define("_AM_NEWBB_CREATENEWCATEGORY","Incluir nova categoria");
define("_AM_NEWBB_FORUMCREATED","Opera��o de inclus�o realizada com sucesso.");
define("_AM_NEWBB_ACCESSLEVEL","N�vel de acesso:");
define("_AM_NEWBB_CATEGORY1","Categoria");
define("_AM_NEWBB_FORUMUPDATE","Opera��o de atualiza��o realizada com sucesso!");
define("_AM_NEWBB_FORUM_ERROR","ERRO: Erro na configura��o de f�rum");
define("_AM_NEWBB_CLICKBELOWSYNC","Clicar no bot�o abaixo ir� sincronizar seus f�runs e as p�ginas de t�picos com os dados corretos do banco de dados. Use esta se��o toda vez que verificar falhas nas listas de t�picos ou f�runs.");
define("_AM_NEWBB_SYNCHING","Sincronizando o �ndice do f�rum e t�picos (pode demorar alguns minutos)");
define("_AM_NEWBB_CATEGORYDELETED","Categoria exclu�da.");
define("_AM_NEWBB_MOVE2CAT","Mover para categoria:");
define("_AM_NEWBB_MAKE_SUBFORUM_OF","Fa�a subf�rum de:");
define("_AM_NEWBB_MSG_FORUM_MOVED","F�rum movido!");
define("_AM_NEWBB_MSG_ERR_FORUM_MOVED","Erro ao mover f�rum.");
define("_AM_NEWBB_SELECT","< Selecione >");
define("_AM_NEWBB_MOVETHISFORUM","Mover este f�rum");
define("_AM_NEWBB_MERGE","Mesclar");
define("_AM_NEWBB_MERGETHISFORUM","Mesclar este f�rum");
define("_AM_NEWBB_MERGETO_FORUM","Mesclar este f�rum com:");
define("_AM_NEWBB_MSG_FORUM_MERGED","F�rum mesclado com sucesso!");
define("_AM_NEWBB_MSG_ERR_FORUM_MERGED","Opera��o de mesclagem n�o realizada.");

//%%%%%%        File Name  admin_forum_reorder.php           %%%%%
define("_AM_NEWBB_REORDERID","Id");
define("_AM_NEWBB_REORDERTITLE","T�tulo");
define("_AM_NEWBB_REORDERWEIGHT","Posi��o");
define("_AM_NEWBB_SETFORUMORDER","Reordenar");
define("_AM_NEWBB_BOARDREORDER","As categorias e os f�runs foram reordenados com sucesso");

// admin_permission.php
define("_AM_NEWBB_PERMISSIONS_TO_THIS_FORUM","Permiss�es de t�pico para este f�rum");
define("_AM_NEWBB_CAT_ACCESS","Quem acessar� as categorias?");
define("_AM_NEWBB_CAN_ACCESS","Quem acessar� os f�runs?");
define("_AM_NEWBB_CAN_VIEW","Quem ler� os t�picos?");
define("_AM_NEWBB_CAN_POST","Quem iniciar� t�picos?");
define("_AM_NEWBB_CAN_REPLY","Quem responder� os t�picos?");
define("_AM_NEWBB_CAN_EDIT","Quem editar� os t�picos?");
define("_AM_NEWBB_CAN_DELETE","Quem excluir� os t�picos");
define("_AM_NEWBB_CAN_ADDPOLL","Quem incluir� enquetes?");
define("_AM_NEWBB_CAN_VOTE","Quem poder� votar?");
define("_AM_NEWBB_CAN_ATTACH","Quem anexar� arquivos?");
define("_AM_NEWBB_CAN_NOAPPROVE","Quem enviar� sem aprova��o?");
define("_AM_NEWBB_ACTION","A��o");

define("_AM_NEWBB_PERM_TEMPLATE","Modelos de Permiss�o");
define("_AM_NEWBB_PERM_TEMPLATE_DESC","Aplicar ao novos f�runs");
define("_AM_NEWBB_PERM_FORUMS","Selecionar f�runs");
define("_AM_NEWBB_PERM_TEMPLATE_CREATED","Modelo de permiss�es atualizado com sucesso.");
define("_AM_NEWBB_PERM_TEMPLATE_ERROR","N�o � poss�vel atualizar modelo de permiss�es");
define("_AM_NEWBB_PERM_TEMPLATEAPP","Aplicar modelo de permiss�es padr�o");
define("_AM_NEWBB_PERM_TEMPLATE_APPLIED","Modelo de permiss�es aplicado com sucesso!");
define("_AM_NEWBB_PERM_ACTION","Gerenciamento de Permiss�es");
define("_AM_NEWBB_PERM_SETBYGROUP","Configurar permiss�es diretamente para o grupo");

// admin_forum_prune.php

define ("_AM_NEWBB_PRUNE_RESULTS_TITLE","Resultados da exclus�o");
define ("_AM_NEWBB_PRUNE_RESULTS_TOPICS","T�picos exclu�dos");
define ("_AM_NEWBB_PRUNE_RESULTS_POSTS","Mensagens exclu�das");
define ("_AM_NEWBB_PRUNE_RESULTS_FORUMS","F�runs exclu�dos");
define ("_AM_NEWBB_PRUNE_STORE","Ao inv�s da exclus�o permanente, mover para o f�rum:");
define ("_AM_NEWBB_PRUNE_ARCHIVE","Copiar as mensagens exclu�das em arquivo?");
define ("_AM_NEWBB_PRUNE_FORUMSELERROR","Voc� deve selecionar o(s) f�rum(s) para exclus�o");

define ("_AM_NEWBB_PRUNE_DAYS","Excluir t�picos sem respostas a mais de:");
define ("_AM_NEWBB_PRUNE_FORUMS","Executar exclus�es nos f�runs:");
define ("_AM_NEWBB_PRUNE_STICKY","Preservar t�picos fixos?");
define ("_AM_NEWBB_PRUNE_DIGEST","Preservar informativo dos t�picos?");
define ("_AM_NEWBB_PRUNE_LOCK","Preservar t�picos bloqueados?");
define ("_AM_NEWBB_PRUNE_HOT","Preservar t�picos com mais de quantas repostas?");
define ("_AM_NEWBB_PRUNE_SUBMIT","OK");
define ("_AM_NEWBB_PRUNE_RESET","Limpar");
define ("_AM_NEWBB_PRUNE_YES","Sim");
define ("_AM_NEWBB_PRUNE_NO","N�o");
define ("_AM_NEWBB_PRUNE_WEEK","1 semana");
define ("_AM_NEWBB_PRUNE_2WEEKS","2 semanas");
define ("_AM_NEWBB_PRUNE_MONTH","1 m�s");
define ("_AM_NEWBB_PRUNE_2MONTH","2 meses");
define ("_AM_NEWBB_PRUNE_4MONTH","4 meses");
define ("_AM_NEWBB_PRUNE_YEAR","1 ano");
define ("_AM_NEWBB_PRUNE_2YEARS","2 anos");

// About.php constants
define('_AM_NEWBB_AUTHOR_INFO', "Informa��es sobre o desenvolvedor");
define('_AM_NEWBB_AUTHOR_NAME', "Nome");
define('_AM_NEWBB_AUTHOR_WEBSITE', "Site");
define('_AM_NEWBB_AUTHOR_EMAIL', "e-mail");
define('_AM_NEWBB_AUTHOR_CREDITS', "Cr�ditos");
define('_AM_NEWBB_MODULE_INFO', "Informa��es do desenvolvimento do m�dulo");
define('_AM_NEWBB_MODULE_STATUS', "Situa��o");
define('_AM_NEWBB_MODULE_DEMO', "Site Demonstra��o do M�dulo");
define('_AM_NEWBB_MODULE_SUPPORT', "Site de Suporte Oficial");
define('_AM_NEWBB_MODULE_BUG', "Relate um bug deste m�dulo");
define('_AM_NEWBB_MODULE_FEATURE', "Sugira uma nova caracter�stica para este m�dulo");
define('_AM_NEWBB_MODULE_DISCLAIMER', "Declara��o de Isen��o de Responsabilidade");
define('_AM_NEWBB_AUTHOR_WORD', "A palavra do desenvolvedor");
define('_AM_NEWBB_BY','por');
define('_AM_NEWBB_AUTHOR_WORD_EXTRA', "
");

// admin_report.php
define("_AM_NEWBB_REPORTADMIN","Relat�rios");
define("_AM_NEWBB_PROCESSEDREPORT","Exibir relat�rios processados");
define("_AM_NEWBB_PROCESSREPORT","Relat�rios processados");
define("_AM_NEWBB_REPORTTITLE","T�tulo");
define("_AM_NEWBB_REPORTEXTRA","Extra");
define("_AM_NEWBB_REPORTPOST","Relat�rios");
define("_AM_NEWBB_REPORTTEXT","Texto");
define("_AM_NEWBB_REPORTMEMO","Nota");

// admin_report.php
define("_AM_NEWBB_DIGESTADMIN","Informativos");
define("_AM_NEWBB_DIGESTCONTENT","Conte�do do Informativo");

// admin_votedata.php
define("_AM_NEWBB_VOTE_RATINGINFOMATION", "Enquetes");
define("_AM_NEWBB_VOTE_TOTALVOTES", "Total de votos: ");
define("_AM_NEWBB_VOTE_REGUSERVOTES", "Votos de usu�rios: %s");
define("_AM_NEWBB_VOTE_ANONUSERVOTES", "Votos de visitantes: %s");
define("_AM_NEWBB_VOTE_USER", "Usu�rio");
define("_AM_NEWBB_VOTE_IP", "IP");
define("_AM_NEWBB_VOTE_USERAVG", "Nota m�dia");
define("_AM_NEWBB_VOTE_TOTALRATE", "N� de avalia��es");
define("_AM_NEWBB_VOTE_DATE", "Data");
define("_AM_NEWBB_VOTE_RATING", "Avalia��o");
define("_AM_NEWBB_VOTE_NOREGVOTES", "Nenhum voto de usu�rios");
define("_AM_NEWBB_VOTE_NOUNREGVOTES", "Nenhum voto de visitantes");
define("_AM_NEWBB_VOTEDELETED", "Avalia��es exclu�das.");
define("_AM_NEWBB_VOTE_ID", "Id");
define("_AM_NEWBB_VOTE_FILETITLE", "T�pico");
define("_AM_NEWBB_VOTE_DISPLAYVOTES", "Informa��es de Enquetes");
define("_AM_NEWBB_VOTE_NOVOTES", "N�o h� votos a exibir");
define("_AM_NEWBB_VOTE_DELETE", "N�o h� votos a excluir");
define("_AM_NEWBB_VOTE_DELETEDSC", "<strong>Exclui</strong> a avalia��o escolhida do banco de dados.");

// admin_type_manager.php
//define("_AM_NEWBB_TYPE_ADD", "Adicionar Prefixo");
//define("_AM_NEWBB_TYPE_TEMPLATE", "Modelo de Prefixo");
//define("_AM_NEWBB_TYPE_TEMPLATE_APPLY", "Aplicar Prefixo");
//define("_AM_NEWBB_TYPE_FORUM", "Prefixo/Categoria de Forum");
//define("_AM_NEWBB_TYPE_NAME", "Nome do Prefixo");
//define("_AM_NEWBB_TYPE_COLOR", "Cor");
//define("_AM_NEWBB_TYPE_DESCRIPTION", "Descri��o");
//define("_AM_NEWBB_TYPE_ORDER", "Ordem");
//define("_AM_NEWBB_TYPE_LIST", "Lista de Prefixo");
//define("_AM_NEWBB_TODEL_TYPE", "Tem a certeza que deseja apagar os Prefixos: [%s]?");
//define("_AM_NEWBB_TYPE_ORDER_DESC", "Para ativar o prefixo no f�rum, coloque um valor maior que 0(zero); Em outras palavras, deixando em 0(zero) o prefixo permanecer� inativo no f�rum..");


// admin_synchronization.php
//define("_AM_NEWBB_SYNC_TYPE_FORUM", "Dados do Forum");
//define("_AM_NEWBB_SYNC_TYPE_TOPIC", "Dados do Topicos");
//define("_AM_NEWBB_SYNC_TYPE_POST", "Dados da Mensagens");
//define("_AM_NEWBB_SYNC_TYPE_USER", "Dados do Usu�rios");
//define("_AM_NEWBB_SYNC_TYPE_STATS", "Stats Info");
//define("_AM_NEWBB_SYNC_TYPE_MISC", "Mesclar");

//define("_AM_NEWBB_SYNC_ITEMS", "Itens para cada ciclo: ");

//define("_AM_NEWBB_CAN_TYPE", "Pode ser usado o tipo de t�pico");
//define("_AM_NEWBB_CAN_HTML", "Pode ser usado c�digo HTML");
//define("_AM_NEWBB_CAN_SIGNATURE", "Pode ser usado assinatura");

?>