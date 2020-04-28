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

Espo.define('advanced:views/report/record/edit', ['views/record/edit', 'advanced:views/report/record/detail', 'advanced:report-helper'], function (Dep, Detail, ReportHelper) {

    return Dep.extend({

        setup: function () {
            if (!this.model.get('type')) {
                throw new Error();
            }
            if (this.model.get('isInternal')) {
                this.layoutName = 'detail';
            } else {
                this.layoutName = 'detail' + this.model.get('type');
            }

            this.reportHelper = new ReportHelper(
                this.getMetadata(),
                this.getLanguage(),
                this.getDateTime(),
                this.getConfig(),
                this.getPreferences()
            );

            if (this.model.get('type') == 'List' && this.model.isNew() && !this.model.has('columns')) {
                if (this.getMetadata().get('entityDefs.' + this.model.get('entityType') + '.fields.name')) {
                    this.model.set('columns', ['name']);
                }
            }

            Dep.prototype.setup.call(this);

            this.controlChartColorsVisibility();
            this.listenTo(this.model, 'change', function () {
                if (this.model.hasChanged('chartType') || this.model.hasChanged('groupBy') || this.model.hasChanged('columns')) {
                    this.controlChartColorsVisibility();
                }
            }, this);

            if (
                this.getMetadata().get(['scopes', 'ReportCategory', 'disabled'])
                ||
                !this.getAcl().checkScope('ReportCategory', 'read')
            ) {
                this.hideField('category');
            }

            this.setupEmailSendingFieldsVisibility();

            if (this.getAcl().get('portalPermission') === 'no') {
                this.hideField('portals');
            }

            this.controlChartTypeFieldOptions();
            this.listenTo(this.model, 'change:groupBy', this.controlChartTypeFieldOptions);
        },

        controlChartTypeFieldOptions: function () {
            var countString = (this.model.get('groupBy') || []).length.toString();
            var optionList = this.getMetadata().get(['entityDefs', 'Report', 'fields', 'chartType', 'optionListMap', countString]);
            this.setFieldOptionList('chartType', optionList);
        },

        setupEmailSendingFieldsVisibility: function () {
            Detail.prototype.setupEmailSendingFieldsVisibility.call(this);
        },

        controlEmailSendingIntervalField: function () {
            Detail.prototype.controlEmailSendingIntervalField.call(this);
        },

        controlChartColorsVisibility: function () {
            var chartType = this.model.get('chartType');

            if (!chartType || chartType === '') {
                this.hideField('chartColor');
                this.hideField('chartColorList');
                return;
            }

            if ((this.model.get('groupBy') || []).length > 1) {
                this.hideField('chartColor');
                this.showField('chartColorList');
                return;
            }

            if (chartType === 'Pie') {
                this.hideField('chartColor');
                this.showField('chartColorList');
                return;
            }

            if (~['Line', 'BarHorizontal', 'BarVertical'].indexOf(chartType)) {
                var columnList = (this.model.get('columns') || []).filter(function (item) {
                    return this.reportHelper.isColumnNumeric(item, this.model.get('entityType'));
                }, this);
                if (columnList.length > 1) {
                    this.hideField('chartColor');
                    this.showField('chartColorList');
                    return;
                }
            }

            this.showField('chartColor');
            this.hideField('chartColorList');
        }

    });
});
