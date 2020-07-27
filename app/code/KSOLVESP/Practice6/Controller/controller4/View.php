<?php

namespace KSOLVESP\Practice6\Controller\controller4;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Result\Page;

class View extends Action
{
    public function execute()
    {
        $page=$this->resultFactory->create(ResultFactory::TYPE_PAGE);
        return $page;

    }
}

