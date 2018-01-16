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
            $TableOperationFactory = $this->_testFactory->create();
            if($this->getRequest()->getPost('id'))
            {
                $TableOperationFactory->load($this->getRequest()->getPost('id'));
                $TableOperationFactory->setName($this->getRequest()->getPost('name'));
                $TableOperationFactory->setEmail($this->getRequest()->getPost('email'));
                $TableOperationFactory->setMobileNumber($this->getRequest()->getPost('number'));
                $TableOperationFactory->setGender($this->getRequest()->getPost('g'));
                $TableOperationFactory->save();
            }
            else
            {
            
                $TableOperationFactory->setName($this->getRequest()->getPost('name'));
                $TableOperationFactory->setEmail($this->getRequest()->getPost('email'));
                $TableOperationFactory->setMobileNumber($this->getRequest()->getPost('number'));
                $TableOperationFactory->setGender($this->getRequest()->getPost('g'));
                $TableOperationFactory->save();
            }
    
            $this->setTestModel($TableOperationFactory);
            $GetCollection = $TableOperationFactory->getCollection();
            return $GetCollection;
        }
}
