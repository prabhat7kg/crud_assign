<?php
namespace Excellence\Hello\Block;
class Delete extends \Magento\Framework\View\Element\Template 
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
         $DeleteFactory = $this->_testFactory->create();
         $DeleteFactory->load($DbRowId['id']);
         $DeleteFactory->delete($DeleteFactory->getId());
	}
}