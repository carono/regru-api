<?php
namespace carono\regru\params\service;
/**
 * Сертификат на домен (srv_certificate)
 */
class SrvCertificateParam extends \carono\regru\BaseParam
{
	/**
	 * способ получения сертификата:
	 * in_office — В офисе REG.RU
	 * дополнительные параметры: office, phone, remark
	 * free_mail — Почтой в любой город Российской Федерации (доставка бесплатная)
	 * дополнительные параметры: postcode, name, addr
	 * paid_mail — Почтой в любой другой город мира (доставка платная)
	 * дополнительные параметры: postcode, name, addr, city, country_code, state
	 */
	public $obtain_cert;

	/** Допустимые значения: moscow, samara, kiev, piter */
	public $office;

	/** телефон в международном формате: знак "+", код страны, номер телефона. */
	public $phone;

	/** Примечание */
	public $remark;

	/** Почтовый индекс для бесплатной отправки сертификата по России */
	public $p_postcode;

	/** Адрес в России */
	public $p_addr;

	/** Фамилия, Имя, Отчество по-русски */
	public $p_name;

	/** Почтовый индекс для международного письма */
	public $a_postcode;

	/** Почтовый адрес для международного (только латиницей) */
	public $a_addr;

	/** Полное имя для международного письма (только латиницей) */
	public $a_name;

	/** Область, штат */
	public $a_state;

	/** Город для международной отправки сертификата */
	public $a_city;

	/** Код страны (например UK) */
	public $a_country_code;

}
