import lodash from 'lodash';
window._ = lodash;

try {
    window.$ = window.jQuery = require('jquery');
    window.Popper = require('popper.js').default;
    require('bootstrap');
} catch(e) {}
