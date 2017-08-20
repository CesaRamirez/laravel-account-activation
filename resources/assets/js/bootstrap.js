import lodash from 'lodash';
import jquery from 'jquery';
import bootstrap from 'bootstrap';

window._ = lodash;

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.$ = window.jQuery = jquery;

    bootstrap;
} catch (e) {}
