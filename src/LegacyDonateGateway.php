<?php

namespace Omnipay\Alipay;

use Omnipay\Alipay\Requests\LegacyDonatePurchaseRequest;

/**
 * Class LegacyDonateGateway
 * @package Omnipay\Alipay
 * @link    https://doc.open.alipay.com/docs/doc.htm?treeId=108&articleId=103950&docType=1
 */
class LegacyDonateGateway extends AbstractLegacyGateway
{

    /**
     * Get gateway display name
     *
     * This can be used by carts to get the display name for each gateway.
     */
    public function getName()
    {
        return 'Alipay Legacy Donate Gateway';
    }


    /**
     * @param array $parameters
     *
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function purchase(array $parameters = [])
    {
        return $this->createRequest(LegacyDonatePurchaseRequest::class, $parameters);
    }
}
