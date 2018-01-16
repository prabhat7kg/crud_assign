<?php
namespace Excellence\Hello\Block;
//echo "hello";
class Delete extends \Magento\Framework\View\Element\Template 
{ 
    //die("hell");
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
         //die('hello');
         $test = $this->_testFactory->create();
         $test->load($data['id']);
         $id=$test->getId();
         $test->delete($test->getId());
         //echo "$id";
         return $id;
         //die("hello");
	}
}