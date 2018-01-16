<?php
namespace Excellence\Hello\Controller\Hello; 
class World extends \Magento\Framework\App\Action\Action
{
    protected $tablepageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $tablepageFactory)
    {
        $this->tablepageFactory = $tablepageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        return $this->tablepageFactory->create();
    }
}
