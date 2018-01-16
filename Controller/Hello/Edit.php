<?php /*
namespace Excellence\Hello\Controller\Hello;
class Edit extends \Magento\Framework\App\Action\Action
{
    protected $_testFactory;
    protected $resultPageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Excellence\Hello\Model\TestFactory $testFactory,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->_testFactory = $testFactory;
        $this->resultPageFactory = $resultPageFactory;       
        return parent::__construct($context);
    }
     
    public function execute()
    {
        $data = $this->getRequest()->getParams();
         $test = $this->_testFactory->create();
         $test->load($data['id']);
        //print_r($test->getData());die;
         echo $test->getId();
        return $this->resultPageFactory->create(); 
    }
    public function alldata()
    {
         
    }

}*/



namespace Excellence\Hello\Controller\Hello;
class Edit extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;
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