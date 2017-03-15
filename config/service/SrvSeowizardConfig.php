<?php
namespace carono\regru\config\service;
/**
 * @see https://www.reg.ru/support/help/api2#service_create
 * Автоматическое SEO-продвижение (srv_seowizard)
 */
class SrvSeowizardConfig extends \carono\regru\BaseConfig
{
	/** Email, для которого заказывается услуга */
	public $email;

	/** Имя для услуги. Необязательный параметр, если не указано, будет подставлено имя "SeoWizard для <email>" */
	public $seo_name;

	public $required = ['email'];

}
