<?php
namespace carono\regru\config\service;
/**
 * @see https://www.reg.ru/support/help/api2#service_create
 * Конструктор сайтов Wix (srv_wix)
 */
class SrvWixConfig extends \carono\regru\BaseConfig
{
	/** Email, для которого заказывается услуга. */
	public $email;

	/** Идентификатор клиента в системе REG.RU. */
	public $client_uid;

	public $required = ['email', 'client_uid'];

}
