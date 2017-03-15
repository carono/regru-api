<?php
namespace carono\regru\config\service;
/**
 * @see https://www.reg.ru/support/help/api2#service_create
 * Сертификат SSL (srv_ssl_certificate)
 * Сертификат SSL (srv_ssl_certificate)
 */
class SrvSslCertificateConfig extends \carono\regru\BaseConfig
{
	/**
	 * Название, имя, фамилия, адрес, город, штат(провинция), почтовый индекс, страна, телефон, факс организации.
	 * Используются для всех SSL сертификатов компаний Thawte, Comodo, VeriSign, а так-же для GeoTrust SSL сертификатов: True BusinessID, True BusinessID Wildcard, True BusinessID with EV.
	 */
	public $обязательные:
	org_org_name, org_address, org_city, org_state, org_postal_code, org_country, org_phoneнеобязательные:
	org_first_name, org_last_name, org_fax;

	/**
	 * Имя, фамилия, должность, адрес, город, штат, почтовый индекс, страна, телефон, e-mail, факс, название организации адрес администратора.
	 * Используются для всех SSL сертификатов компаний Thawte, GeoTrust, Trustwave и VeriSign, а так-же для Comodo EV SSL сертификата.
	 */
	public $обязательные:
	admin_first_name, admin_last_name, admin_title, admin_address, admin_city, admin_state, admin_postal_code, admin_country, admin_phone, admin_email,необязательные:
	admin_fax, admin_org_name;

	/**
	 * Имя, фамилия, должность, адрес, город, штат, почтовый индекс, страна, телефон, e-mail, факс, название организации адрес финансового менеджера.
	 * Используются для всех SSL сертификатов компаний Thawte, GeoTrust и VeriSign.
	 */
	public $обязательные:
	billing_first_name, billing_last_name, billing_title, billing_address, billing_city, billing_state, billing_postal_code, billing_country, billing_phone, billing_email,необязательные:
	billing_fax, billing_org_name;

	/**
	 * Имя, фамилия, должность, адрес, город, штат, почтовый индекс, страна, телефон, e-mail, факс, название организации адрес технического специалиста.
	 * Используются для всех SSL сертификатов компаний Thawte, GeoTrust и VeriSign.
	 */
	public $обязательные:
	tech_first_name, tech_last_name, tech_title, tech_address, tech_city, tech_state, tech_postal_code, tech_country, tech_phone, tech_email,необязательные:
	tech_fax, tech_org_name;

	/**
	 * Имя, фамилия, должность, адрес, город, штат, почтовый индекс, страна, телефон, e-mail, факс, название организации адрес ответственного за подписку SSL сертиификата.
	 * Используются для Comodo EV SSL сертификата.
	 */
	public $обязательные:
	signer_first_name, signer_last_name, signer_title, signer_address, signer_city, signer_state, signer_postal_code, signer_country, signer_phone, signer_email,необязательные:
	signer_fax, signer_org_name;

	/** E-mail адрес для подтверждения сертификата. */
	public $approver_email;

	/**
	 * Программное обеспечение. Возможные значения:
	 * Для Comodo SSL сертификатов:
	 * apachessl, citrix, domino, ensim, hsphere, iis4, iis6, iis7, iplanet, javawebserver, netscape, ibmhttp, novell, oracle, other, plesk, redhat, sap, tomcat, webstar, whmcpanel
	 * Для Thawte, GeoTrust и VeriSign SSL сертификатов:
	 * apache2 apacheopenssl apacheraven apachessl apachessleay c2net cobaltseries cobaltraq3 cobaltraq2 cpanel domino dominogo4626 dominogo4625 ensim hsphere iis iis4 iis5 iplanet ipswitch netscape ibmhttp other plesk tomcat weblogic website webstar webstar4 zeusv3
	 * Для TrustWave SSL Сертификатов данный параметр не используется.
	 */
	public $server_type;

	/** Закодированный CSR включая маркеры начала и окончания. */
	public $csr_string;

	/**
	 * Вид сертификата. Возможные значения:Thawte:
	 * ssl123, sgcsuper_certs, sslwebserver, sslwebserver_wildcard, sslwebserver_evSymantec:
	 * securesite, securesite_pro, securesite_ev, securesite_pro_evGeoTrust:
	 * quickssl, quickssl_premium, truebizid, truebizid_wildcard, truebizid_evTrustWave:
	 * trustwave_dv, trustwave_ev, trustwave_premiumssl, trustwave_premiumssl_wildcardComodo:
	 * comodo_ev, comodo_instantssl, comodo_premiumssl, comodo_premiumssl_wildcard, comodo_ssl, comodo_wildcard
	 */
	public $subtype;

	public $required = ['approver_email', 'server_type', 'csr_string', 'subtype'];

}
