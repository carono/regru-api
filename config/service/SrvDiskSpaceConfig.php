<?php
namespace carono\regru\config\service;
/**
 * Дополнительное дисковое пространство (srv_disk_space)
 */
class SrvDiskSpaceConfig extends \carono\regru\BaseConfig
{
	/** ID родительской услуги, к которой заказывается дополнительный IP. Заказ дополнительного IP возможен только для VPS (srv_vps). */
	public $uplink_service_id;

	/**
	 * Т Размер заказываемого дополнительного пространства для VPS в гигабайтах.
	 * Обязательный параметр, значение по умолчанию: 1
	 */
	public $disk_size;

	public $required = ['uplink_service_id', 'disk_size'];

}
