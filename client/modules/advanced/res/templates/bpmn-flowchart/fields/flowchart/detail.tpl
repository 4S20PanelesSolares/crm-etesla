{{#if loadFontAwesome}}
<link href="{{basePath}}client/css/font-awesome.min.css" rel="stylesheet">
{{/if}}

<div class="flowchart-group-container">
    <div class="button-container clearfix">
        <div class="btn-group pull-right">
            <button type="button" class="btn btn-default action" data-action="switchFullScreenMode" title="{{translate 'Full Screen' scope='BpmnFlowchart'}}"><i class="fa fa-arrows-alt"></i></button>
        </div>
    </div>
    <div class="flowchart-container" style="width: 100%; height: {{heightString}};"></div>
</div>