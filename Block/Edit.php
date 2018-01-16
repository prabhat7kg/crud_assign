<?php
namespace Excellence\Hello\Block;
class Edit extends \Magento\Framework\View\Element\Template 
{ 
	protected $_testFactory;
    public function __construct(
        \Magento\Framework\View\Element\Template\context $context,
        \Excellence\Hello\Model\TestFactory $testFactory
    )
    {
        $this->_testFactory = $testFactory;
        parent::__construct($context);
    }
	public function _preparelayout()
	{
         $data = $this->getRequest()->getParams();
         $test = $this->_testFactory->create();
         //print_r($data);
         $test->load($data['id']);

        //print_r($test->getData());die;
         //echo $test->getId();
          //echo $this->getRequest()->getPost('email');
         return array($test->getName(),$test->getEmail(),$test->getMobileNumber(),$test->getGender());
	}
}