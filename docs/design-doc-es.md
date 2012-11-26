Documentaci�n de Dise�o para Integraci�n Vtiger - PHPList
=========================================================

Este documento forma una especie de bit�cora que define los pasos seguidos en el desarrollo del m�dulo e-Marketing Campaign, sirviendo as� de ayuda para explicar el funcionamiento del mismo y a la vez, en el posible desarrollo a furuto.

Est� basado en el uso de Vtiger CRM 5.4.0 y PHPList 2.10.19.

M�dulo Campaigns (modificaci�n/adaptaci�n/especializaci�n al m�dulo e-Marketing Campaign):
Se analiz� la estructura del m�dulo en cuesti�n, determinando que obtiene sus datos de m�ltiples tablas, seg�n el tipo de dato mostrado.

Espec�ficamente:
Tipo de Dato / Tablas utilizadas
* Campaigns
	* vtiger_campaign
	* vtiger_crmentity
	* vtiger_campaignscf
* Accounts
	* vtiger_users
	* vtiger_account
	* vtiger_groups
	* vtiger_crmentity
	* vtiger_campaignaccountrel
	* vtiger_accountbillads
	* vtiger_campaignrelstatus
* Leads
	* vtiger_campaignrelstatus
	* vtiger_users
	* vtiger_leaddetails
	* vtiger_crmentity
	* vtiger_leadaddress
	* vtiger_leadsubdetails
	* vtiger_groups
* Potentials
	* vtiger_users
	* vtiger_groups
	* vtiger_potential
	* vtiger_account
	* vtiger_crmentity
	* vtiger_campaign
* Activities
	* vtiger_users
	* vtiger_contactdetails
	* vtiger_activity
	* vtiger_seactivityrel
	* vtiger_crmentity
	* vtiger_groups
	* vtiger_recurringevents
	* vtiger_activity
* Report
	* vtiger_campaign
	* vtiger_crmentity
	* vtiger_crmentityCampaigns
	* vtiger_products
	* vtiger_productsCampaigns
	* vtiger_campaignscf
	* vtiger_groups
	* vtiger_groupsCampaigns
	* vtiger_users
	* vtiger_usersCampaigns
	* vtiger_lastModifiedByCampaigns
* Relaciones entre Tablas	
	* vtiger_campaigncontrel
	* vtiger_campaignleadrel
	* vtiger_campaignaccountrel
	* vtiger_potential
	* vtiger_seactivityrel
	* vtiger_campaign

Del lado de PHPList, se cuenta con m�ltiples tablas, pero con el atenuante que s�lo se necesita editar 3 de ellas para agregar, modificar o eliminar usuarios (Un usuario en el contexto de PHPList, es un correo electr�nico asociado a una o m�s listas de env�o de correo.), y una adicional para agregar las plantillas a ser usadas en el env�o de correos.

Tipo de Dato / Tablas utilizadas
* Usuarios
	* phplist_user_user
* Listas
	* phplist_list
* Plantillas
	* phplist_templates
* Relaciones de Tabla
	* phplist_listuser

De acuerdo a lo investigado, se hace extremadamente complejo (por no decir imposible) modificar de alguna manera el c�digo fuente de VTiger, por las siguientes razones:

Si se modifica la plantilla correspondiente a los subm�dulos de Leads, Contacts, etc, dado que es una plantilla compartida por los dem�s m�dulos (no s�lo el de Campaigns) se corre el riesgo de romper funcionalidad.
En m�ltiples ocasiones, el c�digo fuente que genera el m�dulo, est� altamente integrado con la parte presentacional, es decir, se combina la parte visual con la l�gica de negocios.

As� mismo, se investig� sobre las posibles alternativas para realizar los m�dulos y sus enlaces:

Utilizando la librer�a vtlib: Vtlib es la librer�a interna de desarrollo de m�dulos para vtiger.
* Ventajas:
	* Los dem�s m�dulos de vtiger est�n desarrollados con esta misma librer�a.
	* Permite consultas mucho m�s complejas a las tablas de la base de datos interna de vtiger.
* Inconvenientes:
	* Sumamente complejo de utilizar. Requiere de un desarrollador ya experimentado con el sistema.
	* El m�dulo debe ser instalado junto con vtiger, por lo cual no puede utilizarse un servidor externo.

Utilizando la librer�a vtswclib: Vtswclib es la librer�a multiplataforma de desarrollo para servicios web. Implementa servicios en PHP, Java, Javascript y Python.
* Ventajas:
	* M�s sencilla de implementar que vtlib.
	* Puede implementarse de forma externa a vtiger, ya que s�lo requiere a un usuario y su respectiva llave de acceso (no su clave).
* Inconvenientes:
	* Consultas muy limitadas a los servicios internos. Los datos deben ser manipulados de otra manera, lo cual conlleva complejidad a�adida.
	* Al API le hacen falta m�todos para borrar o actualizar entidades.

Como resultado, se procedi� a desarrollar con c�digo personalizado. El m�dulo, por tanto, ser� externo a vtiger.

Un inconveniente adicional a salvar, es el hecho que al ser un m�dulo externo, no se cuenta con una manera sencilla de a�adir dicho m�dulo a la interfaz de usuario existente de vtiger.