<?php
namespace carono\regru\params\service;
/**
 * Автоматическое SEO-продвижение (srv_seowizard)
 */
class SrvSeowizardParam extends \carono\regru\BaseParam
{
	/** Email, для которого заказывается услуга */
	public $email;

	/** Имя для услуги. Необязательный параметр, если не указано, будет подставлено имя "SeoWizard для <email>" */
	public $seo_name;

}
