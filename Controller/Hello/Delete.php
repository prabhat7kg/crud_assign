<?php
namespace Excellence\Hello\Controller\Hello;
class Delete extends \Magento\Framework\App\Action\Action
{
    protected $deletePageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $deletePageFactory)
    {
        $this->deletePageFactory = $deletePageFactory;       
        return parent::__construct($context);
    }
     
    public function execute()
    {
        return $this->deletePageFactory->create(); 
    } 
}