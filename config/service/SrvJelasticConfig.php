<?php
namespace carono\regru\config\service;
/**
 * Облачный хостинг Jelastic (srv_jelastic)
 */
class SrvJelasticConfig extends \carono\regru\BaseConfig
{
	/** Email, к которому привязывается аккаунт Jelastic. */
	public $email;

	public $required = ['email'];

}
