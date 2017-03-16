<?php
namespace carono\regru\params\service;
/**
 * KVM доступ (srv_kvm)
 */
class SrvKvmParam extends \carono\regru\BaseParam
{
	/** ID родительской услуги, к которой заказывается KVM доступ. Заказ KVM доступа возможен только для выделеного сервера (srv_dedicated). */
	public $uplink_service_id;

}
