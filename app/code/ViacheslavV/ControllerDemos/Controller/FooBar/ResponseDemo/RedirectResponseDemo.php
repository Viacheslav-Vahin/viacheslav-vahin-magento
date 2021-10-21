<?php
declare(strict_types=1);

namespace ViacheslavV\ControllerDemos\Controller\FooBar\ResponseDemo;

use Magento\Framework\Controller\Result\Redirect;

class RedirectResponseDemo implements
    \Magento\Framework\App\Action\HttpGetActionInterface
{
    private \Magento\Framework\Controller\Result\RedirectFactory $redirectFactory;

    /**
     * @param \Magento\Framework\Controller\Result\RedirectFactory $redirectFactory
     */
    public function __construct(
        \Magento\Framework\Controller\Result\RedirectFactory $redirectFactory
    ) {
        $this->redirectFactory = $redirectFactory;
    }

    /**
     * Controller Demos
     *
     * @return Redirect
     */
    public function execute() : Redirect
    {
        $result = $this->redirectFactory->create();
        return $result->setUrl('https://github.com/Viacheslav-Vahin/viacheslav-vahin-magento');
    }
}
