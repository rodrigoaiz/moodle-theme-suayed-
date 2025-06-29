<?php
$THEME->name = 'suayed';
$THEME->sheets = [];
$THEME->editor_sheets = [];
$THEME->parents = ['boost'];
$THEME->enable_dock = false;
$THEME->yuicssmodules = array();
$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->scss = function($theme) {
    return theme_config::load_scss_from_file(__DIR__ . '/scss/custom.scss');
};
$THEME->extracsscallback = 'theme_boost_get_extra_scss';
$THEME->layouts = [
    'base' => array(
        'file' => 'default.php',
        'regions' => array(),
        'defaultregion' => '',
    ),
    'standard' => array(
        'file' => 'default.php',
        'regions' => array(),
        'defaultregion' => '',
    ),
    'course' => array(
        'file' => 'default.php',
        'regions' => array(),
        'defaultregion' => '',
    ),
];
