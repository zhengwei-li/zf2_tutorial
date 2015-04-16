<?php

namespace Blog;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements ConfigProviderInterface, AutoloaderProviderInterface {

	/**
	 * Return an array for passing to Zend\Load\AutoloaderFactory
	 *
	 * @return array
	 */
	public function getAutoloaderConfig() {
		return array(
			'Zend\Loader\StandardAutoloader' => array(
				'namespaces' => array(
					// Autoload all classes from namespace 'Blog' from '/module/Blog/src/Blog'
					__NAMESPACE__=> __DIR__ . '/src/' . __NAMESPACE__,
				),
			),
		);
	}

	/**
	 * Return configuration to merge with application configuration
	 *
	 * @return array|\Traverable
	 */
	public function getConfig() {
		return include __DIR__ . '/config/module.config.php';
	}
}
