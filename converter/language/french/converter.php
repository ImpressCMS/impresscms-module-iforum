<?php
define('_NEWBB_CONV_CHARSET','ISO-8859-1');
define('_NEWBB_CONV_TITLE','CONERTISSEUR NEWBB 2.0 XOOPS');
define('_NEWBB_CONV_INSTRUCTIONS','Instructions');
define('_NEWBB_CONV_CONFIG','Configuration');
define('_NEWBB_CONV_GEN_SQL','G�n�ration SQL');
define('_NEWBB_CONV_EXEC_SQL','Ex�cution SQL');

define('_NEWBB_CONV_PROCEED','En cours');

define('_NEWBB_CONV_XOOPS_INDEX','Index XOOPS');
define('_NEWBB_CONV_XOOPS_ADMIN','Console d\'administration XOOPS');
define('_NEWBB_CONV_NEWBB_INDEX','Index NewBB 2.0');

define('_NEWBB_CONV_CFG_TITLE','Configuration de convertion');
define('_NEWBB_CONV_CFG_FORUM_TYPE','Forum source');
define('_NEWBB_CONV_CFG_DB_HOST','Host de BDD source');
define('_NEWBB_CONV_CFG_DB_USER','Utilisateur de BDD source');
define('_NEWBB_CONV_CFG_DB_PASS','Mot de passe de BDD source');
define('_NEWBB_CONV_CFG_DB_NAME','Nom de BDD source');
define('_NEWBB_CONV_CFG_DB_PREFIX','Pr�fixe de BDD source');
define('_NEWBB_CONV_CFG_PM','Import des messages priv�s');
define('_NEWBB_CONV_CFG_PM_SYSTEM','Syst�me de messages priv�s');
define('_NEWBB_CONV_CFG_PM_XOOPS','MP XOOPS');

define('_NEWBB_CONV_ERR_NO_CONVERTER','<center><font color=#ff0000><strong>Erreur fatale : Ne peut trouver le convertisseur.</strong></font></center>');
define('_NEWBB_CONV_ERR_NOT_EMPTY','<center><font color=#ff0000><strong>Erreur fatale : NewBB 2.0 n\'est pas vide.</strong></font></center>');
define('_NEWBB_CONV_ERR_NOT_INSTALLED','<center><font color=#ff0000><strong>Erreur fatale : NewBB 2.0 n\'est pas install�.</strong></font></center>');
define('_NEWBB_CONV_ERR_SQL_WRITE','<center><font color=#ff0000><strong>Erreur fatale : Ne peut �crire dans ce r�pertoire. Veuillez CHMOD � 777 le r�pertoire du convertisseur.</strong></font></center>');
define('_NEWBB_CONV_SQL_EXEC','<b>%s/%s SQL requ�tes �x�cut�es avec succ�s</b>');
define('_NEWBB_CONV_INSTRUCTIONS_DESC','

<font size=+1><b>Instructions de convertion</b></font>
<br /><br />
<font size=-1>
Ce script de convertion tentera de r�cup�rer les donn�es des autres forum php/mysql pour un environnement XOOPS 2.x / Newbb 2.0.<br /><br />
Les forums actuellement support�s sont :</font><br /><br />
<center><strong>
<li>phpBB 2.0.X</li>
<li>Invision Board 1.3.1</li>
</strong></center><br /><br />
<font size=-1 color=#ff0000><strong>Avant de proc�der � la convertion, le module NewBB 2.0 doit �tre install� et vide i.e. aucune cat�gories, aucun forum, aucun post... rien!</strong></font><br/>
<br /><br />
<b><u>How It Works:</u></b><br /><font size=-1>Ce convertisseur op�re en trois �tapes:<br /><br />
<strong>Step 1:</strong> Propage le type et la connexion des param�tres de la base de donn�es du forum externe.<br />
<strong>Step 2:</strong> G�n�re un fichier  SQL des donn�es du forum externe pr�t � �tre converti dans un format XOOPS 2.x .<br />
<strong>Step 3:</strong> Ex�cute les requ�tes SQL � partir du fichier g�n�r�, convertissant les donn�es.<br />
</font><br /><br />
<b><u>User Accounts:</u></b><br /><font size=-1>Ce Script de convertion peut �tre coupl� avec des utilisateurs existant dans un environnement XOOPS 2.x.
Tous les comptes du forum externe seront ajout� de mani�re incr�mentale dans XOOPS 2.x remappant tous les sujets d\'utilisateur, posts, messages priv�s, etc. en utilisant le nouveau n� d\'utilisateur.
Si un compte est trouv� dans le forum externe avec le m�me nom que dans XOOPS 2.x, tous les sujets de forums, posts etc. seront mapp� avec ce compte utilisateur.</font>
<br /><br /><center>
<font color=#ff0000 size=+1>RAPPELEZ VOUS DE FAIRE UNE SAUVEGARDE AVANT DE REALISER LA CONVERTION!!</font>
</center><br /><br />');

define('_NEWBB_CONV_ENDINFO','
<font size=+1><b>Post-Configuration de l\'Import</b></font>
<br /><br />
Vous devez aller dans le panneau de contr�le d\'administration XOOPS afin de r�aliser les taches suivantes :
<li>1. ajout des mod�rateurs de forums</li>
<li>2. param�tres des permissions de forums</li>');

define('_NEWBB_CONV_IPBEND','<li>3. copiez tous les attachements de (ipb)\uploads vers (xoops)\uploads\attachments</li>');


//ipb
define('IPB_TITLE','G�n�ration SQL pour IPB -> XOOPS 2.x / NewBB 2.0');
define('IPB_DBCONNECT','Connexion � la base IPB...    ');
define('IPB_ERR_DBSEL','Erreur fatale : ECHEC DE SELECTION DE BDD');
define('IPB_ERR_DBCONN','Erreur fatal : ECHEC DE CONNEXION A LA BDD');

define('IPB_USERS','Utilisateurs');
define('IPB_USER','Utilisateur');
define('IPB_CATS','Cat�gories');
define('IPB_FORUMS','Forums');
define('IPB_POLLS','Sondages');
define('IPB_PMS','Messages priv�s');
define('IPB_TOPICS','Sujets');
define('IPB_POSTS','Contributions');
define('IPB_NOTIFY','Notifications de sujets');
define('IPB_IMPORTING','Import %s');
define('IPB_IMPORTED','%d %s import�');

//phpbb
define('PHPBB_TITLE','G�n�ration SQL pour phpBB2 -> XOOPS 2.x / NewBB 2.0');
define('PHPBB_DBCONNECT','Connexion � la base phpBB2...    ');
define('PHPBB_ERR_DBSEL','Erreur fatale : ECHEC DE SELECTION DE BDD');
define('PHPBB_ERR_DBCONN','Erreur fatale : ECHEC DE CONNEXION DE BDD');

define('PHPBB_USERS','Utilisateurs');
define('PHPBB_USER','Utilisateur');
define('PHPBB_CATS','Cat�gories');
define('PHPBB_FORUMS','Forums');
define('PHPBB_POLLS','Sondages');
define('PHPBB_POLL_OPTS','Options de sondage');
define('PHPBB_PMS','Messages priv�s');
define('PHPBB_TOPICS','Sujets');
define('PHPBB_POSTS','Contributions');
define('PHPBB_VOTES','Votes de sondage');
define('PHPBB_NOTIFY','Notifications de sujets');

define('PHPBB_IMPORTING','Import %s');
define('PHPBB_IMPORTED','%d %s import�');
?>