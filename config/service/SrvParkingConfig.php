<?php
namespace carono\regru\config\service;
/**
 * @see https://www.reg.ru/support/help/api2#service_create
 * Парковка (srv_parking)
 * Парковка (srv_parking)
 */
class SrvParkingConfig extends \carono\regru\BaseConfig
{
	/** Заголовок страницы. Просто элемент оформления шаблона. */
	public $title;

	/** HTML-код страницы. */
	public $content;

	/** HTML-код счётчиков (опционально). */
	public $counter_html_code;

	/**
	 * Идентификатор шаблона. Доступные идентификаторы:
	 * private_property
	 * «Частная собственность»
	 * under_construction
	 * «На сайте идут строительные работы»
	 * for_sale
	 * «Домен выставлен на продажу»
	 * for_rent
	 * «Домен сдается в аренду»
	 * for_you_gift
	 * «Для Вас подарок»
	 * happy_new_year
	 * «С Новым годом!»
	 * happy_birthday1
	 * «С Днем рождения!» (вариант 1)
	 * happy_birthday2
	 * «С Днем рождения!» (вариант 2)
	 * love_happiness
	 * «Любви и счастья!»
	 * empty
	 * Пустая страница
	 * raw_html
	 * Ваш HTML код (только для платной парковки, без стандарного рекламного блока)
	 */
	public $template_name;

	/** HTML мета-тег «Title». */
	public $html_title;

	/** HTML мета-тег «Description». */
	public $html_description;

	/** HTML мета-тег «Keywords». */
	public $html_keywords;

	/** Отобразить информационный блок с контактами Администратора домена. */
	public $opt_user_contacts;

	/**
	 * Отобразить информационный блок со ссылкой "Связь с Администратором домена" (ссылка на Whois по домену).
	 * Возможные значения:
	 * «1» — функция включена
	 * «0» — функция отключена
	 */
	public $opt_feedback_link;

	/**
	 * Отобразить информационный блок со ссылкой на лот в Магазине доменов (при условии, что домен выставлен на продажу в Магазине доменов).
	 * Возможные значения:
	 * «1» — функция включена
	 * «0» — функция отключена
	 */
	public $opt_domain_shop_link;

	/**
	 * Отобразить информационный блок со ссылкой на историю Whois домена.
	 * Возможные значения:
	 * «1» — функция включена
	 * «0» — функция отключена
	 */
	public $opt_whois_link;

	/**
	 * Отобразить информационный блок со cсылками на домен в поисковых системах.
	 * Возможные значения:
	 * «1» — функция включена
	 * «0» — функция отключена
	 */
	public $opt_se_link;

	/**
	 * Отобразить информационный блок cо ссылками на проиндексированные страницы различными поисковыми системами.
	 * Возможные значения:
	 * «1» — функция включена
	 * «0» — функция отключена
	 */
	public $opt_indexed_link;

	/**
	 * Отобразить информационный блок cо ссылками на проиндексированные страницы различными поисковыми системами.
	 * Возможные значения:
	 * «1» — функция включена
	 * «0» — функция отключена
	 */
	public $opt_blogs_link;

	/** Необязательный. Для бесплатной парковки следует указать значение free */
	public $subtype;

	public $required = [
		'title',
		'content',
		'counter_html_code',
		'template_name',
		'html_title',
		'html_description',
		'html_keywords',
		'opt_user_contacts',
		'opt_feedback_link',
		'opt_domain_shop_link',
		'opt_whois_link',
		'opt_se_link',
		'opt_indexed_link',
		'opt_blogs_link',
	];

}
