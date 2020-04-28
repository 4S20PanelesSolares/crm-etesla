/*********************************************************************************
 * The contents of this file are subject to the EspoCRM Advanced Pack
 * Agreement ("License") which can be viewed at
 * https://www.espocrm.com/advanced-pack-agreement.
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * sublicense, resell, rent, lease, distribute, or otherwise  transfer rights
 * or usage to the software.
 * 
 * Copyright (C) 2015-2019 Letrium Ltd.
 * 
 * License ID: b05a39a2254aff91765cddbd4982f2af
 ***********************************************************************************/

Espo.define('advanced:views/report/fields/columns', ['views/fields/multi-enum', 'advanced:views/report/fields/group-by'], function (Dep, GroupBy) {

    return Dep.extend({

        fieldTypeList: [
            'currencyConverted',
            'int',
            'float',
            'duration',
            'enumInt',
            'enumFloat',
            'enum',
            'varchar',
            'link',
            'date',
            'datetime',
            'datetimeOptional',
            'email',
            'phone',
            'url',
        ],

        numericFieldTypeList: [
            'currencyConverted',
            'int',
            'float',
            'enumInt',
            'enumFloat',
            'duration',
        ],

        setupOptions: function () {
            var entityType = this.model.get('entityType');

            var fields = this.getMetadata().get(['entityDefs', entityType, 'fields']) || {};

            var skipForeing = false;
            var version = this.getConfig().get('version') || '';

            var arr = version.split('.');
            if (version !== 'dev' && arr.length > 2 && parseInt(arr[0]) * 100 + parseInt(arr[1]) < 506) {
                skipForeing = true;
            }

            var noEmailField = false;
            if (version !== 'dev' && arr.length > 2 && parseInt(arr[0]) * 100 + parseInt(arr[1]) * 10 +  parseInt(arr[2]) < 562) {
                noEmailField = true;
            }

            var itemList = [];

            itemList.push('COUNT:id');

            Object.keys(fields).forEach(function (field) {
                if (fields[field].disabled) return;
                if (fields[field].directAccessDisabled) return;
                if (fields[field].reportDisabled) return;
                if (this.getFieldManager().isScopeFieldAvailable && !this.getFieldManager().isScopeFieldAvailable(entityType, field)) {
                    return;
                }
                if (~this.numericFieldTypeList.indexOf(fields[field].type)) {
                    itemList.push('SUM:' + field);
                    itemList.push('MAX:' + field);
                    itemList.push('MIN:' + field);
                    itemList.push('AVG:' + field);
                }
            }, this);

            var groupBy = this.model.get('groupBy') || [];

            groupBy.forEach(function (foreignGroup) {
                if (!skipForeing) {
                    var links = this.getMetadata().get(['entityDefs', entityType, 'links']) || {};
                    var linkList = Object.keys(links);
                    linkList.sort(function (v1, v2) {
                        return this.translate(v1, 'links', entityType).localeCompare(this.translate(v2, 'links', entityType));
                    }.bind(this));
                    linkList.forEach(function (link) {
                        if (links[link].type != 'belongsTo') return;
                        if (link !== foreignGroup) return;
                        var scope = links[link].entity;
                        if (!scope) return;
                        if (links[link].disabled) return;

                        var fields = this.getMetadata().get(['entityDefs', scope, 'fields']) || {};
                        var fieldList = Object.keys(fields);
                        fieldList.sort(function (v1, v2) {
                            return this.translate(v1, 'fields', scope).localeCompare(this.translate(v2, 'fields', scope));
                        }.bind(this));

                        fieldList.forEach(function (field) {
                            if (fields[field].disabled) return;
                            if (fields[field].directAccessDisabled) return;
                            if (fields[field].reportDisabled) return;
                            if (this.getFieldManager().isScopeFieldAvailable && !this.getFieldManager().isScopeFieldAvailable(scope, field)) {
                                return;
                            }
                            if (~this.fieldTypeList.indexOf(fields[field].type)) {
                                if (fields[field].type === 'enum' && field.substr(-8) === 'Currency') return;
                                if (noEmailField && fields[field].type === 'email') return;
                                if (noEmailField && fields[field].type === 'phone') return;
                                if (field === 'name') return;
                                itemList.push(link + '.' + field);
                            }
                        }, this);
                    }, this);
                }
            }, this);

            this.params.options = itemList;
        },

        setupTranslatedOptions: function (customEntityType) {
            GroupBy.prototype.setupTranslatedOptions.call(this, customEntityType);

            this.params.options.forEach(function (item) {
                if (item == 'COUNT:id') {
                    this.translatedOptions[item] = this.translate('COUNT', 'functions', 'Report').toUpperCase();
                }
            }, this);
        },

        setup: function () {
            Dep.prototype.setup.call(this);

            this.setupOptions();
            this.setupTranslatedOptions();

            this.listenTo(this.model, 'change', function (model) {
                if (model.hasChanged('groupBy')) {
                    this.setupOptions();
                    this.setupTranslatedOptions();
                    this.reRender();
                }
            }, this);
        }

    });
});
