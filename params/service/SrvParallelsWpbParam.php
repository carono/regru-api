<?php
namespace carono\regru\params\service;
/**
 * Конструктор сайтов Parallels Web Presence Builder (srv_parallels_wpb)
 */
class SrvParallelsWpbParam extends \carono\regru\BaseParam
{
	/** Имя домена, для которого заказывается услуга ParallelsWPB */
	public $dname;

	/** Тарифный план, сейчас доступны: "WPB-Lite", "WPB-Pro", "WPB-Standart". */
	public $subtype;

	/** Параметр для автоматического разрешения конфликтов доменных имён при заказе услуги. Значение - 0 или 1. Необязательное поле. */
	public $auto_confict_resolve;

}
