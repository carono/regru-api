<?php
namespace carono\regru\params\service;
/**
 * Дополнительный IP (srv_addip)
 */
class SrvAddipParam extends \carono\regru\BaseParam
{
	/** ID родительской услуги, к которой заказывается дополнительный IP. Заказ дополнительного IP возможен только для VPS (srv_vps), ISPmanager хостинга (srv_hosting_ispmgr) и CPanel хостинга (srv_hosting_cpanel). */
	public $uplink_service_id;

	/**
	 * Тип дополнительного IP, доступны:
	 * "ipv4" для заказа случайного доп. IP,
	 * "other_subnet" для заказа доп. IP находящегося в другой подсети класса C относительно основного адреса VPS-сервера.
	 * Обязательный параметр, значение по умолчанию: "ipv4"
	 */
	public $subtype;

	public $required = ['subtype'];

}
