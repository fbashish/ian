<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/quinnalison/Sites/infantaquatics/user/config/site.yaml',
    'modified' => 1467324528,
    'data' => [
        'title' => 'Infant Aquatics',
        'author' => [
            'name' => 'Quinn Gurnea',
            'email' => 'quinn@freestonedesign.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
