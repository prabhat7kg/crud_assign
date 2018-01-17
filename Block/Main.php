<?php
namespace Excellence\Hello\Block; 
class Main extends \Magento\Framework\View\Element\Template 
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
        public function _prepareLayout()
        {
            //Collection show factory and Edit or Delete Data
            $tableOperationFactory = $this->_testFactory->create();
            if($this->getRequest()->getPost('id'))
            {
                $tableOperationFactory->load($this->getRequest()->getPost('id'));
                $tableOperationFactory->setName($this->getRequest()->getPost('name'));
                $tableOperationFactory->setEmail($this->getRequest()->getPost('email'));
                $tableOperationFactory->setMobileNumber($this->getRequest()->getPost('number'));
                $tableOperationFactory->setGender($this->getRequest()->getPost('g'));
                $tableOperationFactory->save();
            }
            else
            {
            
                $tableOperationFactory->setName($this->getRequest()->getPost('name'));
                $tableOperationFactory->setEmail($this->getRequest()->getPost('email'));
                $tableOperationFactory->setMobileNumber($this->getRequest()->getPost('number'));
                $tableOperationFactory->setGender($this->getRequest()->getPost('g'));
                $tableOperationFactory->save();
            }
    
            $this->setTestModel($tableOperationFactory);
            $getCollection = $tableOperationFactory->getCollection();
            return $getCollection;
        }
}
