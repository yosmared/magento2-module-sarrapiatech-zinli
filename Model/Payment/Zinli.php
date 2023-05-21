<?php
/**
 * Copyright © 2023 All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace SarrapiaTech\Zinli\Model\Payment;

class Zinli extends \Magento\Payment\Model\Method\AbstractMethod
{

    const PAYMENT_METHOD_ZINLI_CODE = 'zinli';
    protected $_code = self::PAYMENT_METHOD_ZINLI_CODE;
    protected $_isOffline = true;

    protected $_formBlockType = SarrapiaTech\Zinli\Block\Form\Zinli::class;

    public function isAvailable(
        \Magento\Quote\Api\Data\CartInterface $quote = null
    ) {
        return parent::isAvailable($quote);
    }

    public function getInstructions()
    {
        return trim($this->getConfigData('instructions'));
    }
}

