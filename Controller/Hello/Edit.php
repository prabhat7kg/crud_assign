<?php 
namespace Excellence\Hello\Controller\Hello;
class Edit extends \Magento\Framework\App\Action\Action
{
    protected $editPageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $editPageFactory)
    {
        $this->editPageFactory = $editPageFactory;       
        return parent::__construct($context);
    }
     
    public function execute()
    {
        return $this->editPageFactory->create(); 
    } 
}