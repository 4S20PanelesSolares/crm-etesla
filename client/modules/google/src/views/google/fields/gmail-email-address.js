/*********************************************************************************
 * The contents of this file are subject to the EspoCRM Google Integration
 * Agreement ("License") which can be viewed at
 * https://www.espocrm.com/google-integration-agreement.
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * sublicense, resell, rent, lease, distribute, or otherwise  transfer rights
 * or usage to the software.
 * 
 * Copyright (C) 2015-2019 Letrium Ltd.
 * 
 * License ID: d7328b509a0c6565cdb459461877aa93
 ***********************************************************************************/

Espo.define('google:views/google/fields/gmail-email-address', 'views/fields/varchar', function (Dep) {

    return Dep.extend({

        setupOptions: function () {
            this.params.options = (this.getUser().get('userEmailAddressList') || []).filter(function (item) {
                return item.includes('@gmail');
            }, this);
        },

    });
});
