<?php
namespace Blog\Factory;

use Blog\Service\PostService;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class PostServiceFactory implements FactoryInterface {

	/**
	 * Create service
	 *
	 * @param ServiceLocatorInterface $serviceLocator
	 * @return mixed
	 */
	public function createService(ServiceLocatorInterface $serviceLocator) {
		//file_put_contents("/Users/zhengwei/Desktop/mylog.txt", __FILE__ . date('Y-m-d H:i:s') . "\r\n", FILE_APPEND);
		return new PostService(
			$serviceLocator->get('Blog\Mapper\PostMapperInterface')
		);
	}
}
