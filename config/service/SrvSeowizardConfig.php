<?php
namespace carono\regru\config\service;
/**
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
