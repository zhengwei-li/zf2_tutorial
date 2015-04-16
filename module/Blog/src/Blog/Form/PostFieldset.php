<?php
// Filename: /module/Blog/src/Blog/Form/PostFieldset.php
namespace Blog\Form;

use Blog\Model\Post;
use Zend\Form\Fieldset;
use Zend\Stdlib\Hydrator\ClassMethods;

class PostFieldset extends Fieldset {

	public function __construct($name = null, $options = array()) {

		//file_put_contents("/Users/zhengwei/Desktop/mylog.txt", __FILE__ . date('Y-m-d H:i:s') . "\r\n", FILE_APPEND);

		parent::__construct($name, $options);

		$this->setHydrator(new ClassMethods(false));
		$this->setObject(new Post());

		$this->add(array(
			'type' => 'hidden',
			'name' => 'id',
		));

		$this->add(array(
			'type' => 'text',
			'name' => 'text',
			'options' => array(
				'label' => 'The Text',
			),
		));

		$this->add(array(
			'type' => 'text',
			'name' => 'title',
			'options' => array(
				'label' => 'Blog Title',
			),
		));
	}
}