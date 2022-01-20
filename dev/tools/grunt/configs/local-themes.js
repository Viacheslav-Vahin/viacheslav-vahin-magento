/**
 * Magento/luma - en_US
 * grunt exec:luma && grunt less:luma
 * grunt exec:luma && grunt less:luma && grunt watch
 *
 * ViacheslavV/luma - uk_UA
 * grunt exec:viacheslavv_luma_uk_ua && grunt less:viacheslavv_luma_uk_ua
 * grunt exec:viacheslavv_luma_uk_ua && grunt less:viacheslavv_luma_uk_ua && grunt watch:viacheslavv_luma_uk_ua
 */
module.exports = {
    viacheslavv_luma_uk_ua: {
        area: 'frontend',
        name: 'ViacheslavV/luma',
        locale: 'uk_UA',
        files: [
            'css/styles-m',
            'css/styles-l'
        ],
        dsl: 'less'
    }
};
