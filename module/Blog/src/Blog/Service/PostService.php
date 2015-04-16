<?php

namespace Blog\Service;

use Blog\Mapper\PostMapperInterface;
use Blog\Model\PostInterface;

class PostService implements PostServiceInterface {

	/**
	 * @var \Blog\Mapper\PostMapperInterface
	 */
	protected $postMapper;

	/**
	 * @param PostMapperInterface $postMapper
	 */
	public function __construct(PostMapperInterface $postMapper) {
		$this->postMapper = $postMapper;
		//file_put_contents("/Users/zhengwei/Desktop/mylog.txt", __FILE__ . date('Y-m-d H:i:s') . "\r\n", FILE_APPEND);
	}

	/**
	 * {@inheritDoc}
	 */
	public function findAllPosts() {
		return $this->postMapper->findAll();
	}

	/**
	 * {@inheritDoc}
	 */
	public function findPost($id) {
		return $this->postMapper->find($id);
	}

	/**
	 * {@inheritDoc}
	 */
	public function savePost(PostInterface $post) {
		return $this->postMapper->save($post);
	}

	/**
	 * {@inheritDoc}
	 */
	public function deletePost(PostInterface $post) {
		return $this->postMapper->delete($post);
	}
}