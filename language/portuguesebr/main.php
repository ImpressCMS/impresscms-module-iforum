<?php
// $Id: main.php,v 1.3 2005/10/19 17:20:33 phppp Exp $
if(defined('MAIN_DEFINED')) return;
define('MAIN_DEFINED',true);

define('_MD_ERROR','Erro');
define('_MD_NOPOSTS','Nenhuma mensagem');
define('_MD_GO','Enviar');
define('_MD_SELFORUM','Selecione um f�rum');

define('_MD_THIS_FILE_WAS_ATTACHED_TO_THIS_POST','Arquivo anexado:');
define('_MD_ALLOWED_EXTENSIONS','Extens�es permitidas');
define('_MD_MAX_FILESIZE','Tamanho m�ximo de arquivo');
define('_MD_ATTACHMENT','Anexar arquivo');
define('_MD_FILESIZE','Tamanho');
define('_MD_HITS','Acessos');
define('_MD_GROUPS','Grupos:');
define('_MD_DEL_ONE','Excluir apenas esta mensagem');
define('_MD_DEL_RELATED','Excluir todas as mensagens deste t�pico');
define('_MD_MARK_ALL_FORUMS','Marcar todos os f�runs como');
define('_MD_MARK_ALL_TOPICS','Marcar todos os t�picos como');
define('_MD_MARK_UNREAD','n�o lidos');
define('_MD_MARK_READ','lidos');
define('_MD_ALL_FORUM_MARKED','Todos os f�runs marcados como');
define('_MD_ALL_TOPIC_MARKED','Todos os t�picos marcados como');
define('_MD_BOARD_DISCLAIMER','Declara��o de Isen��o de Responsabilidade');


//index.php
define('_MD_ADMINCP','Administra��o');
define('_MD_FORUM','F�rum');
define('_MD_WELCOME','Bem-vindo ao F�rum %s .');
define('_MD_TOPICS','T�picos');
define('_MD_POSTS','Mensagens');
define('_MD_LASTPOST','�ltima Mensagem');
define('_MD_MODERATOR','Moderador');
define('_MD_NEWPOSTS','Novas mensagens');
define('_MD_NONEWPOSTS','Sem novas mensagens');
define('_MD_PRIVATEFORUM','F�rum privativo');
define('_MD_BY','por'); // Posted by
define('_MD_TOSTART','Para acessar as mensagens, selecione abaixo o f�rum que deseja visitar.');
define('_MD_TOTALTOPICSC','T�picos: ');
define('_MD_TOTALPOSTSC','Mensagens: ');
define('_MD_TOTALUSER','Usu�rios: ');
define('_MD_TIMENOW','Data e hora atual: %s');
define('_MD_USER_LASTVISIT','�ltima visita: %s');
define('_MD_ADVSEARCH','Busca Avan�ada');
define('_MD_POSTEDON','Enviado em: ');
define('_MD_SUBJECT','Assunto');
define('_MD_INACTIVEFORUM_NEWPOSTS','F�rum inativo com novas mensagens');
define('_MD_INACTIVEFORUM_NONEWPOSTS','F�rum inativo sem novas mensagens');
define('_MD_SUBFORUMS','Subf�runs');
define('_MD_MAINFORUMOPT', 'Op��es');
define("_MD_PENDING_POSTS_FOR_AUTH","Mensagens aguardando aprova��o:");



//page_header.php
define('_MD_MODERATEDBY','Moderado por');
define('_MD_SEARCH','Procurar');
//define('_MD_SEARCHRESULTS','Search Results');
define('_MD_FORUMINDEX','�ndice do F�rum %s');
define('_MD_POSTNEW','Novo t�pico');
define('_MD_REGTOPOST','Registre-se para enviar mensagens');

//search.php
define('_MD_SEARCHALLFORUMS','Todos');
define('_MD_FORUMC','F�rum:');
define('_MD_AUTHORC','Autor:');
define('_MD_SORTBY','Ordenar por:');
define('_MD_DATE','�ltima <br>Mensagem');
define('_MD_TOPIC','T�pico');
define('_MD_POST2','Msg');
define('_MD_USERNAME','Usu�rio');
define('_MD_BODY','Mensagem');
define('_MD_SINCE','Desde');

//viewforum.php
define('_MD_REPLIES','Respostas');
define('_MD_POSTER','Autor');
define('_MD_VIEWS','Leituras');
define('_MD_MORETHAN','Novas mensagens [Popular]');
define('_MD_MORETHAN2','Sem novas mensagens  [Popular]');
define('_MD_TOPICSHASATT','T�pico com anexo(s)');
define('_MD_TOPICHASPOLL','T�pico com vota��o');
define('_MD_TOPICLOCKED','T�pico bloqueado');
define('_MD_LEGEND','Legenda');
define('_MD_NEXTPAGE','Pr�xima p�gina');
define('_MD_SORTEDBY','Ordenado por');
define('_MD_TOPICTITLE','T�tulo do t�pico');
define('_MD_NUMBERREPLIES','Respostas');
define('_MD_TOPICPOSTER','Autor do t�pico');
define('_MD_TOPICTIME','Data<br>Hora');
define('_MD_LASTPOSTTIME','Data da �ltima mensagem');
define('_MD_ASCENDING','Ordem ascendente');
define('_MD_DESCENDING','Ordem descendente');
define('_MD_FROMLASTHOURS','Das �ltimas %s horas');
define('_MD_FROMLASTDAYS','Dos �ltimos %s dias');
define('_MD_THELASTYEAR','Do ano passado');
define('_MD_BEGINNING','Desde o in�cio');
define('_MD_SEARCHTHISFORUM', 'Procurar neste f�rum');
define('_MD_TOPIC_SUBJECTC','Prefixo:');


define('_MD_RATINGS','Avalia��es');
define("_MD_CAN_ACCESS", "Voc� <b>pode</b> acessar o f�rum.<br />");
define("_MD_CANNOT_ACCESS", "Voc� <b>n�o pode</b> acessar o f�rum.<br />");
define("_MD_CAN_POST", "Voc� <b>pode</b> iniciar um novo t�pico.<br />");
define("_MD_CANNOT_POST", "Voc� <b>n�o pode</b> iniciar um novo t�pico.<br />");
define("_MD_CAN_VIEW", "Voc� <b>pode</b> exibir os t�picos.<br />");
define("_MD_CANNOT_VIEW", "Voc� <b>n�o pode</b> exibir os t�picos.<br />");
define("_MD_CAN_REPLY", "Voc� <b>pode</b> responder.<br>");
define("_MD_CANNOT_REPLY", "Voc� <b>n�o pode</b> responder.<br>");
define("_MD_CAN_EDIT", "Voc� <b>pode</b> editar.<br>");
define("_MD_CANNOT_EDIT", "Voc� <b>n�o pode</b> editar.<br>");
define("_MD_CAN_DELETE", "Voc� <b>pode</b> excluir mensagens.<br>");
define("_MD_CANNOT_DELETE", "Voc� <b>n�o pode</b> excluir mensagens.<br>");
define("_MD_CAN_ADDPOLL", "Voc� <b>pode</b> incluir vota��es.<br>");
define("_MD_CANNOT_ADDPOLL", "Voc� <b>n�o pode</b> incluir vota��es.<br>");
define("_MD_CAN_VOTE", "Voc� <b>pode</b> votar.<br>");
define("_MD_CANNOT_VOTE", "Voc� <b>n�o pode</b> votar.<br>");
define("_MD_CAN_ATTACH", "Voc� <b>pode</b> anexar arquivos.<br>");
define("_MD_CANNOT_ATTACH", "Voc� <b>n�o pode</b> anexar arquivos.<br>");
define("_MD_CAN_NOAPPROVE", "Voc� <b>pode</b> enviar mensagens sem aprova��o.<br>");
define("_MD_CANNOT_NOAPPROVE", "Voc� <b>n�o pode</b> enviar mensagens sem aprova��o.<br>");
define("_MD_IMTOPICS","T�picos importantes");
define("_MD_NOTIMTOPICS","T�picos do f�rum");
define('_MD_FORUMOPTION', 'Op��es');

define('_MD_VAUP','Ver todas as mensagens n�o respondidas');
define('_MD_VANP','Ver todos as novas mensagens');


define('_MD_UNREPLIED','T�picos sem resposta');
define('_MD_UNREAD','T�picos n�o lidos');
define('_MD_ALL','Todos os t�picos');
define('_MD_ALLPOSTS','Todas as mensagens');
define('_MD_VIEW','Exibir');

//viewtopic.php
define('_MD_AUTHOR','Autor');
define('_MD_LOCKTOPIC','Bloquear este t�pico');
define('_MD_UNLOCKTOPIC','Desbloquear este t�pico');
define('_MD_UNSTICKYTOPIC','Desfixar este t�pico');
define('_MD_STICKYTOPIC','Fixar este t�pico');
define('_MD_DIGESTTOPIC','Incluir no Informativo');
define('_MD_UNDIGESTTOPIC','Retirar do Informativo');
define('_MD_MERGETOPIC','Mesclar este t�pico');
define('_MD_MOVETOPIC','Mover este t�pico');
define('_MD_DELETETOPIC','Excluir este t�pico');
define('_MD_TOP','Topo');
define('_MD_BOTTOM','Final');
define('_MD_PREVTOPIC','T�pico anterior');
define('_MD_NEXTTOPIC','Pr�ximo t�pico');
define('_MD_GROUP','Grupo:');
define('_MD_QUICKREPLY','Resposta r�pida');
define('_MD_POSTREPLY','Responder');
define('_MD_PRINTTOPICS','Imprimir');
define('_MD_PRINT','Imprimir');
define('_MD_REPORT','Enviar ao Moderador');
define('_MD_PM','MP');
define('_MD_EMAIL','e-mail');
define('_MD_WWW','WWW');
define('_MD_AIM','AOL');
define('_MD_YIM','Yahoo!');
define('_MD_MSNM','MSN');
define('_MD_ICQ','ICQ');
define('_MD_PRINT_TOPIC_LINK', 'URL para esta discuss�o');
define('_MD_ADDTOLIST','Adicione � sua Lista de Contatos');
define('_MD_TOPICOPT', 'Op��es');
define('_MD_VIEWMODE', 'Visualiza��o');
define('_MD_NEWEST', 'Novos primeiro');
define('_MD_OLDEST', 'Antigos primeiro');

define('_MD_FORUMSEARCH','Procurar');

define('_MD_RATED','Avaliado:');
define('_MD_RATE','Avaliar t�pico');
define('_MD_RATEDESC','Avalie este t�pico');
define('_MD_RATING','Enviar');
define('_MD_RATE1','P�ssimo');
define('_MD_RATE2','Ruim');
define('_MD_RATE3','Regular');
define('_MD_RATE4','Bom');
define('_MD_RATE5','Excelente');

define('_MD_TOPICOPTION','Op��es');
define('_MD_KARMA_REQUIREMENT', 'Seu Karma atual � %s e o karma requerido � %s. <br /> Favor tentar mais tarde.');
define('_MD_REPLY_REQUIREMENT', 'Para exibir esta mensagem, voc� precisa enviar antes a sua resposta.');
define('_MD_TOPICOPTIONADMIN','Administra��o do t�pico');
define('_MD_POLLOPTIONADMIN','Administra��o de vota��es');

define('_MD_EDITPOLL','Editar esta vota��o');
define('_MD_DELETEPOLL','Excluir esta vota��o');
define('_MD_RESTARTPOLL','Reativar esta vota��o');
define('_MD_ADDPOLL','Incluir uma vota��o');

define('_MD_QUICKREPLY_EMPTY','Digite uma resposta r�pida aqui');

define('_MD_LEVEL','Level :');
define('_MD_HP','HP :');
define('_MD_MP','MP :');
define('_MD_EXP','EXP :');

define('_MD_BROWSING','Navegando neste T�pico:');
define('_MD_POSTTONEWS','Enviar este t�pico para Not�cias');

define('_MD_EXCEEDTHREADVIEW','Quantidade de mensagens excede o limite para vis�o expandida<br />Alterando para modo agrupado');


//forumform.inc
define('_MD_PRIVATE','Este � um f�rum <strong>privativo</b>.</b>Somente usu�rios com acesso especial podem acess�-lo.');
define('_MD_QUOTE','Citar');
define('_MD_VIEW_REQUIRE','Exibir requisitos');
define('_MD_REQUIRE_KARMA','Karma');
define('_MD_REQUIRE_REPLY','Resposta');
define('_MD_REQUIRE_NULL','Sem requisitos');

define("_MD_SELECT_FORMTYPE","Selecione o modelo de formul�rio");

define("_MD_FORM_COMPACT","Compacto");
define("_MD_FORM_DHTML","DHTML");
define("_MD_FORM_SPAW","Spaw Editor");
define("_MD_FORM_HTMLAREA","HTMLArea");
define("_MD_FORM_FCK","FCK Editor");
define("_MD_FORM_KOIVI","Koivi Editor");
define("_MD_FORM_TINYMCE","TinyMCE Editor");

// ERROR messages
define('_MD_ERRORFORUM','ERRO: F�rum n�o selecionado!');
define('_MD_ERRORPOST','ERRO: Mensagem n�o selecionada!');
define('_MD_NORIGHTTOVIEW','Voc� n�o tem permiss�o para exibir este f�rum.');
define('_MD_NORIGHTTOPOST','Voc� n�o tem permiss�o para publicar neste f�rum.');
define('_MD_NORIGHTTOEDIT','Voc� n�o tem permiss�o para editar neste f�rum.');
define('_MD_NORIGHTTOREPLY','Voc� n�o tem permiss�o para responder neste f�rum.');
define('_MD_NORIGHTTOACCESS','Voc� n�o tem permiss�o para acessar este f�rum.');
define('_MD_ERRORTOPIC','ERRO: T�pico n�o selecionado!');
define('_MD_ERRORCONNECT','ERRO: O f�rum que voc� selecionou n�o existe. Por favor, tente novamente mais tarde.');
define('_MD_ERROREXIST','ERRO: N�o � poss�vel conectar ao banco de dados.');
define('_MD_ERROROCCURED','Ocorreu um erro');
define('_MD_COULDNOTQUERY','N�o � poss�vel consultar o banco de dados do f�rum.');
define('_MD_FORUMNOEXIST','ERRO: O f�rum ou t�pico que voc� selecionou n�o existe. Por favor, tente novamente mais tarde.');
define('_MD_USERNOEXIST','Usu�rio n�o existe. Por favor, tente novamente mais tarde.');
define('_MD_COULDNOTREMOVE','Opera��o de exclus�o n�o realizada!');
define('_MD_COULDNOTREMOVETXT','Exclus�o dos textos das mensagens n�o realizada!');
define('_MD_TIMEISUP','Voc� alcan�ou o limite de tempo para editar sua mensagem.');
define('_MD_TIMEISUPDEL','Voc� alcan�ou o limite do tempo para excluir sua mensagem.');

//reply.php
define('_MD_ON','em'); //Posted on
define('_MD_USERWROTE','%s escreveu:'); // %s is username
define('_MD_RE','Re');

//post.php
define('_MD_EDITNOTALLOWED','Voc� n�o tem permiss�o para editar esta mensagem.');
define('_MD_EDITEDBY','Editado por');
define('_MD_ANONNOTALLOWED','Visitantes an�nimos n�o t�m autoriza��o para enviar mensagens.<br>Por favor, registre-se.');
define('_MD_THANKSSUBMIT','Obrigado pela sua participa��o!');
define('_MD_REPLYPOSTED','Foi enviada uma resposta para o seu t�pico.');
define('_MD_HELLO','Ol� %s,');
define('_MD_URRECEIVING','Voc� est� recebendo este e-mail porque uma t�pico que voc� criou no f�rum do site %s foi respondido.'); // %s is your site name
define('_MD_CLICKBELOW','Clique no link abaixo para exibir o t�pico:');
define('_MD_WAITFORAPPROVAL','Obrigado. Sua mensagem ser� analisada antes da publica��o.');
define('_MD_POSTING_LIMITED','D� um tempo e volte em %d segundos');

//forumform.inc
define('_MD_NAMEMAIL','Nome/e-mail:');
define('_MD_LOGOUT','Sair');
define('_MD_REGISTER','Registro');
define('_MD_SUBJECTC','Assunto:');
define('_MD_MESSAGEICON','�cone da mensagem:');
define('_MD_MESSAGEC','Mensagem:');
define('_MD_ALLOWEDHTML','HTML desativado:');
define('_MD_OPTIONS','Op��es:');
define('_MD_POSTANONLY','Enviar anonimamente');
define('_MD_DOSMILEY','Ativar emoticons');
define('_MD_DOXCODE','Ativar c�digos Xoops');
define('_MD_DOBR','Ativar quebra de linha (N�o marcar em modo HTML)');
define('_MD_DOHTML','Ativar HTML');
define('_MD_NEWPOSTNOTIFY', 'Avise-me sobre novas mensagens neste t�pico');
define('_MD_ATTACHSIG','Inserir assinatura');
define('_MD_POST','Escrever');
define('_MD_SUBMIT','Enviar');
define('_MD_CANCELPOST','Cancelar');
define('_MD_REMOVE','Excluir');
define('_MD_UPLOAD','Enviar');

// forumuserpost.php
define('_MD_ADD','Incluir');
define('_MD_REPLY','Responder');

// topicmanager.php
define('_MD_VIEWTHETOPIC','Exibir t�pico');
define('_MD_RETURNTOTHEFORUM','Voltar ao f�rum');
define('_MD_RETURNFORUMINDEX','Voltar ao �ndice do f�rum');
define('_MD_ERROR_BACK','Ocorreu um erro por favor volte e tente novamente.');
define('_MD_GOTONEWFORUM','Exibir t�pico atualizado.');

define('_MD_TOPICDELETE','O t�pico foi exclu�do.');
define('_MD_TOPICMERGE','Este t�pico foi mesclado');
define('_MD_TOPICMOVE','O t�pico foi movido.');
define('_MD_TOPICLOCK','O t�pico foi bloqueado.');
define('_MD_TOPICUNLOCK','O t�pico foi desbloqueado.');
define('_MD_TOPICSTICKY','O t�pico foi afixado.');
define('_MD_TOPICUNSTICKY','O t�pico n�o � mais fixo.');
define('_MD_TOPICDIGEST','T�pico inclu�do no Informativo');
define('_MD_TOPICUNDIGEST','O t�pico foi exclu�do do Informativo.');

define('_MD_DELETE','Excluir');
define('_MD_MOVE','Mover');
define('_MD_MERGE','Mesclar');
define('_MD_LOCK','Bloquear');
define('_MD_UNLOCK','Desbloquear');
define('_MD_STICKY','Fixar');
define('_MD_UNSTICKY','Desfixar');
define('_MD_DIGEST','Incluir no Informativo');
define('_MD_UNDIGEST','Retirar do Informativo');

define('_MD_DESC_DELETE','Clicando em EXCLUIR no final desta p�gina, o t�pico selecionado e todas as mensagens vinculadas ser�o <strong>permanentemente</strong> exclu�dos.');
define('_MD_DESC_MOVE','Clicando em MOVER no final desta p�gina, o t�pico selecionado e todas as mensagens vinculadas ser�o movidas para o f�rum selecionado.');
define('_MD_DESC_MERGE','Clicando em Mesclar no final desta p�gina, o t�pico selecionado e todas as mensagem vinculadas a ele ser�o combinadas com o t�pico que voc� selecionou. <br/> O ID do t�pico de destino tem que ser menor que o atual.</strong>. ');
define('_MD_DESC_LOCK','Clicando em BLOQUEAR no final desta p�gina, o t�pico selecionado ser� bloqueado. Se desejar, voc� poder� desbloque�-lo posteriormente.');
define('_MD_DESC_UNLOCK','Clicando em DESBLOQUEAR no final desta p�gina, o t�pico selecionado ser� desbloqueado. Se desejar, voc� poder� bloque�-lo posteriormente.');
define('_MD_DESC_STICKY','Clicando em FIXAR no final desta p�gina, o t�pico selecionado ser� fixado. Se desejar, voc� poder� desfix�-lo posteriormente.');
define('_MD_DESC_UNSTICKY','Clicando em DESFIXAR no final desta p�gina, o t�pico selecionado ser� desfixado. Se desejar, voc� poder� fix�-lo posteriormente.');
define('_MD_DESC_DIGEST','Clicando em INCLUIR NO RESUMO no final desta p�gina, o t�pico selecionado ser� inclu�do no resumo. Se desejar, voc� poder� retir�-lo posteriormente.');
define('_MD_DESC_UNDIGEST','Clicando em RETIRAR DO RESUMO no final desta p�gina, o t�pico selecionado ser� retirado do resumo. Se desejar, voc� poder� inclu�-lo posteriormente.');

define('_MD_MERGETOPICTO','Mesclar t�pico com:');
define('_MD_MOVETOPICTO','Mover o t�pico para:');
define('_MD_NOFORUMINDB','N�o h� nenhum f�rum no banco de dados');

// delete.php
define('_MD_DELNOTALLOWED','Voc� n�o tem permiss�o para excluir esta mensagem.');
define('_MD_AREUSUREDEL','Voc� tem certeza de que deseja excluir esta mensagem e todas as outras vinculadas a ela?');
define('_MD_POSTSDELETED','Mensagem selecionada e todas as vinculadas foram exclu�das.');
define('_MD_POSTDELETED','Mensagem selecionada exclu�da.');

// definitions moved from global.
define('_MD_THREAD','T�pico');
define('_MD_FROM','De');
define('_MD_JOINED','Cadastrado em');
define('_MD_ONLINE','Online');
define('_MD_OFFLINE','Offline');
define('_MD_FLAT', 'Expandir');


// online.php
define('_MD_USERS_ONLINE', 'Usu�rios Online:');
define('_MD_ANONYMOUS_USERS', 'usu�rios an�nimos');
define('_MD_REGISTERED_USERS', 'usu�rios cadastrados: ');
define('_MD_BROWSING_FORUM','usu�rios neste f�rum');
define('_MD_TOTAL_ONLINE','Total de %d usu�rios online.');
define('_MD_ADMINISTRATOR','Administrador');

define('_MD_NO_SUCH_FILE','Arquivo n�o existe!');
define('_MD_ERROR_UPATEATTACHMENT','Ocorreu um erro ao anexar o arquivo');

// ratethread.php
define("_MD_CANTVOTEOWN", "Voc� n�o pode votar no t�pico que voc� criou.<br />Todos os votos s�o revisados.");
define("_MD_VOTEONCE", "Por favor n�o vote no mesmo t�pico mais de uma vez.");
define("_MD_VOTEAPPRE", "Obrigado pela colabora��o!");
define("_MD_THANKYOU", "Obrigado por votar no %s"); // %s is your site name
define("_MD_VOTES","Votos");
define("_MD_NOVOTERATE","Voc� n�o avaliou este t�pico");


// polls.php
define("_MD_POLL_DBUPDATED","O Banco de dados foi atualizado com sucesso!");
define("_MD_POLL_POLLCONF","Configura��o das vota��es");
define("_MD_POLL_POLLSLIST", "Lista de vota��es");
define("_MD_POLL_AUTHOR", "Autor desta vota��o");
define("_MD_POLL_DISPLAYBLOCK", "Exibir no bloco?");
define("_MD_POLL_POLLQUESTION", "Pergunta da vota��o");
define("_MD_POLL_VOTERS", "Total de votantes");
define("_MD_POLL_VOTES", "Total de votos");
define("_MD_POLL_EXPIRATION", "Expira em");
define("_MD_POLL_EXPIRED", "Expirou");
define("_MD_POLL_VIEWLOG","Exibir log");
define("_MD_POLL_CREATNEWPOLL", "Incluir vota��o");
define("_MD_POLL_POLLDESC", "Descri��o da vota��o");
define("_MD_POLL_DISPLAYORDER", "Ordem de exibi��o");
define("_MD_POLL_ALLOWMULTI", "Permitir sele��o m�ltipla?");
define("_MD_POLL_NOTIFY", "Notificar o autor da vota��o quando expirar?");
define("_MD_POLL_POLLOPTIONS", "Op��es");
define("_MD_POLL_EDITPOLL", "Editar vota��o");
define("_MD_POLL_FORMAT", "Formato: yyyy-mm-dd hh:mm:ss");
define("_MD_POLL_CURRENTTIME", "Data e Hora atual: %s");
define("_MD_POLL_EXPIREDAT", "Expirou em %s");
define("_MD_POLL_RESTART", "Reativar esta vota��o");
define("_MD_POLL_ADDMORE", "Incluir mais op��es");
define("_MD_POLL_RUSUREDEL", "Voc� tem certeza que quer excluir esta vota��o e todo seu conte�do?");
define("_MD_POLL_RESTARTPOLL", "Reativar vota��o");
define("_MD_POLL_RESET", "Apagar todos os registros para esta vota��o?");
define("_MD_POLL_ADDPOLL","Incluir vota��o");
define("_MD_POLLMODULE_ERROR","M�dulo Enquetes n�o est� dispon�vel");

//report.php
define("_MD_REPORTED", "Obrigado por informar sobre esse t�pico/mensagem! Um moderador examir� seu relat�rio em breve.");
define("_MD_REPORT_ERROR", "Ocorreu um erro ao enviar seu relat�rio.");
define("_MD_REPORT_TEXT", "Mensagem:");

define("_MD_PDF","Criar PDF com esta mensagem");
define("_MD_PDF_PAGE","P�gina");

//print.php
define("_MD_COMEFROM","Fonte:");

//viewpost.php
define("_MD_VIEWALLPOSTS","Todas as mensagens");
define("_MD_VIEWTOPIC","T�pico");
define("_MD_VIEWFORUM","F�rum");

define("_MD_COMPACT","Compacto");

define("_MD_MENU_SELECT","Menu Caixa de Sele��o");
define("_MD_MENU_HOVER","Menu sens�vel ao mouse");
define("_MD_MENU_CLICK","Menu desativado por clique");

define("_MD_WELCOME_SUBJECT","%s acessou o f�rum");
define("_MD_WELCOME_MESSAGE","Ol�, %s � novo no f�rum.");

define("_MD_VIEWNEWPOSTS","Exibir novas mensagens");

define("_MD_INVALID_SUBMIT","Envio inv�lido. Voc� deve ter excedido o tempo da sess�o. Reenvie ou fa�a uma c�pia da sua mensagem, entre novamente no site e tente novamente.");

define("_MD_ACCOUNT","Conta");
define("_MD_NAME","Nome");
define("_MD_PASSWORD","Senha");
define("_MD_LOGIN","Entrar");

define("_MD_TRANSFER","Transferir");
define("_MD_TRANSFER_DESC","Transferir mensagem para outros aplicativos");
define("_MD_TRANSFER_DONE","A a��o foi realizada com sucesso: %s");

define("_MD_APPROVE","Aprovar");
define("_MD_RESTORE","Restaurar");
define("_MD_SPLIT_ONE","Dividir");
define("_MD_SPLIT_TREE","Separar para as crian�as");
define("_MD_SPLIT_ALL","Dividir tudo");

define("_MD_TYPE_ADMIN","Admin");
define("_MD_TYPE_VIEW","Visualizar");
define("_MD_TYPE_PENDING","Pendente");
define("_MD_TYPE_DELETED","Apagados");
define("_MD_TYPE_SUSPEND","Suspenso");

define("_MD_DBUPDATED", "Banco de dados atualizado com sucesso!");

define("_MD_SUSPEND_SUBJECT", "Usu�rio %s foi suspenso por %d dias");
define("_MD_SUSPEND_TEXT", "Usu�rio %s foi suspenso por %d dias devido a:<br />[quote]%s[/quote]<br /><br /> A suspens�o � v�lid� at� %s");
define("_MD_SUSPEND_UID", "ID do usu�rio");
define("_MD_SUSPEND_IP", "Partes do IP [completo ou partes]");
define("_MD_SUSPEND_DURATION", "Dura��o da suspens�o [Dias]");
define("_MD_SUSPEND_DESC", "Motivo da suspens�o");
define("_MD_SUSPEND_LIST", "Lista dos suspensos");
define("_MD_SUSPEND_START", "Come�ar");
define("_MD_SUSPEND_EXPIRE", "Final");
define("_MD_SUSPEND_SCOPE", "Espa�o");
define("_MD_SUSPEND_MANAGEMENT", "Ger�ncia da atividade de Modera��o");
define("_MD_SUSPEND_NOACCESS", "Seu ID ou IP foi suspenso");

// !!IMPORTANT!! insert '\' before any char among reserved chars: "a", "A","B","c","d","D","F","g","G","h","H","i","I","j","l","L","m","M","n","O","r","s","S","t","T","U","w","W","Y","y","z","Z"	
// insert double '\' before 't', 'r', 'n'
define("_MD_TODAY", "\H\o\j\e G:i:s");
define("_MD_YESTERDAY", "\O\\n\\t\e\m G:i:s");
define("_MD_MONTHDAY", "n/j G:i:s");
define("_MD_YEARMONTHDAY", "Y/n/j G:i");

// For user info
// If you have customized userbar, define here.
require_once(XOOPS_ROOT_PATH."/modules/newbb/class/user.php");
class User_language extends User
{
    function User_language(&$user)
    {
	    $this->User($user);
    }

    function &getUserbar()
    {
	    global $xoopsModuleConfig, $xoopsUser, $isadmin;
    	if (empty($xoopsModuleConfig['userbar_enabled'])) return null;
    	$user =& $this->user;
    	$userbar = array();
        $userbar[] = array("link"=>XOOPS_URL . "/userinfo.php?uid=" . $user->getVar("uid"), "name" =>_PROFILE);
		if (is_object($xoopsUser))
        $userbar[]= array("link"=>"javascript:void openWithSelfMain('" . XOOPS_URL . "/pmlite.php?send2=1&amp;to_userid=" . $user->getVar("uid") . "', 'pmlite', 450, 380);", "name"=>_MD_PM);
        if($user->getVar('user_viewemail') || $isadmin)
        $userbar[]= array("link"=>"javascript:void window.open('mailto:" . $user->getVar('email') . "', 'new');", "name"=>_MD_EMAIL);
        if($user->getVar('url'))
        $userbar[]= array("link"=>"javascript:void window.open('" . $user->getVar('url') . "', 'new');", "name"=>_MD_WWW);
        if($user->getVar('user_icq'))
        $userbar[]= array("link"=>"javascript:void window.open('http://wwp.icq.com/scripts/search.dll?to=" . $user->getVar('user_icq')."', 'new');", "name" => _MD_ICQ);
        if($user->getVar('user_aim'))
        $userbar[]= array("link"=>"javascript:void window.open('aim:goim?screenname=" . $user->getVar('user_aim') . "&amp;message=Hi+" . $user->getVar('user_aim') . "+Are+you+there?" . "', 'new');", "name"=>_MD_AIM);
        if($user->getVar('user_yim'))
        $userbar[]= array("link"=>"javascript:void window.open('http://edit.yahoo.com/config/send_webmesg?.target=" . $user->getVar('user_yim') . "&.src=pg" . "', 'new');", "name"=> _MD_YIM);
        if($user->getVar('user_msnm'))
        $userbar[]= array("link"=>"javascript:void window.open('http://members.msn.com?mem=" . $user->getVar('user_msnm') . "', 'new');", "name" => _MD_MSNM);
		return $userbar;
    }
}
define('_PDF_SUBJECT','Subject'); 
define('_PDF_TOPIC','Topic'); 
define('_PDF_DATE','Date'); 

//define("_MD_DIGESTS", "Resumo"); //Mantido at� saber se n�o iremos aproveitar...GibaPhp
//define('_MD_USER_LASTPOST', '�ltimo mensagem: %s');
//define('_MD_USER_NOLASTPOST', 'Voc� n�o tem mensagem ainda');
//define('_MD_USER_TOPICS', 'Seus T�picos: ');
//define('_MD_USER_POSTS', 'Mensagens: ');
//define('_MD_USER_DIGESTS', 'Resumo: ');

//define('_MD_VIEW_NEWPOSTS', 'Visualizar Novos Posts');


//define('_MD_TODAYTOPICSC','T�picos Hoje: ');
//define('_MD_TODAYPOSTSC','Mensagens Hoje: ');
//define('_MD_TOTALDIGESTSC','Resumo Total: ');

//define("_MD_CAN_TYPE", "Voc� <strong>pode </strong>ver os t�picos.<br />");
//define("_MD_CANNOT_TYPE", "Voc� <strong>n�o pode</strong> ver os t�picos.<br />");
//define("_MD_CAN_HTML", "Voc� <strong>pode</strong> usar c�digo HTML.<br />");
//define("_MD_CANNOT_HTML", "Voc� <strong>n�o pode</strong> usar c�digo HTML.<br />");
//define("_MD_CAN_UPLOAD", "Voc� <strong>pode</strong> upar(subir) de arquivos.<br />");
//define("_MD_CANNOT_UPLOAD", "Voc� <strong>n�o pode</strong> upar(subir) de arquivos.<br />");
//define("_MD_CAN_SIGNATURE", "Voc� <strong>pode</strong> usar assinatura.<br />");
//define("_MD_CANNOT_SIGNATURE", "Voc� <strong>n�o pode</strong> usar assinatura.<br />");

//define("_MD_NEWBB_TYPE", "Tipo de T�pico");
//define("_MD_NEWBB_TAG", "Tag");

?>
