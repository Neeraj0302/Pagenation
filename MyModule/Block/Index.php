<?php

namespace Dolphin\MyModule\Block;

use Magento\Framework\View\Element\Template;

use Dolphin\MyModule\Model\ContactFactory;

class Index extends Template
{
    protected $_contactFactory;

    public function __construct(
        Template\Context $context,
        \Dolphin\MyModule\Model\ContactFactory $contactFactory
    ) {
        parent::__construct($context);
        $this->_contactFactory = $contactFactory;
    }

    public function getDataWith()
    {
        return $this->_contactFactory->create()->getCollection();
        
    }
}
