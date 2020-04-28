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
    
    return 'Reminder about '.LCRun3::raw($cx, ((isset($in['entityTypeLowerFirst']) && is_array($in)) ? $in['entityTypeLowerFirst'] : null)).' \''.LCRun3::raw($cx, ((isset($in['name']) && is_array($in)) ? $in['name'] : null)).'\'';
}
?>