<?php

namespace Dolphin\MyModule\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class Search extends Action
{
    protected $_resultPageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Dolphin\MyModule\Model\ResourceModel\Contact\CollectionFactory $collectionFactory
    ) {
        $this->_collectionFactory = $collectionFactory;
        $this->_resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        // $resultPage = $this->_resultPageFactory->create();
            
            $search_text = $this->getRequest()->getPost('search_text');        
            $collection = $this->_collectionFactory->create();
    
            $collection->addFieldToFilter('name',['like' => '%'.$search_text.'%']);
            
            $resultJson = $this->resultFactory->create(ResultFactory::TYPE_JSON);
            return $resultJson->setData($collection->getData());
            
    
    }
}