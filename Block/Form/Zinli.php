<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace SarrapiaTech\Zinli\Block\Form;

/**
 * Block for Bank Transfer payment method form
 */
class Zinli extends SarrapiaTech\Zinli\Block\Form\AbstractInstruction
{
    /**
     * Bank transfer template
     *
     * @var string
     */
    protected $_template = 'SarrapiaTech_Zinli::form/zinli.phtml';
}
