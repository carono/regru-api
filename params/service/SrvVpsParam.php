<?php
namespace carono\regru\params\service;
/**
 * VPS сервер (srv_vps)
 * VPS (srv_vps)
 */
class SrvVpsParam extends \carono\regru\BaseParam
{
	/**
	 * Тарифный план, сейчас доступны:
	 * RH-1-0615
	 * RH-2-0615
	 * RH-3-0615
	 * SSD-VPS-1-0714
	 * SSD-VPS-2-0714
	 * SSD-VPS-3-0714
	 * SSD-VPS-4-0714
	 * SSD-VPS-5-0714
	 * VPS-1-0615
	 * VPS-2-0615
	 * VPS-3-0615
	 * VPS-4-0615
	 * VPS-5-0615
	 * WIN-1
	 * WIN-2
	 * WIN-3
	 * WIN-4
	 * WIN-5
	 * WIN-6
	 * WIN-7
	 * XEN-1-0615
	 * XEN-2-0615
	 * XEN-3-0615
	 * XEN-4-0615
	 * XEN-5-0615
	 * XEN-6-0615
	 * XEN-7-0615
	 * XEN-8-0615.
	 */
	public $subtype;

	/** Наименование сервера для идентификации в списке услуг. */
	public $vpsname;

	/**
	 * Шаблон предустановленной операционной системы. Сейчас доступны:
	 * centos-x86
	 * centos-x86_64
	 * debian-x86
	 * debian-x86_64
	 * ubuntu-x86
	 * ubuntu-x86_64
	 * windows-2003-english (Только WIN)
	 * windows-2008-english (Только WIN)
	 * windows-2008-russian (Только WIN)
	 * windows-2012-english (Только WIN)
	 * windows-2012-russian (Только WIN)
	 * centos-x86_bitrix
	 * centos-x86_64_bitrix
	 * centos-x86_webmin
	 * centos-x86_64_webmin
	 * debian-x86_webmin
	 * debian-x86_64_webmin
	 * ubuntu-x86_webmin
	 * ubuntu-x86_64_webmin.
	 */
	public $ostmpl;

	/** Тип контактных данных. Принимает значение "pp" при регистрации сервера на данные физического лица и значение "org" при регистрации сервера на данные юридического лица. */
	public $contype;

	/** e-mail адрес для создаваемого хостинг-аккаунта. */
	public $email;

	/** Телефон. Необязательное поле */
	public $phone;

	/** Двухбуквенный ISO-код страны, в которой зарегистрировано(а) физическое лицо (организация). */
	public $country;

	/** Указывается при использовании параметра "contype" со значением "pp". Фамилия, имя и отчество администратора сервера на русском языке в соответствии с паспортными данными. Для иностранцев поле содержит имя в оригинальном написании (при невозможности в английской транслитерации).Пример1: Пупкин Василий НиколаевичПример2: John Smith */
	public $person_r;

	/** Указывается при использовании параметра "contype" со значением "pp". Серия и номер паспорта, а также наименование органа, выдавшего паспорт, и дата выдачи (в указанной последовательности, с разделением пробелами). В написании римских цифр допустимо использование только латинских букв. Дата записывается в формате ДД.ММ.ГГГГ. Знак номера перед номером паспорта не ставится. Паспорта СССР (паспорта старого образца) не принимаются. В случае использования документа, отличного от паспорта (допустимо ТОЛЬКО для нерезидентов России), в начале строки указывается наименование вида документа. Запись может быть многострочной.Пример: 34 02 651241 выдан 48 о/м г.Москвы 26.12.1990 */
	public $passport;

	/** Указывается при использовании параметра "contype" со значением "org". Полное наименование организации-администратора домена на русском языке в соответствии с учредительными документами. Для нерезидентов указывается написание на национальном языке (либо на английском языке). Запись может быть многострочной.Пример1: Урюпинский государственный университет\nимени Карлы-Марлы Пример2: Общество с ограниченной ответственностью "Рога и Копыта" */
	public $org_r;

	/** Указывается при использовании параметра "contype" со значением "org". Идентификационный номер налогоплательщика (ИНН), присвоенный организации-администратору. Запись может содержать пустую строку, если администратором является нерезидент РФ, не имеющий идентификационного номера налогоплательщика.Пример: 7701107259 */
	public $code;

}
