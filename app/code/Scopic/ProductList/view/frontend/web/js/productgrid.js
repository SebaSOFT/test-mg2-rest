define([
    'jquery',
    'ko',
    'uiComponent',
    'mage/storage'
], function ($, _, Component, storage) {
    'use strict';
    return Component.extend({
        initialize: function () {
            this._super();
            alert("READY");
            this.sayHello = "Hello this is content populated with KO!";
        }
    });
});