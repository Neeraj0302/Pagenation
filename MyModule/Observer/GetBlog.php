<?php

namespace Dolphin\Mymodule\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class GetBlog implements ObserverInterface
{
    public function execute(Observer $observer)
    {

        $blogData = $observer->getEvent()->getBlog();
        //$formData = $observer->getEvent()->getBlog();
        

        $writer = new \Zend_Log_Writer_Stream(BP . '/var/log/blog.log'); //custom log file
        $logger = new \Zend_Log();
        $logger->addWriter($writer);
        $logger->info(print_r($blogData['name'],true));

        return $this;
    }
}
