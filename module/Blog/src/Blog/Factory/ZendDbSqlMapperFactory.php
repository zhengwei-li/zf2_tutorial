<?php

namespace Blog\Factory;
use Blog\Mapper\ZendDbSqlMapper;
use Blog\Model\Post;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Stdlib\Hydrator\ClassMethods;

class ZendDbSqlMapperFactory implements FactoryInterface {
	/**
	 * Create service
	 *
	 * @param ServiceLocatorInterface $serviceLocator
	 *
	 * @return mixed
	 */
	public function createService(ServiceLocatorInterface $serviceLocator) {
		//file_put_contents("/Users/zhengwei/Desktop/mylog.txt", __FILE__ . date('Y-m-d H:i:s') . "\r\n", FILE_APPEND);
		return new ZendDbSqlMapper(
			$serviceLocator->get('Zend\Db\Adapter\Adapter'),
			new ClassMethods(false),
			new Post()
		);
	}
}