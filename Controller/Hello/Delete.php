<?php
namespace Excellence\Hello\Controller\Hello;
class Delete extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;
    //protected $context;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;       
        return parent::__construct($context);
    }
     
    public function execute()
    {
        
        return $this->resultPageFactory->create(); 
    } 
}