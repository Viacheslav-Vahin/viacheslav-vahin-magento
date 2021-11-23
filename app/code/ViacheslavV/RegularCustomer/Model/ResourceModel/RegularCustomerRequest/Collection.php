<?php
declare(strict_types=1);

namespace ViacheslavV\RegularCustomer\Model\ResourceModel\RegularCustomerRequest;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @inheritDoc
     */
    protected function _construct(): void
    {
        parent::_construct();
        $this->_init(
            \ViacheslavV\RegularCustomer\Model\RegularCustomerRequest::class,
            \ViacheslavV\RegularCustomer\Model\ResourceModel\RegularCustomerRequest::class
        );
    }
}
