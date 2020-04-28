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

Espo.define('advanced:views/report/list', 'crm:views/document/list', function (Dep) {

    return Dep.extend({

        createButton: false,

        quickCreate: false,

        currentCategoryId: null,

        currentCategoryName: '',

        categoryScope: 'ReportCategory',

        categoryField: 'category',

        categoryFilterType: 'inCategory',

        getCreateAttributes: function () {
            return {
                categoryId: this.currentCategoryId,
                categoryName: this.currentCategoryName
            };
        },

        actionCreate: function (data) {
            this.createView('createModal', 'advanced:views/report/modals/create', {}, function (view) {
                view.render();

                this.listenToOnce(view, 'create', function (data) {
                    view.close();
                    this.getRouter().dispatch('Report', 'create', {
                        entityType: data.entityType,
                        type: data.type,
                        categoryId: this.currentCategoryId,
                        categoryName: this.currentCategoryName,
                        returnUrl: this.lastUrl || '#' + this.scope,
                        returnDispatchParams: {
                            controller: this.scope,
                            action: null,
                            options: {
                                isReturn: true
                            }
                        }
                    });
                    this.getRouter().navigate('#Report/create/entityType=' + data.entityType + '&type=' + data.type, {trigger: false});
                }, this);
            });
        }
    });
});
