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
         $dbRowId = $this->getRequest()->getParams();
         $deleteFactory = $this->_testFactory->create();
         $deleteFactory->load($dbRowId['id']);
         $deleteFactory->delete($deleteFactory->getId());
	}
}