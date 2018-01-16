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
         $DbRowId = $this->getRequest()->getParams();
         $EditFactory = $this->_testFactory->create();
         $EditFactory->load($DbRowId['id']);
         return array($EditFactory->getName(),$EditFactory->getEmail(),$EditFactory->getMobileNumber(),$EditFactory->getGender());
	}
}