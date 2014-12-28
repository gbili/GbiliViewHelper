<?php
namespace GbiliViewHelper;

return array(
    //'navigation'         => include __DIR__ . '/navigation.config.php',
    //'service_manager'    => include __DIR__ . '/service_manager.config.php',
    'view_helpers'       => include __DIR__ . '/view_helpers.config.php',
    'gbili_symlink_module' => array(
        'gbili_view_helper_topnav_phtml' => __DIR__ . '/../view/partial/topnav.phtml',
    ),
);
