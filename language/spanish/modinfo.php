<?php //* Spanish Translation by JulioNC  *//
// $Id: modinfo.php,v 1.3 2005/10/19 17:20:33 phppp Exp $
// Thanks Tom (http://www.wf-projects.com), for correcting the Engligh language package

// Module Info
//$constpref = '_MI_' . strtoupper( basename( dirname(  dirname(  dirname( __FILE__ ) ) ) ) ) ;
$constpref = '_MI_NEWBB';

// The name of this module
define($constpref."_NAME","CBB");

// A brief description of this module
define($constpref."_DESC","M�dulo de foros para xoops");

// Names of blocks for this module (Not all module has blocks)
define($constpref."_BLOCK_TOPIC_POST","Temas recientemente contestados");//Recent Replied Topics
define($constpref."_BLOCK_TOPIC","Temas recientes");//Recent Topics
define($constpref."_BLOCK_POST","Mensajes recientes");//Recent Posts
define($constpref."_BLOCK_AUTHOR","Autor");
/*
define($constpref."_BNAME2","Temas m�s vistos");
define($constpref."_BNAME3","Temas m�s activos");
define($constpref."_BNAME4","Temas recientemente agregados a la selecci�n");
define($constpref."_BNAME5","Temas recientemente pegados");
define($constpref."_BNAME6","Temas nuevos");
define($constpref."_BNAME7","Usuarios con m�s temas");
define($constpref."_BNAME8","Usuarios con m�s mensajes");
define($constpref."_BNAME9","Usuarios con m�s temas seleccionados");
define($constpref."_BNAME10","Usuarios con m�s temas pegados");
define($constpref."_BNAME11","Mensaje reciente con texto");
*/

// Names of admin menu items
define($constpref."_ADMENU_INDEX","Inicio");
define($constpref."_ADMENU_CATEGORY","Categor�as");
define($constpref."_ADMENU_FORUM","Foros");
define($constpref."_ADMENU_PERMISSION","Permisos");
define($constpref."_ADMENU_BLOCK","Bloques");
define($constpref."_ADMENU_ORDER","Reordenar");
define($constpref."_ADMENU_SYNC","Sincronizar");
define($constpref."_ADMENU_PRUNE","Purgar");
define($constpref."_ADMENU_REPORT","Reportes");
define($constpref."_ADMENU_DIGEST","Digest");
define($constpref."_ADMENU_VOTE","Votos");



//config options

define("_MI_DO_DEBUG","Activar modo depuraci�n");
define("_MI_DO_DEBUG_DESC","Permite mostrar un mensaje de error para depurar fallos en los foros");

define("_MI_IMG_SET","Conjunto de im�genes");
define("_MI_IMG_SET_DESC","Seleccione el conjunto de im�genes que desea usar");

define("_MI_THEMESET", "Juego de Plantillas");//Theme set
define("_MI_THEMESET_DESC", "Module-wide, seleccionar '"._NONE."' el cual se utilizar� como tema del sitio");// :?

define("_MI_DIR_ATTACHMENT","Directorio para archivos adjuntos");
define("_MI_DIR_ATTACHMENT_DESC","El path final debe ser 'ICMS_ROOT_PATH/nombre del directorio'. Sin barras diagonales '/' antes y despu�s. <br /> El path para las miniaturas deber� ser 'nombre del directorio/thumbs', tambi�n sin '/' al principio y final.");
define("_MI_PATH_MAGICK","Path de ImageMagick");
define("_MI_PATH_MAGICK_DESC","Por lo general es '/usr/bin/X11'. D�jelo en blanco si no tiene ImageMagicK instalado.");

define("_MI_SUBFORUM_DISPLAY","Modo de vista de los subforos");
define("_MI_SUBFORUM_DISPLAY_DESC","Ajusta el modo de vista para los subforos en la p�gina �ndice de los foros.");
define("_MI_SUBFORUM_EXPAND","Expandidos");
define("_MI_SUBFORUM_COLLAPSE","Contraidos");
define("_MI_SUBFORUM_HIDDEN","Ocultos");

define("_MI_POST_EXCERPT","Longitud del mensaje emergente");
define("_MI_POST_EXCERPT_DESC","Longitud del mensaje emergente al poner el puntero del rat�n encima de un env�o. 0 para desactivar el mensaje emergente.");

define("_MI_PATH_NETPBM","Ruta de Netpbm");
define("_MI_PATH_NETPBM_DESC","Usualmente es '/usr/bin'. Leave it BLANK if you do not have Netpbm installed or choice AUTO for autodetecting.");

define("_MI_IMAGELIB","Seleccione la librer�a de im�genes a usar");
define("_MI_IMAGELIB_DESC","Selecciona que librer�a de im�genes se usar� para la creaci�n de miniaturas. Seleccione AUTO para autodetectarla.");

define("_MI_MAX_IMG_WIDTH","Anchura m�xima de la imagen");
define("_MI_MAX_IMG_WIDTH_DESC", "Ajusta el <b>Ancho</b> m�ximo de la imagen antes de usar una miniatura. <br >Ponga 0 si no desea usar miniaturas.");

define("_MI_MAX_IMAGE_WIDTH","Anchura m�xima de las miniaturas");
define("_MI_MAX_IMAGE_WIDTH_DESC", "Ajusta el ancho m�ximo permitido de las im�genes al crear una miniatura. <br >Si la imagen subida es m�s ancha que el valor ajustado no se crear� una miniatura para esta imagen.");

define("_MI_MAX_IMAGE_HEIGHT","Altura m�xima de las miniaturas");
define("_MI_MAX_IMAGE_HEIGHT_DESC", "Ajusta el alto m�ximo permitido de las im�genes al crear una miniatura. <br >Si la imagen subida es m�s alta que el valor ajustado no se crear� una miniatura para esta imagen.");

define("_MI_SHOW_DIS","Mostrar advertencia legal");
define("_MI_DISCLAIMER","Advertencia legal");
define("_MI_DISCLAIMER_DESC","Escriba el texto de su advertencia legal o descargo de responsabilidades, solo se ver� si ha sido activado en el campo anterior.");
define("_MI_DISCLAIMER_TEXT", "Los foros contienen una gran cantidad de temas y mensajes con una ingente cantidad de informaci�n �til. <br /><br />A fin de mantener al m�nimo la cantidad de mensajes y temas duplicados, le recomendamos que haga uso de la b�squeda del foro antes de hacer una consulta.");
define("_MI_NONE","No mostrar");
define("_MI_POST","Al enviar mensaje");
define("_MI_REPLY","Al responder mensaje");
define("_MI_OP_BOTH","En ambos casos");
define("_MI_WOL_ENABLE","Activar bloque �Qui�n est� en l�nea?");
define("_MI_WOL_ENABLE_DESC","Si el bloque est� activo podr� verlo al final del �ndice de foros y p�ginas de los foros.");
//define("_MI_WOL_ADMIN_COL","Color para resaltar a los administradores");
//define("_MI_WOL_ADMIN_COL_DESC","Es el color con el que se ver�n resaltados los nombres de los administradores en el bloque �Qui�n est� en l�nea?");
//define("_MI_WOL_MOD_COL","Color para resaltar a los moderadores");
//define("_MI_WOL_MOD_COL_DESC","Es el color con el que se ver�n resaltados los nombres de los moderadores en el bloque �Qui�n est� en l�nea?");
//define("_MI_LEVELS_ENABLE", "Activar bloque de niveles HP/MP/EXP");
//define("_MI_LEVELS_ENABLE_DESC", "<b>HP</b>  Determina su porcentaje de mensajes por d�a.<br><b>MP</b>  Determina su porcentaje de mensajes enviados desde su registro en la Web.<br><b>EXP</b> Determina su nivel de participaci�n, es incrementado cada vez que env�a un mensaje, cuando alcance el 100%, ganar� un nivel y la barra EXP volver� a 0.");
define("_MI_NULL", "Deshabilitado");
define("_MI_TEXT", "Modo texto");
define("_MI_GRAPHIC", "Modo gr�fico");
define("_MI_USERLEVEL", "Modo de vista del bloque de niveles HP/MP/EXP");
define("_MI_USERLEVEL_DESC", "<strong>HP</strong>  Es determinado por el porcentaje de mensajes diarios.<br /><strong>MP</strong>  Es determinado  por el n�mero de mensajes desde la fecha de registro.<br /><strong>EXP</strong> Es incrementado cada vez que un mensaje es enviado, cuando el 100% es alcanzado, se gana un nivel y el EXP empieza nuevamente desde 0.");
define("_MI_RSS_ENABLE","Activar RSS");
define("_MI_RSS_ENABLE_DESC","Activa el RSS, ajuste el n�mero m�ximo de mensajes y longitud de la descripci�n a continuaci�n.");
define("_MI_RSS_MAX_ITEMS", "N� m�ximo de mensajes");
define("_MI_RSS_MAX_DESCRIPTION", "Longitud Max. de la descripci�n");
define("_MI_RSS_UTF8", "Codificar el RSS con UTF-8");
define("_MI_RSS_UTF8_DESCRIPTION", "Si se selecciona, 'UTF-8' ser� usado para codificar el RSS, de lo contrario, '"._CHARSET."' ser� el utilizado.");
define("_MI_RSS_CACHETIME", "Refresco de cache del RSS");
define("_MI_RSS_CACHETIME_DESCRIPTION", "Tiempo de refresco de la cache del RSS, en minutos.");

define("_MI_MEDIA_ENABLE","Activar capacidad Multi Media");
define("_MI_MEDIA_ENABLE_DESC","Permite mostrar las im�genes adjuntas directamente en el mensaje.");
define("_MI_USERBAR_ENABLE","Activar barra de usuario");
define("_MI_USERBAR_ENABLE_DESC","Muestra la barra de usuario: Perfil, PM, ICQ, MSN, etc...<br>Al pasar el mouse sobre el nombre del usuario se abre autom�ticamente un popup mostrando estos detalles.");

define("_MI_GROUPBAR_ENABLE","Activar barra de grupos");
define("_MI_GROUPBAR_ENABLE_DESC","Muestra los grupos a los cuales pertenece el usuario.");

define("_MI_RATING_ENABLE","Activar funci�n de valoraci�n");
define("_MI_RATING_ENABLE_DESC","Permite votar por los mensajes.");

define("_MI_VIEWMODE","Modo de vista de los hilos");
define("_MI_VIEWMODE_DESC","Para sobreescribir los ajustes generales del modo de vista seleccione Vista Plana, seleccione Vista Arbol o Nada para no sobre escribirlos.");
define("_MI_COMPACT","Compacto");

define("_MI_MENUMODE","Modo por defecto del men�");
define("_MI_MENUMODE_DESC","'SELECT' - Opciones de selecci�n<br />'HOVER' - Funciona lento con IE<br />'CLICK' - Requiere JAVASCRIPT");

define("_MI_REPORTMOD_ENABLE","Activar reporte de mensajes al moderador");
define("_MI_REPORTMOD_ENABLE_DESC","Los usuarios pueden reportar un mensaje al moderador si lo consideran ofensivo, fuera de tono o simplemente fuera del t�pico.");
define("_MI_SHOW_JUMPBOX", "Activar men� de navegaci�n");
define("_MI_JUMPBOXDESC", "Permite si est� activo, un men� desplegable para navegar entre los diferentes foros.");

define("_MI_SHOW_PERMISSIONTABLE", "Mostrar panel de permisos");
define("_MI_SHOW_PERMISSIONTABLE_DESC", "Si es activado los usuarios ver�n un panel con un resumen de sus permisos en el foro.");

define("_MI_EMAIL_DIGEST", "Enviar por e-mail selecci�n de mensajes");
define("_MI_EMAIL_DIGEST_DESC", "Ajusta el lapso de tiempo con el que se enviar�n selecciones de los hilos m�s activos a los usuarios.");
define($constpref."_EMAIL_NONE", "No enviar");
define($constpref."_EMAIL_DAILY", "Diariamente");
define($constpref."_EMAIL_WEEKLY", "Semanalmente");

define("_MI_SHOW_IP", "Mostrar IP del usuario");
define("_MI_SHOW_IP_DESC", "Permite mostrar la IP del usuario que envi� el mensaje a los moderadores y administradores del sitio.");

define("_MI_ENABLE_KARMA", "Activar requisitos de Karma");
define("_MI_ENABLE_KARMA_DESC", "Permite al usuario seleccionar el requisito de Karma para que puedan ver sus mensajes.<br>El Karma es obtenido de acuerdo a la participaci�n en los foros, a m�s participaci�n, m�s Karma.");

define("_MI_KARMA_OPTIONS", "Opciones de Karma para los mensajes");
define("_MI_KARMA_OPTIONS_DESC", "Use ',' como delimitador entre varias opciones, en otras palabras, separados por comas.");

define("_MI_SINCE_OPTIONS", "Opciones del campo 'Desde' para las 'vistas' y las 'b�squedas'");
define("_MI_SINCE_OPTIONS_DESC", "Use un valor positivo para los d�as y uno negativo para las horas. Si usa opciones m�ltiples, sep�relas por comas ','.");

define("_MI_SINCE_DEFAULT", "Valor por defecto para el campo 'Desde'");
define("_MI_SINCE_DEFAULT_DESC", "Ajusta el valor por defecto para este campo si no es especificado por los usuarios.");

define("_MI_MODERATOR_HTML", "Permitir etiquetas HTML en el asunto");
define("_MI_MODERATOR_HTML_DESC", "Esta opci�n permite a los MODERADORES el uso de etiquetas HTML en el ASUNTO del mensaje.");

define("_MI_USER_ANONYMOUS", "Permitir a los usuarios hacer env�os an�nimos");
define("_MI_USER_ANONYMOUS_DESC", "Le permite hacer env�os an�nimos a los usuarios registrados o con permiso para enviar mensajes.");

define("_MI_ANONYMOUS_PRE", "Nombre para los usuarios an�nimos");
define("_MI_ANONYMOUS_PRE_DESC", "Indique el nombre que quiere darle a los usuarios an�nimos o no registrados.");

define("_MI_REQUIRE_REPLY", "Permitir requisito de participaci�n");
define("_MI_REQUIRE_REPLY_DESC", "Si es activado el usuario que env�a un mensaje podr� requerir para poder leerlo un m�nimo de participaci�n en el foro, es decir, que los lectores del mensaje sean usuarios que ya han enviado respuestas en el foro.");

define("_MI_EDIT_TIMELIMIT", "L�mite de tiempo para editar un mensaje");
define("_MI_EDIT_TIMELIMIT_DESC", "Ajusta el l�mite de tiempo que tiene el autor para editar sus mensajes. En minutos");

define("_MI_DELETE_TIMELIMIT", "L�mite de tiempo para eliminar un mensaje");
define("_MI_DELETE_TIMELIMIT_DESC", "Ajusta el l�mite de tiempo que tiene el autor para eliminar sus mensajes. En minutos");

define("_MI_POST_TIMELIMIT", "L�mite de tiempo para env�os consecutivos");
define("_MI_POST_TIMELIMIT_DESC", "Ajusta el l�mite de tiempo que debe transcurrir entre dos env�os consecutivos. En segundos, escriba 0 para configurarlo sin l�mite de tiempo.");

define("_MI_RECORDEDIT_TIMELIMIT", "L�mite de tiempo para guardar la informaci�n de edici�n");
define("_MI_RECORDEDIT_TIMELIMIT_DESC", "Ajusta el l�mite de tiempo que debe transcurrir para que se guarde la informaci�n de que un mensaje ha sido editado. En segundos");

define("_MI_SUBJECT_PREFIX", "Agregar un prefijo al asunto del mensaje");
define("_MI_SUBJECT_PREFIX_DESC", "Permite agregar un prefijo al asunto del mensaje p.ej: [Solucionado]. Use comas ',' como delimitador entre los diversos prefijos. Deje solo NONE para no incluir ning�n prefijo.");
define("_MI_SUBJECT_PREFIX_DEFAULT", '<font color="#00CC00">[solucionado]</font>,<font color="#00CC00">[arreglado]</font>,<font color="#FF0000">[petici�n]</font>,<font color="#FF0000">[reportar error]</font>,<font color="#FF0000">[pendiente]</font>');

define("_MI_SUBJECT_PREFIX_LEVEL", "Grupos que pueden usar prefijos");
define("_MI_SUBJECT_PREFIX_LEVEL_DESC", "Seleccione los grupos autorizados a usar prefijos en los asuntos.");
define("_MI_SPL_DISABLE", 'Ninguno');
define("_MI_SPL_ANYONE", 'Todos');
define("_MI_SPL_MEMBER", 'Usuarios registrados');
define("_MI_SPL_MODERATOR", 'Moderadores');
define("_MI_SPL_ADMIN", 'Administradores');

define("_MI_SHOW_REALNAME", "Mostrar nombre real");
define("_MI_SHOW_REALNAME_DESC", "Reemplaza el nick del usuario por su nombre real.");

define("_MI_CACHE_ENABLE", "Activar cach�");
define("_MI_CACHE_ENABLE_DESC", "Guarda algunos resultados intermedios de la sesi�n para minimizar las peticiones a la base de datos.");

define("_MI_QUICKREPLY_ENABLE", "Activar respuesta r�pida");
define("_MI_QUICKREPLY_ENABLE_DESC", "Activar� un formulario de respuesta r�pida en el hilo mediante un bot�n.");

define("_MI_POSTSPERPAGE","Mensajes por p�gina");
define("_MI_POSTSPERPAGE_DESC","Indica el n�mero m�ximo de mensajes por p�gina que ser�n mostrados.");

define("_MI_POSTSFORTHREAD","N�mero m�ximo de mensajes por tema para la vista en modo arbol");
define("_MI_POSTSFORTHREAD_DESC","El modo de vista plana ser� usado si el n�mero de mensajes excede el la cantidad ajustada");

define("_MI_TOPICSPERPAGE","Temas por p�gina");
define("_MI_TOPICSPERPAGE_DESC","Indica el n�mero m�ximo de temas por p�gina que ser�n mostrados.");

define("_MI_IMG_TYPE","Formato de las im�genes");
define("_MI_IMG_TYPE_DESC","Selecciona formato de las im�genes que ser�n mostradas en los foros.<br />- png: Seleccione este formato si su servidor es veloz;<br />- gif: Seleccione este formato si su servidor es normal;<br />- auto: Mostrar� el formato gif para IE y el formato png para otros navegadores.");

define("_MI_PNGFORIE_ENABLE","Activar hack del formato PNG");
define("_MI_PNGFORIE_ENABLE_DESC","Activ�ndolo permitir� los atributos de transparencia del formato PNG para el navegador IE.");

define("_MI_FORM_OPTIONS","Opciones del panel de env�os");
define("_MI_FORM_OPTIONS_DESC","Opciones que los usuarios podr�n elegir para el panel de env�os cuando env�en, editen o respondan mensajes.");
define("_MI_FORM_COMPACT","Compacto");
define("_MI_FORM_DHTML","DHTML");
define("_MI_FORM_SPAW","Editor Spaw");
define("_MI_FORM_HTMLAREA","Editor HtmlArea");
define("_MI_FORM_FCK","Editor FCK");
define("_MI_FORM_KOIVI","Editor Koivi");
define("_MI_FORM_TINYMCE","Editor TinyMCE");

define("_MI_MAGICK","ImageMagick");
define("_MI_NETPBM","Netpbm");
define("_MI_GD1","Librer�a GD1");
define("_MI_GD2","Librer�a GD2");
define("_MI_AUTO","AUTO");

define("_MI_WELCOMEFORUM","Foro de bienvenida a los usuarios");
define("_MI_WELCOMEFORUM_DESC","Un mensaje con el perfil del usuario ser� publicado la primera vez que este acceda a los foros");

define("_MI_PERMCHECK_ONDISPLAY","Comprobar permisos");
define("_MI_PERMCHECK_ONDISPLAY_DESC","Compruebe los permisos para corregir la p�gina");

define("_MI_USERMODERATE","Permitir la moderaci�n del usuario");
define("_MI_USERMODERATE_DESC","");


// RMV-NOTIFY
// Notification event descriptions and mail templates

define ('_MI_NEWBB_THREAD_NOTIFY', 'Hilo');
define ('_MI_NEWBB_THREAD_NOTIFYDSC', 'Opciones de Notificaci�n que se aplican al hilo actual.');

define ('_MI_NEWBB_FORUM_NOTIFY', 'Foro');
define ('_MI_NEWBB_FORUM_NOTIFYDSC', 'Opciones de Notificaci�n que se aplican al foro actual.');

define ('_MI_NEWBB_GLOBAL_NOTIFY', 'Global');
define ('_MI_NEWBB_GLOBAL_NOTIFYDSC', 'Opciones de Notificaci�n Globales del foro.');

define ('_MI_NEWBB_THREAD_NEWPOST_NOTIFY', 'Nuevo Env�o');
define ('_MI_NEWBB_THREAD_NEWPOST_NOTIFYCAP', 'Notificarme de nuevos envios en el hilo actual.');
define ('_MI_NEWBB_THREAD_NEWPOST_NOTIFYDSC', 'Recibir notificaci�n cuando un nuevo mensaje es escrito en el hilo actual.');
define ('_MI_NEWBB_THREAD_NEWPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Nuevo env�o en el hilo');

define ('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFY', 'Nuevo Hilo');
define ('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYCAP', 'Notificarme cuando un nuevo hilo es empezado en este foro.');
define ('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYDSC', 'Recibir notificaci�n cuando un nuevo hilo es comenzado el el foro actual.');
define ('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Nuevo hilo en el foro.');

define ('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFY', 'Nuevo Foro');
define ('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYCAP', 'Notificarme cuando un nuevo foro es creado.');
define ('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYDSC', 'Recibir notificaci�n cuando un nuevo foro es creado.');
define ('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Nuevo Foro');

define ('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFY', 'Nuevo env�o');
define ('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYCAP', 'Notificarme de cualquier nuevo env�o.');
define ('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYDSC', 'Recibir notificaci�n cuando cualquier nuevo mensaje es enviado.');
define ('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Nuevo env�o');

define ('_MI_NEWBB_FORUM_NEWPOST_NOTIFY', 'Nuevo env�o');
define ('_MI_NEWBB_FORUM_NEWPOST_NOTIFYCAP', 'Notificarme de cualquier nuevo env�o en el foro actual.');
define ('_MI_NEWBB_FORUM_NEWPOST_NOTIFYDSC', 'Recibir notificaci�n cuando cualquier nuevo mensaje es enviado en el foro actual.');
define ('_MI_NEWBB_FORUM_NEWPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Nuevo env�o en foro');

define ('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFY', 'Nuevo env�o (Texto completo)');
define ('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYCAP', 'Notificarme de cualquier nuevo env�o (incluir el texto del mensaje).');
define ('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYDSC', 'Recibir notificaci�n con texto completo cuando cualquier nuevo mensaje es enviado.');
define ('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Nuevo env�o (texto completo)');

define ('_MI_NEWBB_GLOBAL_DIGEST_NOTIFY', 'Selecci�n');
define ('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYCAP', 'Notificarme de cualquier nueva selecci�n.');
define ('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYDSC', 'Recibir notificaci�n de selecci�n.');
define ('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Nueva selecci�n');

// FOR installation
define($constpref."_INSTALL_CAT_TITLE", "Categor�a Test");
define($constpref."_INSTALL_CAT_DESC", "Categor�a para test.");
define($constpref."_INSTALL_FORUM_NAME", "Foro test");
define($constpref."_INSTALL_FORUM_DESC", "Foro para test.");
define($constpref."_INSTALL_POST_SUBJECT", "Felicitaciones! El foro est� trabajando.");
define($constpref."_INSTALL_POST_TEXT", "
	Bienvenido al foro de  ".(htmlspecialchars($GLOBALS["xoopsConfig"]['sitename'], ENT_QUOTES))."
	Si�ntase libre de iniciar sesi�n y comenzar sus temas en el foro.
	
	Si tiene cualquier pregunta referente al uso de CBB, por favor, visite su sitio de soporte local, o la p�gina del [url=http://community.impresscms.org/modules/newbb/viewforum.php?forum=9]M�dulo CBB[/url]
	");
?>