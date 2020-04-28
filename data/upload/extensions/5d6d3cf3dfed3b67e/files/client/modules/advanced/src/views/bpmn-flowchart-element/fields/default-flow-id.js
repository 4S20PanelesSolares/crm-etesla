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

Espo.define('advanced:views/bpmn-flowchart-element/fields/default-flow-id', 'views/fields/enum', function (Dep) {

    return Dep.extend({

        data: function () {
            var data = Dep.prototype.data.call(this);
            data.isNotEmpty = true;
            return data;
        },

        setupOptions: function () {
            Dep.prototype.setupOptions.call(this);

            var flowchartDataList = this.model.flowchartDataList;
            var id = this.model.get('id');

            this.translatedOptions = {};

            var flowIdList = [];
            flowchartDataList.forEach(function (item) {
                if (item.type !== 'flow') return;

                if (item.startId === id && item.endId) {
                    var endItem = this.getElementData(item.endId);
                    if (!endItem) return;
                    flowIdList.push(item.id);
                    this.translatedOptions[item.id] = this.translate(endItem.type, 'elements', 'BpmnFlowchart') + ': ' + (endItem.text || endItem.id);
                }
            }, this);
            this.translatedOptions[''] = this.translate('None');
            this.params.options = flowIdList;
            this.params.options.unshift('');
        },

        getValueForDisplay: function () {
            var value = Dep.prototype.getValueForDisplay.call(this);
            if (!value) {
                value = '';
            }
            return value;
        },

        getElementData: function (id) {
            for (var i in this.model.flowchartDataList) {
                if (this.model.flowchartDataList[i].id === id) {
                    return this.model.flowchartDataList[i];
                }
            }
            return null;
        },

        fetch: function () {
            var data = Dep.prototype.fetch.call(this);
            if (data[this.name] === '') {
                data[this.name] = null;
            }
            return data;
        }
    });

});