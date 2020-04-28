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

Espo.define('advanced:views/bpmn-flow-node/fields/element', 'views/fields/varchar', function (Dep) {

    return Dep.extend({

        listTemplate: 'advanced:bpmn-flow-node/fields/element/detail',

        getValueForDisplay: function () {
            var stringValue = this.translate(this.model.get('elementType'), 'elements', 'BpmnFlowchart');

            var text = (this.model.get('elementData') || {}).text;
            if (text) {
                stringValue += ': ' + text + '';
            }

            if (this.model.get('elementType') === 'taskUser' && this.model.get('userTaskId')) {
                stringValue = '<a href="#BpmnUserTask/view/'+this.model.get('userTaskId')+'">' + stringValue + '</a>';
            }

            return stringValue;
        }

    });
});