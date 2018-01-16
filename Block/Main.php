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
        /*public function getHelloCollection()
        {
            
            //session_destroy();
            //$num=9911471479;
            $test = $this->_testFactory->create();
            //echo $test->setName($this->getRequest()->getPost('name'));
            
            $submit=$this->getRequest()->getPost('add');
            if(isset($submit))
            {
            //$test->loadByMobileNumber($this->getRequest()->getPost('number'));
            $test->setMobileNumber($this->getRequest()->getPost('number'));
            $test->save();
            $this->setTestModel($test);
            //echo $test->setMobileNumber($this->getRequest()->getPost('number'));
            }
            //$test->setId('Title');
            $helloCollection = $test->getCollection();
            return $helloCollection;
            
        }*/
        public function _prepareLayout()
        {

            //$data = $this->getRequest()->getParams();
            $test = $this->_testFactory->create();
            //print_r($this->getRequest()->getParams());
            //echo "$test->getId()";
            if($this->getRequest()->getPost('id'))
            {
                $test->load($this->getRequest()->getPost('id'));
                $test->setName($this->getRequest()->getPost('name'));
                $test->setEmail($this->getRequest()->getPost('email'));
                $test->setMobileNumber($this->getRequest()->getPost('number'));
                $test->setGender($this->getRequest()->getPost('g'));
                $test->save();
                //print_r($test->getData());
            }else{
            
                $test->setName($this->getRequest()->getPost('name'));
                $test->setEmail($this->getRequest()->getPost('email'));
                $test->setMobileNumber($this->getRequest()->getPost('number'));
                $test->setGender($this->getRequest()->getPost('g'));
                $test->save();}
            
            
            $this->setTestModel($test);
            $helloCollection = $test->getCollection();
            return $helloCollection;
        }
}
