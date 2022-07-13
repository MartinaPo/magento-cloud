var config = {
    map: {
        '*': {
            custom: 'Magento_Sales/js/custom',
            'qty-counter': 'Magento_Catalog/js/qty-counter'
        },
        'Magento_Sales/js/custom': {
            select2: 'js/select2.min'
        }
    },
    shim: {
        select2: {
            deps: ['jquery']
        }
    }
};