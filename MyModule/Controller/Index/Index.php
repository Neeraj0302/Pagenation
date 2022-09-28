<?php


namespace Dolphin\MyModule\Controller\Index;

use Magento\Framework\DataObject;
use Magento\Framework\App\Action\Action;

class Index extends Action
{
    public function execute()
    {
        $blogData = new DataObject(['blog_id' => '1', 'blog_title' => 'Blog Title']);
        $this->_eventManager->dispatch('dolphin_MyModule_blog',
            [
                'blog' => $blogData
            ]
        );
        echo "Dolphin MyModule Event";exit;
    }
}


// namespace Dolphin\MyModule\Controller\Index;

// use Magento\Framework\App\Action\Action;

// class Index extends Action
// {
//     protected $_resultPageFactory;

//     public function __construct(
//         \Magento\Framework\App\Action\Context $context,
//         \Magento\Framework\View\Result\PageFactory $resultPageFactory
//     ) {
//         $this->_resultPageFactory = $resultPageFactory;
//         parent::__construct($context);
//     }

//     public function execute()
//     {
//         $resultPage = $this->_resultPageFactory->create();
//         //$resultPage->getConfig()->getTitle()->set(__('Custom Pagination'));
        
//         return $resultPage;
//     }
// }