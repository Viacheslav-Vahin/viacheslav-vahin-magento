<?php

declare(strict_types=1);

namespace ViacheslavV\RegularCustomer\Block\Toplink;

use Magento\Customer\Block\Account\SortLinkInterface;

class Link extends \Magento\Framework\View\Element\Html\Link implements SortLinkInterface
{
    /**
     * @var \Magento\Framework\View\Element\Template\Context $context
     */
    private \Magento\Framework\View\Element\Template\Context $context;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->context = $context;
    }

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
