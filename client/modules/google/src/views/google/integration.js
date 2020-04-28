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

Espo.define('google:views/google/integration', ['views/admin/integrations/oauth2', 'model'], function (Dep, Model) {

    return Dep.extend({

        products: [],

        setup: function () {
            this.integration = this.options.integration;

            this.helpText = false;
            if (this.getLanguage().has(this.integration, 'help', 'Integration')) {
                this.helpText = this.translate(this.integration, 'help', 'Integration');
            }

            this.fieldList = [];
            this.fields = [];

            this.dataFieldList = [];

            this.model = new Model();
            this.model.id = this.integration;
            this.model.name = 'Integration';
            this.model.urlRoot = 'Integration';

            this.model.defs = {
                fields: {
                    enabled: {
                        required: true,
                        type: 'bool'
                    },
                }
            };

            this.wait(true);

            this.fields = this.getMetadata().get('integrations.' + this.integration + '.fields');

            Object.keys(this.fields).forEach(function (name) {
                this.model.defs.fields[name] = this.fields[name];
                this.dataFieldList.push(name);
            }, this);
            this.products = this.getMetadata().get('integrations.' + this.integration + '.products');
            this.model.populateDefaults();

            this.listenToOnce(this.model, 'sync', function () {
                this.createFieldView('bool', 'enabled');
                Object.keys(this.fields).forEach(function (name) {
                    this.createFieldView(this.fields[name]['type'], name, null, this.fields[name]);
                }, this);

                this.wait(false);
            }, this);

            this.model.fetch();
        }
    });
});
