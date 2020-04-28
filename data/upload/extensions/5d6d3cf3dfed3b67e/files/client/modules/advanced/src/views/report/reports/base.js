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

Espo.define('advanced:views/report/reports/base', 'view', function (Dep) {

    return Dep.extend({

        template: 'advanced:report/reports/base',

        data: function () {
            return {
                hasSendEmail: this.getAcl().checkScope('Email'),
                hasRuntimeFilters: this.hasRuntimeFilters()
            }
        },

        events: {
            'click [data-action="run"]': function () {
                this.run();
                this.afterRun();
            },
            'click [data-action="refresh"]': function () {
                this.run();
            },
            'click [data-action="exportReport"]': function () {
                this.export();
            },
            'click [data-action="sendInEmail"]': function () {
                this.actionSendInEmail();
            },
            'click [data-action="showSubReport"]': function (e) {
                var groupValue = $(e.currentTarget).data('group-value');
                var groupIndex = $(e.currentTarget).data('group-index');
                this.showSubReport(groupValue, groupIndex);
            }
        },

        showSubReport: function (groupValue, groupIndex, groupValue2, column) {
            var reportId = this.model.id;
            var entityType = this.model.get('entityType');

            if (this.result.isJoint) {
                reportId = this.result.columnReportIdMap[column];
                entityType = this.result.columnEntityTypeMap[column];
            }

            this.getCollectionFactory().create(entityType, function (collection) {
                collection.url = 'Report/action/runList?id=' + reportId + '&groupValue=' + encodeURIComponent(groupValue);

                if (groupIndex) {
                    collection.url += '&groupIndex=' + groupIndex;
                }
                if (groupValue2 !== undefined) {
                    collection.url += '&groupValue2=' + encodeURIComponent(groupValue2);
                }

                if (this.hasRuntimeFilters()) {
                    collection.where = this.lastFetchedWhere;
                }
                collection.maxSize = this.getConfig().get('recordsPerPage') || 20;
                this.notify('Please wait...');
                collection.fetch().then(function () {
                    this.createView('subReport', 'advanced:views/report/modals/sub-report', {
                        model: this.model,
                        result: this.result,
                        groupValue: groupValue,
                        collection: collection,
                        groupIndex: groupIndex,
                        groupValue2: groupValue2,
                        column: column,
                    }, function (view) {
                        view.notify(false);
                        view.render();
                    });
                }.bind(this));
            }, this);
        },

        initReport: function () {
            this.once('after:render', function () {
                this.run();
            }, this);

            this.chartType = this.model.get('chartType');

            if (this.hasRuntimeFilters()) {
                this.createRuntimeFilters();
            }
        },

        afterRun: function () {
        },

        createRuntimeFilters: function () {
            var filtersData = this.getStorage().get('state', this.getFilterStorageKey()) || null;

            this.createView('runtimeFilters', 'advanced:views/report/runtime-filters', {
                el: this.options.el + ' .report-runtime-filters-contanier',
                entityType: this.model.get('entityType'),
                filterList: this.model.get('runtimeFilters'),
                filtersData: filtersData
            });

        },

        hasRuntimeFilters: function () {
            if ((this.model.get('runtimeFilters') || []).length) {
                return true;
            }
        },

        getRuntimeFilters: function () {
            if (this.hasRuntimeFilters()) {
                this.lastFetchedWhere = this.getView('runtimeFilters').fetch();
                return this.lastFetchedWhere;
            }
            return null;
        },

        getFilterStorageKey: function () {
            return 'report-filters-' + this.model.id;
        },

        storeRuntimeFilters: function (where) {
            if (this.hasRuntimeFilters()) {
                if (!this.getView('runtimeFilters')) return;
                var filtersData = this.getView('runtimeFilters').fetchRaw();

                this.getStorage().set('state', this.getFilterStorageKey(), filtersData);
            }
        },

        actionSendInEmail: function () {
            Espo.Ui.notify(this.translate('pleaseWait', 'messages'));
            this.ajaxPostRequest('Report/action/getEmailAttributes', {
                id: this.model.id,
                where: this.getRuntimeFilters()
            }).then(function (attributes) {
                Espo.Ui.notify(false);
                this.createView('compose', 'views/modals/compose-email', {
                    attributes: attributes,
                    keepAttachmentsOnSelectTemplate: true,
                    signatureDisabled: true
                }, function (view) {
                    view.render();
                }, this);
            }.bind(this));
        }

    });
});
