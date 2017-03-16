<?php
namespace carono\regru\params\service;
/**
 * Конструктор сайтов Wix (srv_wix)
 */
class SrvWixParam extends \carono\regru\BaseParam
{
	/** Email, для которого заказывается услуга. */
	public $email;

	/** Идентификатор клиента в системе REG.RU. */
	public $client_uid;

}
