<?php
namespace carono\regru\config\service;
/**
 * KVM доступ (srv_kvm)
 */
class SrvKvmConfig extends \carono\regru\BaseConfig
{
	/** ID родительской услуги, к которой заказывается KVM доступ. Заказ KVM доступа возможен только для выделеного сервера (srv_dedicated). */
	public $uplink_service_id;

	public $required = ['uplink_service_id'];

}
