<?php
namespace carono\regru\params\service;
/**
 * Дополнительное дисковое пространство (srv_disk_space)
 */
class SrvDiskSpaceParam extends \carono\regru\BaseParam
{
	/** ID родительской услуги, к которой заказывается дополнительный IP. Заказ дополнительного IP возможен только для VPS (srv_vps). */
	public $uplink_service_id;

	/**
	 * Т Размер заказываемого дополнительного пространства для VPS в гигабайтах.
	 * Обязательный параметр, значение по умолчанию: 1
	 */
	public $disk_size;

	public $required = ['disk_size'];

}
