<?php

namespace KSOLVESP\Practice5\Controller\controller3;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Result\Page;

class View extends Action
{
    public function execute()
    {
        $page=$this->resultFactory->create(ResultFactory::TYPE_PAGE);
       $block=$page->getLayout()->getBlock('MYBLOCK');

        $block->setData('Practice Number','five');
        return $page;

    }
}

