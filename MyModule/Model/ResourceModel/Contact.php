<?php

namespace Dolphin\MyModule\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Contact extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('dolphin_mymodule_contact', 'id');
    }
}