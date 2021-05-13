<?php

return [
    'attenshun' => [
        'name'          => "Attenshun",
        'icon'          => "fas fa fa-exclamation",
        'route_segment' => 'attenshun',
        'permission'    => 'attenshun.webhooks.view',
        'entries' => [
            'webhooks' => [
                'name'          => 'Webhooks',
                'icon'          => 'fa fas fa-link',
                'route'         => 'attenshun.webhooks.index',
                'permission'    => 'attenshun.webhooks.view',
            ]
        ]
    ]
];