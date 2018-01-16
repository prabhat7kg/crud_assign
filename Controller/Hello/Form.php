<?php
namespace Excellence\Hello\Controller\Hello;
class Form extends \Magento\Framework\App\Action\Action
{
    protected $formPageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $formPageFactory)
    {
        $this->formPageFactory = $formPageFactory;       
        return parent::__construct($context);
    }
     
    public function execute()
    {
        return $this->formPageFactory->create(); 
    } 
}