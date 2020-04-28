{{#if loadFontAwesome}}
<link href="{{basePath}}client/css/font-awesome.min.css" rel="stylesheet">
{{/if}}
<link href="{{basePath}}client/modules/advanced/css/bpmn.css" rel="stylesheet">

<div class="flowchart-group-container">
    <div class="button-container">
        <div class="btn-group">
            <button type="button" class="btn btn-default action" data-action="resetState" title="{{translate 'Hand tool' scope='BpmnFlowchart'}}"><span class="bpmn-icon-hand"></span></button>
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle add-event-element" data-toggle="dropdown" title="{{translate 'Create Event tool' scope='BpmnFlowchart'}}"><span class="bpmn-icon-event"></span> <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    {{#each elementEventList}}
                    {{#ifEqual this '_divider'}}
                    <li class="divider"></li>
                    {{else}}
                    <li><a class="action" href="javascript:" data-name="{{./this}}" data-action="setStateCreateFigure"><span class="fas fa-check pull-right{{#ifNotEqual ../currentElement this}} hidden{{/ifNotEqual}}"></span><div style="padding-right: 20px;">{{translate this category='elements' scope='BpmnFlowchart'}}</div></a></li>
                    {{/ifEqual}}
                    {{/each}}
                </ul>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle add-gateway-element" data-toggle="dropdown" title="{{translate 'Create Gateway tool' scope='BpmnFlowchart'}}"><span class="bpmn-icon-gateway"></span> <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    {{#each elementGatewayList}}
                    <li><a class="action" href="javascript:" data-name="{{./this}}" data-action="setStateCreateFigure"><span class="fas fa-check pull-right{{#ifNotEqual ../currentElement this}} hidden{{/ifNotEqual}}"></span><div style="padding-right: 20px;">{{translate this category='elements' scope='BpmnFlowchart'}}</div></a></li>
                    {{/each}}
                </ul>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle add-task-element" data-toggle="dropdown" title="{{translate 'Create Activity tool' scope='BpmnFlowchart'}}"><span class="bpmn-icon-task"></span> <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    {{#each elementTaskList}}
                    <li><a class="action" href="javascript:" data-name="{{./this}}" data-action="setStateCreateFigure"><span class="fas fa-check pull-right{{#ifNotEqual ../currentElement this}} hidden{{/ifNotEqual}}"></span><div style="padding-right: 20px;">{{translate this category='elements' scope='BpmnFlowchart'}}</div></a></li>
                    {{/each}}
                </ul>
            </div>
            <button type="button" class="btn btn-default action" data-action="setStateCreateFlow" title="{{translate 'Connect tool' scope='BpmnFlowchart'}}"><i class="fa fa-long-arrow-alt-right fa-long-arrow-right"></i></button>
            <button type="button" class="btn btn-default action" data-action="setStateRemove" title="{{translate 'Erase tool' scope='BpmnFlowchart'}}"><i class="fa fa-eraser"></i></button>
        </div>

        <button type="button" class="btn btn-default action hidden" data-action="apply" title="{{translate 'Apply'}}"><i class="fa fa-save"></i></button>

        <div class="btn-group pull-right">
            <button type="button" class="btn btn-default action" data-action="switchFullScreenMode" title="{{translate 'Full Screen' scope='BpmnFlowchart'}}"><i class="fa fa-arrows-alt"></i></button>
        </div>
    </div>

    <div class="flowchart-container" style="width: 100%; height: {{heightString}};"></div>
</div>