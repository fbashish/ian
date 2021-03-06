<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/quinnalison/Sites/infantaquatics/user/themes/bootstrap/blueprints.yaml',
    'modified' => 1467743878,
    'data' => [
        'name' => 'Infant Aquatics',
        'version' => '1.4.1',
        'description' => 'Infant Aquatics is built using the popular **Bootstrap** Framework',
        'icon' => 'bold',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-theme-bootstrap',
        'demo' => 'http://demo.getgrav.org/bootstrap-skeleton/',
        'keywords' => 'bootstrap, theme, framework',
        'bugs' => 'https://github.com/getgrav/grav-theme-bootstrap/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => 'bootstrapper'
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
