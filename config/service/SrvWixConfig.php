<?php
namespace carono\regru\config\service;
/**
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
