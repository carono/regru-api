<?php
namespace carono\regru\config\service;
/**
 * @see https://www.reg.ru/support/help/api2#service_create
 * Облачный хостинг Jelastic (srv_jelastic)
 */
class SrvJelasticConfig extends \carono\regru\BaseConfig
{
	/** Email, к которому привязывается аккаунт Jelastic. */
	public $email;

	public $required = ['email'];

}
