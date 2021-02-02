<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1612309925,
    'checksum' => '06bff42d67c3c4611993557fd5003502',
    'files' => [
        'wp-content/themes/g5_hydrogen/custom/config/home' => [
            'assignments' => [
                'file' => 'wp-content/themes/g5_hydrogen/custom/config/home/assignments.yaml',
                'modified' => 1612309886
            ],
            'index' => [
                'file' => 'wp-content/themes/g5_hydrogen/custom/config/home/index.yaml',
                'modified' => 1612309922
            ],
            'layout' => [
                'file' => 'wp-content/themes/g5_hydrogen/custom/config/home/layout.yaml',
                'modified' => 1612309886
            ],
            'styles' => [
                'file' => 'wp-content/themes/g5_hydrogen/custom/config/home/styles.yaml',
                'modified' => 1612309886
            ]
        ],
        'wp-content/themes/g5_hydrogen/custom/config/default' => [
            'index' => [
                'file' => 'wp-content/themes/g5_hydrogen/custom/config/default/index.yaml',
                'modified' => 1612309922
            ],
            'layout' => [
                'file' => 'wp-content/themes/g5_hydrogen/custom/config/default/layout.yaml',
                'modified' => 1612309886
            ],
            'page/assets' => [
                'file' => 'wp-content/themes/g5_hydrogen/custom/config/default/page/assets.yaml',
                'modified' => 1612309886
            ],
            'page/body' => [
                'file' => 'wp-content/themes/g5_hydrogen/custom/config/default/page/body.yaml',
                'modified' => 1612309886
            ],
            'page/fontawesome' => [
                'file' => 'wp-content/themes/g5_hydrogen/custom/config/default/page/fontawesome.yaml',
                'modified' => 1612309886
            ],
            'page/head' => [
                'file' => 'wp-content/themes/g5_hydrogen/custom/config/default/page/head.yaml',
                'modified' => 1612309886
            ],
            'styles' => [
                'file' => 'wp-content/themes/g5_hydrogen/custom/config/default/styles.yaml',
                'modified' => 1612309886
            ]
        ],
        'wp-content/themes/g5_hydrogen/config/default' => [
            'particles/logo' => [
                'file' => 'wp-content/themes/g5_hydrogen/config/default/particles/logo.yaml',
                'modified' => 1612309886
            ]
        ]
    ],
    'data' => [
        'particles' => [
            'onepage-menu' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'stickyoffset' => 130,
                'smoothscrolloffset' => 120,
                'boundary' => '#g-footer'
            ],
            'sample' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'branding' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'content' => 'Powered by <a href="http://www.gantry.org/" title="Gantry Framework" class="g-powered-by">Gantry Framework</a>',
                'css' => [
                    'class' => 'branding'
                ]
            ],
            'copyright' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'date' => [
                    'start' => 'now',
                    'end' => 'now'
                ]
            ],
            'custom' => [
                'caching' => [
                    'type' => 'config_matches',
                    'values' => [
                        'twig' => '0',
                        'filter' => '0'
                    ]
                ],
                'enabled' => true,
                'twig' => '0',
                'filter' => '0'
            ],
            'logo' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'target' => '_self',
                'link' => true,
                'url' => '',
                'image' => 'gantry-assets://images/gantry5-logo.png',
                'text' => 'Gantry 5',
                'class' => 'gantry-logo'
            ],
            'mobile-menu' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'social' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'css' => [
                    'class' => 'social'
                ],
                'target' => '',
                'display' => 'both'
            ],
            'spacer' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'totop' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'css' => [
                    'class' => 'totop'
                ]
            ],
            'uikit' => [
                'enabled' => true,
                'jslocation' => 'footer'
            ],
            'analytics' => [
                'enabled' => true,
                'ua' => [
                    'anonym' => false
                ]
            ],
            'assets' => [
                'enabled' => true
            ],
            'content' => [
                'enabled' => true
            ],
            'contentarray' => [
                'enabled' => true,
                'post' => [
                    'filter' => [
                        'sticky' => ''
                    ],
                    'limit' => [
                        'total' => 2,
                        'columns' => 2,
                        'start' => 0
                    ],
                    'display' => [
                        'pagination_buttons' => '',
                        'image' => [
                            'enabled' => 'show'
                        ],
                        'title' => [
                            'enabled' => 'show'
                        ],
                        'date' => [
                            'enabled' => 'published',
                            'format' => 'l, F d, Y'
                        ],
                        'read_more' => [
                            'enabled' => 'show'
                        ],
                        'author' => [
                            'enabled' => 'show'
                        ],
                        'category' => [
                            'enabled' => 'link'
                        ],
                        'comments' => [
                            'enabled' => 'show'
                        ],
                        'text' => [
                            'type' => 'content',
                            'limit' => '',
                            'formatting' => 'text'
                        ]
                    ],
                    'sort' => [
                        'orderby' => 'date',
                        'ordering' => 'DESC'
                    ]
                ]
            ],
            'date' => [
                'enabled' => true,
                'css' => [
                    'class' => 'date'
                ],
                'date' => [
                    'formats' => 'l, F d, Y'
                ]
            ],
            'frameworks' => [
                'enabled' => true,
                'jquery' => [
                    'enabled' => 0,
                    'ui_core' => 0,
                    'ui_sortable' => 0
                ],
                'bootstrap2' => [
                    'enabled' => 0
                ],
                'bootstrap3' => [
                    'enabled' => 0
                ],
                'mootools' => [
                    'enabled' => 0,
                    'more' => 0
                ]
            ],
            'lightcase' => [
                'enabled' => true
            ],
            'loginform' => [
                'enabled' => true,
                'title' => 'Login',
                'greeting' => 'Hi, %s'
            ],
            'menu' => [
                'enabled' => true,
                'menu' => '',
                'base' => '/',
                'startLevel' => 1,
                'maxLevels' => 0,
                'renderTitles' => 0,
                'hoverExpand' => 1,
                'mobileTarget' => 0,
                'forceTarget' => 0
            ],
            'messages' => [
                'enabled' => true
            ],
            'position' => [
                'enabled' => true
            ],
            'widget' => [
                'enabled' => true
            ]
        ],
        'content' => [
            'archive' => [
                'content' => [
                    'enabled' => 1,
                    'type' => 'content',
                    'gexcerpt-length' => 50,
                    'columns' => 'size-100'
                ],
                'featured-image' => [
                    'enabled' => 1,
                    'width' => 1200,
                    'height' => 350,
                    'position' => 'none'
                ],
                'heading' => [
                    'enabled' => 1
                ],
                'meta-author' => [
                    'enabled' => 1,
                    'link' => 1
                ],
                'meta-categories' => [
                    'enabled' => 1,
                    'link' => 1,
                    'prefix' => 'Categories:'
                ],
                'meta-comments' => [
                    'enabled' => 1,
                    'link' => 0
                ],
                'meta-date' => [
                    'enabled' => 1,
                    'link' => 1,
                    'format' => 'j F Y'
                ],
                'meta-tags' => [
                    'enabled' => 0,
                    'link' => 1,
                    'prefix' => 'Tags:'
                ],
                'read-more' => [
                    'label' => 'Read More',
                    'mode' => 'auto'
                ],
                'title' => [
                    'enabled' => 1,
                    'link' => 0
                ]
            ],
            'blog' => [
                'content' => [
                    'enabled' => 1,
                    'type' => 'content',
                    'gexcerpt-length' => 50,
                    'columns' => 'size-100'
                ],
                'featured-image' => [
                    'enabled' => 1,
                    'width' => 1200,
                    'height' => 350,
                    'position' => 'none'
                ],
                'heading' => [
                    'enabled' => 0
                ],
                'meta-author' => [
                    'enabled' => 1,
                    'link' => 1
                ],
                'meta-categories' => [
                    'enabled' => 1,
                    'link' => 1,
                    'prefix' => 'Categories:'
                ],
                'meta-comments' => [
                    'enabled' => 1,
                    'link' => 0
                ],
                'meta-date' => [
                    'enabled' => 1,
                    'link' => 1,
                    'format' => 'j F Y'
                ],
                'meta-tags' => [
                    'enabled' => 0,
                    'link' => 1,
                    'prefix' => 'Tags:'
                ],
                'read-more' => [
                    'label' => 'Read More',
                    'mode' => 'auto'
                ],
                'title' => [
                    'enabled' => 1,
                    'link' => 0
                ]
            ],
            'general' => [
                'wpautop' => [
                    'enabled' => 1
                ]
            ],
            'page' => [
                'featured-image' => [
                    'enabled' => 1,
                    'width' => 1200,
                    'height' => 350,
                    'position' => 'none'
                ],
                'meta-author' => [
                    'enabled' => 0,
                    'link' => 1
                ],
                'meta-date' => [
                    'enabled' => 0,
                    'link' => 1,
                    'format' => 'j F Y'
                ],
                'title' => [
                    'enabled' => 1,
                    'link' => 0
                ]
            ],
            'single' => [
                'featured-image' => [
                    'enabled' => 1,
                    'width' => 1200,
                    'height' => 350,
                    'position' => 'none'
                ],
                'meta-author' => [
                    'enabled' => 1,
                    'link' => 1
                ],
                'meta-categories' => [
                    'enabled' => 1,
                    'link' => 1,
                    'prefix' => 'Categories:'
                ],
                'meta-comments' => [
                    'enabled' => 1,
                    'link' => 0
                ],
                'meta-date' => [
                    'enabled' => 1,
                    'link' => 1,
                    'format' => 'j F Y'
                ],
                'meta-tags' => [
                    'enabled' => 0,
                    'link' => 1,
                    'prefix' => 'Tags:'
                ],
                'title' => [
                    'enabled' => 1,
                    'link' => 0
                ]
            ]
        ],
        'page' => [
            'doctype' => 'html',
            'body' => [
                'class' => 'gantry',
                'attribs' => [
                    'class' => 'gantry',
                    'id' => '',
                    'extra' => [
                        
                    ]
                ],
                'layout' => [
                    'sections' => '0'
                ],
                'body_top' => '',
                'body_bottom' => ''
            ],
            'fontawesome' => [
                'enable' => '1'
            ],
            'assets' => [
                'favicon' => '',
                'touchicon' => '',
                'css' => [
                    
                ],
                'javascript' => [
                    
                ]
            ],
            'head' => [
                'meta' => [
                    
                ],
                'head_bottom' => '',
                'atoms' => [
                    0 => [
                        'title' => 'UIkit for Gantry5',
                        'type' => 'uikit',
                        'attributes' => NULL,
                        'id' => 'uikit-8251'
                    ]
                ]
            ]
        ],
        'styles' => [
            'accent' => [
                'color-1' => '#4c4c4c',
                'color-2' => '#8f4dae'
            ],
            'base' => [
                'background' => '#ffffff',
                'text-color' => '#ffffff',
                'body-font' => 'roboto, sans-serif',
                'heading-font' => 'roboto, sans-serif'
            ],
            'breakpoints' => [
                'large-desktop-container' => '75rem',
                'desktop-container' => '60rem',
                'tablet-container' => '48rem',
                'large-mobile-container' => '30rem',
                'mobile-menu-breakpoint' => '48rem'
            ],
            'feature' => [
                'background' => '#ffffff',
                'text-color' => '#ffffff'
            ],
            'footer' => [
                'background' => '#4c4c4c',
                'text-color' => '#fcfcfc'
            ],
            'header' => [
                'background' => '#4c4c4c',
                'text-color' => '#ffffff'
            ],
            'main' => [
                'background' => '#4c4c4c',
                'text-color' => '#4c4c4c'
            ],
            'menu' => [
                'col-width' => '180px',
                'animation' => 'g-fade',
                'hide-on-mobile' => '1'
            ],
            'navigation' => [
                'background' => '#4c4c4c',
                'text-color' => '#ffffff',
                'overlay' => 'rgba(0, 0, 0, 0.4)'
            ],
            'offcanvas' => [
                'background' => '#4c4c4c',
                'text-color' => '#ffffff',
                'width' => '17rem',
                'toggle-color' => '#ffffff',
                'toggle-visibility' => '1'
            ],
            'showcase' => [
                'background' => '#4c4c4c',
                'image' => '',
                'text-color' => '#f2f2f2'
            ],
            'subfeature' => [
                'background' => '#f0f0f0',
                'text-color' => '#ffffff'
            ],
            'preset' => 'preset1'
        ],
        'index' => [
            'name' => 'home',
            'timestamp' => 1612309886,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/home.png',
                'name' => 'home',
                'timestamp' => 1602462450
            ],
            'positions' => [
                
            ],
            'sections' => [
                'header' => 'Header',
                'navigation' => 'Navigation',
                'showcase' => 'Showcase',
                'feature' => 'Feature',
                'subfeature' => 'Subfeature',
                'main' => 'Main',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'content' => [
                    'system-content-1649' => 'Page Content'
                ],
                'spacer' => [
                    'spacer-7001' => 'Spacer',
                    'spacer-8929' => 'Spacer'
                ],
                'menu' => [
                    'menu-2922' => 'Menu',
                    'menu-6934' => 'Menu'
                ],
                'logo' => [
                    'logo-6188' => 'Logo / Image',
                    'logo-7049' => 'Logo / Image'
                ],
                'custom' => [
                    'custom-3654' => 'Custom HTML',
                    'custom-8143' => 'Custom HTML',
                    'custom-1156' => 'Custom HTML',
                    'custom-4240' => 'Custom HTML',
                    'custom-1106' => 'Custom HTML'
                ],
                'copyright' => [
                    'copyright-2971' => 'Copyright'
                ],
                'totop' => [
                    'totop-3624' => 'To Top'
                ],
                'mobile-menu' => [
                    'mobile-menu-7431' => 'Mobile Menu',
                    'mobile-menu-7758' => 'Mobile-menu'
                ]
            ],
            'inherit' => [
                'default' => [
                    'header' => 'header',
                    'footer' => 'footer',
                    'offcanvas' => 'offcanvas',
                    'spacer-7001' => 'spacer-8928',
                    'menu-2922' => 'menu-9715',
                    'logo-6188' => 'logo-5008',
                    'menu-6934' => 'menu-1653',
                    'logo-7049' => 'logo-8019',
                    'custom-3654' => 'custom-7037',
                    'custom-8143' => 'custom-7583',
                    'custom-1156' => 'custom-8770',
                    'custom-4240' => 'custom-9923',
                    'custom-1106' => 'custom-2633',
                    'copyright-2971' => 'copyright-2500',
                    'spacer-8929' => 'spacer-4014',
                    'totop-3624' => 'totop-9413',
                    'mobile-menu-7431' => 'mobile-menu-8331',
                    'mobile-menu-7758' => 'mobile-menu-3877'
                ]
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/home.png',
                'name' => 'home',
                'timestamp' => 1602462450
            ],
            'layout' => [
                'header' => [
                    
                ],
                '/navigation/' => [
                    
                ],
                '/showcase/' => [
                    0 => [
                        0 => 'system-content-1649'
                    ]
                ],
                '/feature/' => [
                    
                ],
                '/main/' => [
                    
                ],
                '/subfeature/' => [
                    
                ],
                'footer' => [
                    
                ],
                'offcanvas' => [
                    
                ]
            ],
            'structure' => [
                'header' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'children',
                            1 => 'attributes'
                        ]
                    ]
                ],
                'navigation' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => '',
                        'variations' => ''
                    ]
                ],
                'showcase' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'feature' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'main' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'subfeature' => [
                    'type' => 'section',
                    'attributes' => [
                        'class' => 'flush',
                        'boxed' => ''
                    ]
                ],
                'footer' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'children'
                        ]
                    ]
                ],
                'offcanvas' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'children'
                        ]
                    ]
                ]
            ],
            'content' => [
                'system-content-1649' => [
                    'block' => [
                        'variations' => 'nomarginall nopaddingall'
                    ]
                ]
            ]
        ],
        'assignments' => [
            'context' => [
                0 => [
                    'is_front_page' => true
                ]
            ]
        ]
    ]
];
