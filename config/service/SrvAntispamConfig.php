<?php
namespace carono\regru\config\service;
/**
 * @see https://www.reg.ru/support/help/api2#service_create
 * Расширенная защита от спама (srv_antispam)
 * Расширенная защита от спама (srv_antispam)
 */
class SrvAntispamConfig extends \carono\regru\BaseConfig
{
	/** ID родительской услуги, к которой заказывается расширенная защита от спама. Заказ расширенной защиты от спама возможен для домена (domain), ISPmanager хостинга (srv_hosting_ispmgr), CPanel хостинга (srv_hosting_cpanel) и Plesk хостинга (srv_hosting_plesk). */
	public $uplink_service_id;

	/** Имя домена для которого заказывается расширенная защита от спама. Данный параметр может быть использован как альтернатива uplink_service_id. Необязательный параметр. */
	public $dname;

	/**
	 * Данный параметр определяет какие действия будут применены к почте распознанной как спам.
	 * Возможны 2 варианта:
	 * "delete" ( Удалять найденный спам ),
	 * "mark" ( Отметить найденный спам email-заголовками X-Spam-* ).
	 *
	 * Необязательный параметр, значение по умолчанию: "delete".
	 */
	public $spam_action;

	/** Список MX серверов через запятую, используемых для транспорта отфильтрованной почты. */
	public $mx_list;

	public $required = ['uplink_service_id', 'mx_list'];

}
