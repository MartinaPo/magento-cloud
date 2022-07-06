var config = {
    map: {
        '*': {
            custom: 'Magento_Sales/js/custom',
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