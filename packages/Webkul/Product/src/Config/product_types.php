<?php

return [
    'simple'       => [
        'key'   => 'simple',
        'name'  => 'Simples',
        'class' => 'Webkul\Product\Type\Simple',
        'sort'  => 1,
    ],

    'configurable' => [
        'key'   => 'configurable',
        'name'  => 'Configurável',
        'class' => 'Webkul\Product\Type\Configurable',
        'sort'  => 2,
    ],

    'virtual'      => [
        'key'   => 'virtual',
        'name'  => 'Virtual',
        'class' => 'Webkul\Product\Type\Virtual',
        'sort'  => 3,
    ],

    'grouped'      => [
        'key'   => 'grouped',
        'name'  => 'Agrupados',
        'class' => 'Webkul\Product\Type\Grouped',
        'sort'  => 4,
    ],

    'downloadable' => [
        'key'   => 'downloadable',
        'name'  => 'Transferível/Download',
        'class' => 'Webkul\Product\Type\Downloadable',
        'sort'  => 5,
    ],
    
    'bundle'       => [
        'key'  => 'bundle',
        'name'  => 'Agrupado',
        'class' => 'Webkul\Product\Type\Bundle',
        'sort'  => 6,
    ]
];