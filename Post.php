<?php
/**
 * Пример класса, описывающего заголовок поста в CMS системе
 */
class Post {
	/**
	 * Заголовок поста
	 * @var string
	 */
	private $_title;
	/**
	 * Содержание поста
	 * @var string
	 */
	private $_content;
	/**
	 * Дата публикации
	 * @var int
	 */
	private $_publicationDate;
	/**
	 * Массив из элементов ['title'=>..,'content'=>...,'publicateDate'=>...]
	 * @param array $config конфигурация объекта
	 */	
	public function __construct(array $config) {
		foreach($config as $name => $value) {
			$propertyName = '_'.$name;
			if(!property_exists($this, $propertyName))
				throw new Exception("An error occurred in the configuration array. No property found: '$propertyName'");
			$this->$propertyName = $value;
		}
	}
	public function __toString() {
		return "Post: [title: {$this->_title}] [content: {$this->_content}] [publicateDate: {$this->_publicationDate}]\r\n";
	}
}
