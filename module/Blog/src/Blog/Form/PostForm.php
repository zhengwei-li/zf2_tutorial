<?php
// Filename: /module/Blog/src/Blog/Form/PostForm.php
namespace Blog\Form;

use Zend\Form\Form;

class PostForm extends Form {

	public function __construct($name = null, $options = array()) {

		//file_put_contents("/Users/zhengwei/Desktop/mylog.txt", __FILE__ . date('Y-m-d H:i:s') . "\r\n", FILE_APPEND);

		parent::__construct($name, $options);

		$this->add(array(
			'name' => 'post-fieldset',
			'type' => 'Blog\Form\PostFieldset',
			'options' => array(
				'use_as_base_fieldset' => true),
		));

		$this->add(array(
			'type' => 'submit',
			'name' => 'submit',
			'attributes' => array(
				'value' => 'Insert new Post',
			),
		));
	}
}