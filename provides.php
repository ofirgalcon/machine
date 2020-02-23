<?php

return array(
    'detail_widgets' => [
        'machine_info_1' => ['view' => 'machine_detail_widget1'],
        'machine_info_2' => ['view' => 'machine_detail_widget2'],
        'hardware_detail' => ['view' => 'hardware_detail_widget'],
        'software_detail' => ['view' => 'software_detail_widget'],
    ],
    'listings' => array(
        'hardware' => array('view' => 'hardware_listing', 'i18n' => 'machine.hardware'),
    ),
    'widgets' => array(
      'duplicated_computernames' => array('view' => 'duplicated_computernames_widget'),
      'hardware_basemodel' => array('view' => 'hardware_basemodel_widget'),
      'hardware_model' => array('view' => 'hardware_model_widget'),
      'hardware_type' => array('view' => 'hardware_type_widget'),
      'installed_memory' => array('view' => 'installed_memory_widget'),
      'memory' => array('view' => 'memory_widget'),
      'new_clients' => array('view' => 'new_clients_widget'),
      'os' => array('view' => 'os_widget'),
      'osbuild' => array('view' => 'osbuild_widget'),
    ),
    'reports' => array(
        'hardware' => array('view' => 'hardware', 'i18n' => 'machine.hardware_report'),
    )
);
