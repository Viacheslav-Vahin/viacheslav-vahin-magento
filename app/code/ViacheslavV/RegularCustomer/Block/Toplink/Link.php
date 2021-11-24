<?php

declare(strict_types=1);

namespace ViacheslavV\RegularCustomer\Block\Toplink;

use Magento\Customer\Block\Account\SortLinkInterface;

class Link extends \Magento\Framework\View\Element\Html\Link implements SortLinkInterface
{

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ){
        parent::__construct($context, $data);
    }

    public function getSortOrder()
    {
        return $this->getData(self::SORT_ORDER);
    }
}
