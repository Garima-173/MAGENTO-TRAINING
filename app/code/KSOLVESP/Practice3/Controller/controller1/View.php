<?php
namespace KSOLVESP\Practice3\Controller\controller1;
// JSON FORMAT PRINT ====================================
//
//
// use Magento\Framework\Controller\Result\Json;
// use Magento\Framework\App\Action\Action;
// use Magento\Framework\Controller\ResultFactory;
// //action class provide implemwntation of execute.resultFactory used to return in execute.. create is method of resultFactory class and create instance of json. 
// class View extends Action
// {
//     public function execute()
//     {
        
//         $jsonResult = $this->resultFactory->create(ResultFactory::TYPE_JSON);
//         $jsonResult->setData([
//             'message' => 'Hello world!!!!IM Garima'
//         ]);
//         return $jsonResult;
//     }
// }

// PAGE RETURN
use Magento\Framework\App\Action\Action;
//use Magento\Framework\Controller\ResultFactory;
//use Magento\Framework\View\Result\Page;

 class View extends Action
  {
     public function execute()
      {

			//return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    	  		 echo "Hello World";
					exit;
		}
 }
