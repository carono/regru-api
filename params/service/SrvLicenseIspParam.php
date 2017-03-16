<?php
namespace carono\regru\params\service;
/**
 * Лицензия ISP Manager (srv_license_isp)
 */
class SrvLicenseIspParam extends \carono\regru\BaseParam
{
	/** ID родительской услуги, к которой заказывается лицензия ISP Manager. Заказ лицензии возможен только для VPS (srv_vps). */
	public $uplink_service_id;

	/**
	 * Тип лицензии, доступны: "lite", "pro".
	 * Необязательный параметр, значение по умолчанию: "lite"
	 */
	public $subtype;

	/**
	 * Тип переустановки ОС на VPS. Принимает значение "auto" для автоматической переустановки ОС и значение "manual" только для заказа лицензии.
	 * Необязательный параметр, значение по умолчанию: "manual"
	 */
	public $installation_way;

	/**
	 * Шаблон предустановленной операционной системы.
	 * Необязательный параметр, может потребоваться в том случае если шаблон установленной ОС не поддерживается ISP Manager'ом.
	 * Поддерживаются следующие шаблоны ОС:
	 * centos-x86
	 * centos-x86_64
	 * debian-x86
	 * debian-x86_64
	 * ubuntu-x86
	 * ubuntu-x86_64
	 */
	public $ostmpl;

}
