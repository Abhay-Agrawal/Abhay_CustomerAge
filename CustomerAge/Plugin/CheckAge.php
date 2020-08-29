<?php

namespace Abhay\CustomerAge\Plugin;

class CheckAge
{
  public $helper;
  protected $request;
  protected $messageManager;
  protected $redirectFactory;

  public function __construct(
      \Abhay\CustomerAge\Helper\Data $helper,
      \Magento\Framework\App\Request\Http $request,
      \Magento\Framework\Message\ManagerInterface $messageManager,
      \Magento\Framework\Controller\Result\RedirectFactory $redirectFactory
  ) {
      $this->helper = $helper;
      $this->request = $request;
      $this->messageManager = $messageManager;
      $this->redirectFactory = $redirectFactory;
  }

  public function aroundExecute(\Magento\Customer\Controller\Account\CreatePost $subject, callable $proceed)
  {
    $enable = $this->helper->isEnabled();
    $age=$this->helper->isAge();
    $post=$this->request->getPost();
    if ($post['age'] < $age && $enable)
    {
        $this->messageManager->addError(__('You are not adult'));
        return $this->redirectFactory->create()->setPath('customer/account/create');
    }
    return $proceed();
   }

}
