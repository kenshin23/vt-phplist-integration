Documentación de Diseño para Integración Vtiger - PHPList
=========================================================

Este documento forma una especie de bitácora que define los pasos seguidos en el desarrollo del módulo e-Marketing Campaign, sirviendo así de ayuda para explicar el funcionamiento del mismo y a la vez, en el posible desarrollo a furuto.

Está basado en el uso de Vtiger CRM 5.4.0 y PHPList 2.10.19.

Módulo Campaigns (modificación/adaptación/especialización al módulo e-Marketing Campaign):
Se analizó la estructura del módulo en cuestión, determinando que obtiene sus datos de múltiples tablas, según el tipo de dato mostrado.

Específicamente:
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

Del lado de PHPList, se cuenta con múltiples tablas, pero con el atenuante que sólo se necesita editar 3 de ellas para agregar, modificar o eliminar usuarios (Un usuario en el contexto de PHPList, es un correo electrónico asociado a una o más listas de envío de correo.), y una adicional para agregar las plantillas a ser usadas en el envío de correos.

Tipo de Dato / Tablas utilizadas
* Usuarios
	* phplist_user_user
* Listas
	* phplist_list
* Plantillas
	* phplist_templates
* Relaciones de Tabla
	* phplist_listuser

De acuerdo a lo investigado, se hace extremadamente complejo (por no decir imposible) modificar de alguna manera el código fuente de VTiger, por las siguientes razones:

Si se modifica la plantilla correspondiente a los submódulos de Leads, Contacts, etc, dado que es una plantilla compartida por los demás módulos (no sólo el de Campaigns) se corre el riesgo de romper funcionalidad.
En múltiples ocasiones, el código fuente que genera el módulo, está altamente integrado con la parte presentacional, es decir, se combina la parte visual con la lógica de negocios.

Así mismo, se investigó sobre las posibles alternativas para realizar los módulos y sus enlaces:

Utilizando la librería vtlib: Vtlib es la librería interna de desarrollo de módulos para vtiger.
* Ventajas:
	* Los demás módulos de vtiger están desarrollados con esta misma librería.
	* Permite consultas mucho más complejas a las tablas de la base de datos interna de vtiger.
* Inconvenientes:
	* Sumamente complejo de utilizar. Requiere de un desarrollador ya experimentado con el sistema.
	* El módulo debe ser instalado junto con vtiger, por lo cual no puede utilizarse un servidor externo.

Utilizando la librería vtswclib: Vtswclib es la librería multiplataforma de desarrollo para servicios web. Implementa servicios en PHP, Java, Javascript y Python.
* Ventajas:
	* Más sencilla de implementar que vtlib.
	* Puede implementarse de forma externa a vtiger, ya que sólo requiere a un usuario y su respectiva llave de acceso (no su clave).
* Inconvenientes:
	* Consultas muy limitadas a los servicios internos. Los datos deben ser manipulados de otra manera, lo cual conlleva complejidad añadida.
	* Al API le hacen falta métodos para borrar o actualizar entidades.

Como resultado, se procedió a desarrollar con código personalizado. El módulo, por tanto, será externo a vtiger.

Un inconveniente adicional a salvar, es el hecho que al ser un módulo externo, no se cuenta con una manera sencilla de añadir dicho módulo a la interfaz de usuario existente de vtiger.