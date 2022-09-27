<?php

namespace Dolphin\MyModule\Model\ResourceModel\Contact;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'id';
	protected $_eventPrefix = 'dolphin_mymodule_post_collection';
	protected $_eventObject = 'post_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Dolphin\MyModule\Model\Contact', 'Dolphin\MyModule\Model\ResourceModel\Contact');
	}

}