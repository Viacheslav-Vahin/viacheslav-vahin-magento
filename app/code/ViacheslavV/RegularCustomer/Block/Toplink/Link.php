<?php

declare(strict_types=1);

namespace ViacheslavV\RegularCustomer\Block\Toplink;

use Magento\Customer\Block\Account\SortLinkInterface;

class Link extends \Magento\Framework\View\Element\Html\Link implements SortLinkInterface
{

    /**
     * Order custom link
     *
     * @return int
     */
    public function getSortOrder()
    {
        return $this->getData(self::SORT_ORDER);
    }
}
