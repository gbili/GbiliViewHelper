<?php
namespace GbiliViewHelper;

return array(
    'view_helpers'       => include __DIR__ . '/view_helpers.config.php',
    'gbili_symlink_module' => array(
        'symlinks' => array(
            'gbili_view_helper_topnav_phtml' => __DIR__ . '/../view/partial/topnav.phtml',
            'gbili_webfont_js_phtml' => __DIR__ . '/../view/partial/webfont.js.phtml',
        ),
    ),
);
