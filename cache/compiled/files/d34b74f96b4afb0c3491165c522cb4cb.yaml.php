<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/quinnalison/Sites/infantaquatics/user/themes/bootstrap/blueprints/instructor.yaml',
    'modified' => 1467929021,
    'data' => [
        'title' => 'Instructor',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'instructors' => [
                            'type' => 'tab',
                            'title' => 'Instructor Information',
                            'fields' => [
                                'header.company_name' => [
                                    'type' => 'text',
                                    'label' => 'Company Name',
                                    'validate' => [
                                        'required' => true,
                                        'type' => 'textarea'
                                    ]
                                ],
                                'header.phone' => [
                                    'type' => 'text',
                                    'label' => 'Phone Number',
                                    'validate' => [
                                        'required' => true,
                                        'type' => 'textarea'
                                    ]
                                ],
                                'header.email' => [
                                    'type' => 'email',
                                    'label' => 'Email Address',
                                    'validate' => [
                                        'required' => true,
                                        'type' => 'textarea'
                                    ]
                                ],
                                'header.website_url' => [
                                    'type' => 'text',
                                    'label' => 'Company website',
                                    'placeholder' => 'Complete URL',
                                    'validate' => [
                                        'required' => true,
                                        'type' => 'textarea'
                                    ]
                                ],
                                'header.area' => [
                                    'type' => 'textarea',
                                    'label' => 'Serving:',
                                    'placeholder' => 'What area\'s are you serving?',
                                    'validate' => [
                                        'required' => true,
                                        'type' => 'textarea'
                                    ]
                                ],
                                'header.pool_location' => [
                                    'type' => 'textarea',
                                    'label' => 'Pool Location',
                                    'placeholder' => 'Exactly how you would like it to appear'
                                ],
                                'header.featured_img' => [
                                    'type' => 'pagemediaselect',
                                    'label' => 'Featured Image',
                                    'accept' => [
                                        0 => 'image/*'
                                    ]
                                ],
                                'header.logo' => [
                                    'type' => 'pagemediaselect',
                                    'label' => 'Your Logo',
                                    'accept' => [
                                        0 => 'image/*'
                                    ]
                                ],
                                'header.sociallinks' => [
                                    'name' => 'sociallinks',
                                    'type' => 'list',
                                    'label' => 'Social Links',
                                    'fields' => [
                                        '.text' => [
                                            'type' => 'text',
                                            'label' => 'Text'
                                        ],
                                        '.url' => [
                                            'type' => 'text',
                                            'label' => 'URL'
                                        ],
                                        '.primary' => [
                                            'type' => 'toggle',
                                            'label' => 'Primary',
                                            'highlight' => 1,
                                            'default' => 1,
                                            'options' => [
                                                1 => 'Yes',
                                                0 => 'No'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ]
                                    ]
                                ],
                                'header.sideLinks' => [
                                    'name' => 'sidelinks',
                                    'type' => 'list',
                                    'label' => 'Additional Links',
                                    'fields' => [
                                        '.text' => [
                                            'type' => 'text',
                                            'label' => 'Text'
                                        ],
                                        '.url' => [
                                            'type' => 'text',
                                            'label' => 'URL'
                                        ],
                                        '.primary' => [
                                            'type' => 'toggle',
                                            'label' => 'Primary',
                                            'highlight' => 1,
                                            'default' => 1,
                                            'options' => [
                                                1 => 'Yes',
                                                0 => 'No'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ]
                                    ]
                                ],
                                'columns' => [
                                    'type' => 'columns',
                                    'fields' => [
                                        'column1' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.latitude' => [
                                                    'type' => 'text',
                                                    'label' => 'Latitude',
                                                    'placeholder' => NULL
                                                ]
                                            ]
                                        ],
                                        'column2' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'header.longitude' => [
                                                    'type' => 'text',
                                                    'label' => 'Longitude',
                                                    'placeholder' => NULL
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'seo' => [
                            'type' => 'tab',
                            'title' => 'SEO',
                            'fields' => [
                                'header.page_title' => [
                                    'type' => 'text',
                                    'label' => 'Page Title',
                                    'validate' => [
                                        'required' => false
                                    ]
                                ],
                                'header.page_description' => [
                                    'type' => 'textarea',
                                    'label' => 'Page Description',
                                    'validate' => [
                                        'required' => true,
                                        'type' => 'textarea'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
