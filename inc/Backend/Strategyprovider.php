<?php
/**
 * PostFinance Checkout Prestashop
 *
 * This Prestashop module enables to process payments with PostFinance Checkout (https://postfinance.ch/en/business/products/e-commerce/postfinance-checkout-all-in-one.html).
 *
 * @author customweb GmbH (http://www.customweb.com/)
 * @copyright 2017 - 2025 customweb GmbH
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache Software License (ASL 2.0)
 */

/**
 * This provider allows to create a PostFinanceCheckout_ShopRefund_IStrategy.
 * The implementation of
 * the strategy depends on the actual prestashop version.
 */
class PostFinanceCheckoutBackendStrategyprovider
{
    /**
     * Returns the refund strategy to use
     *
     * @return PostFinanceCheckoutBackendIstrategy
     */
    public static function getStrategy()
    {
        return new PostFinanceCheckoutBackendDefaultstrategy();
    }
}
