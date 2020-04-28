/*********************************************************************************
 * The contents of this file are subject to the EspoCRM Sales Pack
 * Agreement ("License") which can be viewed at
 * https://www.espocrm.com/sales-pack-agreement.
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * sublicense, resell, rent, lease, distribute, or otherwise  transfer rights
 * or usage to the software.
 * 
 * Copyright (C) 2015-2019 Letrium Ltd.
 * 
 * License ID: 48b45b7d11e497058130ec49a7811186
 ***********************************************************************************/

Espo.define('sales:views/invoice/fields/sales-order', 'views/fields/link', function (Dep) {

    return Dep.extend({

        getSelectFilters: function () {
            var data = {};
            if (this.model.get('accountId')) {
                data.account = {
                    type: 'equals',
                    attribute: 'accountId',
                    value: this.model.get('accountId'),
                    data: {
                        type: 'is',
                        nameValue: this.model.get('accountName'),
                    }
                };
            }
            if (this.model.get('opportunityId')) {
                data.opportunity = {
                    type: 'equals',
                    attribute: 'opportunityId',
                    value: this.model.get('opportunityId'),
                    data: {
                        type: 'is',
                        nameValue: this.model.get('opportunityName'),
                    }
                };
            }
            if (this.model.get('salesOrderId')) {
                data.salesOrder = {
                    type: 'equals',
                    attribute: 'salesOrderId',
                    value: this.model.get('salesOrderId'),
                    data: {
                        type: 'is',
                        nameValue: this.model.get('salesOrderName'),
                    }
                };
            }
            return data;
        },

        select: function (model) {
            Dep.prototype.select.call(this, model);

            if (this.model.isNew()) {
                this.ajaxGetRequest('Invoice/action/getAttributesFromSalesOrder', {
                    salesOrderId: model.id
                }).success(function (attributes) {
                    var a = {};
                    for (var item in attributes) {
                        if (~['amountCurrency'].indexOf(item)) continue;
                        if (~['name'].indexOf(item)) {
                            if (this.model.get(item)) continue;
                        }
                        a[item] = attributes[item];
                    }
                    this.model.set(a);
                    this.model.set('amountCurrency', attributes.amountCurrency, {ui: true});
                }.bind(this));
            }
        }
    });
});
