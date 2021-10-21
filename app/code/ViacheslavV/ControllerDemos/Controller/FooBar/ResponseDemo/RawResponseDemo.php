<?php
declare(strict_types=1);

namespace ViacheslavV\ControllerDemos\Controller\FooBar\ResponseDemo;

use Magento\Framework\Controller\Result\Raw;

class RawResponseDemo implements
    \Magento\Framework\App\Action\HttpGetActionInterface
{
    private \Magento\Framework\Controller\Result\RawFactory $rawFactory;

    /**
     * @param \Magento\Framework\Controller\Result\RawFactory $rawFactory
     */
    public function __construct(
        \Magento\Framework\Controller\Result\RawFactory $rawFactory
    ) {
        $this->rawFactory = $rawFactory;
    }

    /**
     * Controller Demos
     *
     * @return Raw
     */
    public function execute() : Raw
    {
        $result = $this->rawFactory->create();
        return $result->setHeader('Content-Type', 'text/html')
            ->setContents(
                <<<HTML

                    <html lang='us'>
                    <head>
                        <title>Links to other controllers and a form that submits data</title>
                    </head>
                    <body>
                        <h1>Links to other controllers and a form that submits data</h1>
                        <ul>
                            <li>
                                <a href='/viacheslavv-controller-demos/foobar_responsedemo/redirectresponsedemo' target='_blank'>Redirect_ResponseDemo</a>
                            </li>
                            <li>
                                <a href='/viacheslavv-controller-demos/foobar_responsedemo/forwardresponsedemo'>Forward_ResponseDemo</a>
                            </li>
                        </ul>
                        <form method="get" action="/viacheslavv-controller-demos/foobar_responsedemo/jsonresponsedemo">
                            <input type="text" name="vendor_name" value="ViacheslavV"><br><br>
                            <input type="text" name="module_name" value="ViacheslavV_ControllerDemos"><br><br>
                            <button type="submit">Send</button>
                        </form>
                    </body>
                    </html>

HTML
);
    }
}
