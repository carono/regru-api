<?php
namespace carono\regru\config\service;
/**
 * Готовые решения на основе популярных CMS ( srv_rs_joomla и srv_rs_wordpress )
 */
class SrvRsWordpressConfig extends \carono\regru\BaseConfig
{
	/**
	 * Тарифный план.
	 * Для готовых решений на основе Joomla доступны следующие тарифные планы:
	 * corporate
	 * eCommerce
	 * Для готовых решений на основе Wordpress доступны следующие тарифные планы:
	 * blog
	 * corporate
	 * eCommerce
	 * ecwid
	 * portfolio
	 */
	public $subtype;

	/** Тема. Список доступных тем можно получить, используя функцию "hosting/get_rs_themes", указав параметры "servtype" и "subtype". */
	public $theme;

	/** Тип контактных данных. Принимает значение "hosting_pp" при регистрации сервера на данные физического лица и значение "hosting_org" при регистрации сервера на данные юридического лица. */
	public $contype;

	/** e-mail-адрес для создаваемого хостинг-аккаунта. */
	public $email;

	/** Телефон. Необязательное поле */
	public $phone;

	/** Двухбуквенный ISO-код страны, в которой зарегистрировано(а) физическое лицо (организация). */
	public $country;

	/** Указывается при использовании параметра "contype" со значением "hosting_pp". Фамилия, имя и отчество администратора сервера на русском языке в соответствии с паспортными данными. Для иностранцев поле содержит имя в оригинальном написании (при невозможности в английской транслитерации).Пример1: Пупкин Василий НиколаевичПример2: John Smith */
	public $person_r;

	/** Указывается при использовании параметра "contype" со значением "hosting_pp". Серия и номер паспорта, а также наименование органа, выдавшего паспорт, и дата выдачи (в указанной последовательности, с разделением пробелами). В написании римских цифр допустимо использование только латинских букв. Дата записывается в формате ДД.ММ.ГГГГ. Знак номера перед номером паспорта не ставится. Паспорта СССР (паспорта старого образца) не принимаются. В случае использования документа, отличного от паспорта (допустимо ТОЛЬКО для нерезидентов России), в начале строки указывается наименование вида документа. Запись может быть многострочной.Пример: 34 02 651241 выдан 48 о/м г.Москвы 26.12.1990 */
	public $passport;

	/**
	 * Указывается при использовании параметра "contype" со значением "hosting_pp". Идентификационный номер налогоплательщика (ИНН). Запись может содержать пустую строку, если администратором является нерезидент РФ, не имеющий идентификационного номера налогоплательщика.
	 * Необязательное поле. Пример: 7701107259
	 */
	public $pp_code;

	/** Указывается при использовании параметра "contype" со значением "hosting_org". Полное наименование организации-администратора домена на русском языке в соответствии с учредительными документами. Для нерезидентов указывается написание на национальном языке (либо на английском языке). Запись может быть многострочной.Пример1: Урюпинский государственный университет\nимени Карлы-МарлыПример2: Общество с ограниченной ответственностью "Рога и Копыта" */
	public $org_r;

	/** Указывается при использовании параметра "contype" со значением "hosting_org". Идентификационный номер налогоплательщика (ИНН), присвоенный организации-администратору. Запись может содержать пустую строку, если администратором является нерезидент РФ, не имеющий идентификационного номера налогоплательщика.Пример: 7701107259 */
	public $code;

	public $required = [
		'subtype',
		'theme',
		'contype',
		'email',
		'country',
		'person_r',
		'passport',
		'org_r',
		'code',
	];

}
