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

Espo.define('sales:views/quote/fields/account', 'views/fields/link', function (Dep) {

    return Dep.extend({

        forceSelectAllAttributes: true,

        select: function (model) {
            Dep.prototype.select.call(this, model);

            this.model.set('billingAddressStreet', model.get('billingAddressStreet'));
            this.model.set('billingAddressCity', model.get('billingAddressCity'));
            this.model.set('billingAddressState', model.get('billingAddressState'));
            this.model.set('billingAddressCountry', model.get('billingAddressCountry'));
            this.model.set('billingAddressPostalCode', model.get('billingAddressPostalCode'));

            this.model.set('shippingAddressStreet', model.get('shippingAddressStreet'));
            this.model.set('shippingAddressCity', model.get('shippingAddressCity'));
            this.model.set('shippingAddressState', model.get('shippingAddressState'));
            this.model.set('shippingAddressCountry', model.get('shippingAddressCountry'));
            this.model.set('shippingAddressPostalCode', model.get('shippingAddressPostalCode'));
        }

    });
});
