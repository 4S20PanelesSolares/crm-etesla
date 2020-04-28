<?php return function ($in, $debugopt = 1) {
    $cx = array(
        'flags' => array(
            'jstrue' => true,
            'jsobj' => true,
            'spvar' => true,
            'prop' => false,
            'method' => false,
            'mustlok' => false,
            'echo' => false,
            'debug' => $debugopt,
        ),
        'constants' => array(),
        'helpers' => array(),
        'blockhelpers' => array(),
        'hbhelpers' => array(),
        'partials' => array(),
        'scopes' => array(),
        'sp_vars' => array('root' => $in),
        'lcrun' => 'LCRun3',

    );
    
    return '<p>Subject: '.LCRun3::encq($cx, ((isset($in['name']) && is_array($in)) ? $in['name'] : null)).'</p>
<p>Start: '.((LCRun3::ifvar($cx, ((isset($in['isAllDay']) && is_array($in)) ? $in['isAllDay'] : null))) ? ''.LCRun3::encq($cx, ((isset($in['dateStartDate']) && is_array($in)) ? $in['dateStartDate'] : null)).'' : ''.LCRun3::encq($cx, ((isset($in['dateStart']) && is_array($in)) ? $in['dateStart'] : null)).'').'</p>

<p><a href="'.LCRun3::encq($cx, ((isset($in['recordUrl']) && is_array($in)) ? $in['recordUrl'] : null)).'">View record</a></p>
';
}
?>