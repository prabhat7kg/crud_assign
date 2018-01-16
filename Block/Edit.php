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
         $dbRowId = $this->getRequest()->getParams();
         $editFactory = $this->_testFactory->create();
         $editFactory->load($dbRowId['id']);
         return array($editFactory->getName(),$editFactory->getEmail(),$editFactory->getMobileNumber(),$editFactory->getGender());
	}
}