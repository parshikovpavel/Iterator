<?php
class PostCollection implements IteratorAggregate {
	/**
	 * Массив постов
	 * @var Post[]
	 */
	private $_posts = [];
	/**
	 * Добавление поста
	 * @param Post $post пост
	 * @return PostCollection $this
	 */
	public function add(Post $post)
	{
		$this->_posts[] = $post;
		return $this;
	}
	/**
	 * Возврат внешнего итератора.
	 * Требуется интерфейсом IteratorAggregate
	 * @return \ArrayIterator
	 */
	public function getIterator()
    {
        return new ArrayIterator($this->_posts);
    }
	
}
