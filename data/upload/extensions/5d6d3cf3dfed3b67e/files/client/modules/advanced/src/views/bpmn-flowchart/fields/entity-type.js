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

Espo.define('advanced:views/bpmn-flowchart/fields/entity-type', 'views/fields/enum', function (Dep) {

    return Dep.extend({

        setupOptions: function () {
            var scopes = this.getMetadata().get('scopes');
            var entityListToIgnore1 = this.getMetadata().get(['entityDefs', 'Workflow', 'entityListToIgnore']) || [];
            var entityListToIgnore2 = this.getMetadata().get(['entityDefs', 'BpmnFlowchart', 'targetTypeListToIgnore']) || [];
            this.params.options = Object.keys(scopes).filter(function (scope) {
                if (~entityListToIgnore1.indexOf(scope)) return;
                if (~entityListToIgnore2.indexOf(scope)) return;
                var defs = scopes[scope];
                return (defs.entity && (defs.object));
            }).sort(function (v1, v2) {
                return this.translate(v1, 'scopeNamesPlural').localeCompare(this.translate(v2, 'scopeNamesPlural'));
            }.bind(this));

            this.params.options.unshift('');

            this.params.translation = 'Global.scopeNames';
        }

    });

});