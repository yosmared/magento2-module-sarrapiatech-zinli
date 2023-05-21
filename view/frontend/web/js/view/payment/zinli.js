define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'zinli',
                component: 'SarrapiaTech_Zinli/js/view/payment/method-renderer/zinli-method'
            }
        );
        return Component.extend({});
    }
);