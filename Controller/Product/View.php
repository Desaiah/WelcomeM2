<?php

namespace Test\Local\Controller\Catalog\Product;

class View extends \Magento\Catalog\Controller\Product\View
{    
    /**
     * Product view action
     *
     * @return \Magento\Framework\Controller\Result\Forward|\Magento\Framework\Controller\Result\Redirect
     */
    public function execute()
    {

        // logging to test override    
        $logger = \Magento\Framework\App\ObjectManager::getInstance()->get('\Psr\Log\LoggerInterface');
        $logger->debug('Controller Override Test');

        echo "In"; exit;
    }    
}
?>