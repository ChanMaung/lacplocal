<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1612309935,
    'checksum' => '2c629954b4f837b10dc48312fe8ea1e7',
    'files' => [
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
                'color-1' => '#439a86',
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
                'background' => '#ffffff',
                'text-color' => '#0d0d0d'
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
                'text-color' => '#4c4c4c'
            ],
            'subfeature' => [
                'background' => '#f0f0f0',
                'text-color' => '#ffffff'
            ],
            'preset' => 'preset1'
        ],
        'index' => [
            'name' => 'default',
            'timestamp' => 1612309886,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1602462450
            ],
            'positions' => [
                
            ],
            'sections' => [
                'header' => 'Header',
                'navigation' => 'Navigation',
                'main' => 'Main',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'spacer' => [
                    'spacer-8928' => 'Spacer',
                    'spacer-4014' => 'Spacer'
                ],
                'menu' => [
                    'menu-9715' => 'Menu',
                    'menu-1653' => 'Menu'
                ],
                'logo' => [
                    'logo-5008' => 'Logo / Image',
                    'logo-8019' => 'Logo / Image'
                ],
                'content' => [
                    'system-content-4739' => 'Page Content'
                ],
                'custom' => [
                    'custom-7037' => 'Custom HTML',
                    'custom-7583' => 'Custom HTML',
                    'custom-8770' => 'Custom HTML',
                    'custom-9923' => 'Custom HTML',
                    'custom-2633' => 'Custom HTML'
                ],
                'copyright' => [
                    'copyright-2500' => 'Copyright'
                ],
                'totop' => [
                    'totop-9413' => 'To Top'
                ],
                'mobile-menu' => [
                    'mobile-menu-8331' => 'Mobile Menu',
                    'mobile-menu-3877' => 'Mobile-menu'
                ]
            ],
            'inherit' => [
                
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1602462450
            ],
            'layout' => [
                '/header/' => [
                    0 => [
                        0 => 'spacer-8928 70',
                        1 => 'menu-9715 30'
                    ],
                    1 => [
                        0 => 'logo-5008'
                    ],
                    2 => [
                        0 => 'menu-1653'
                    ]
                ],
                '/navigation/' => [
                    
                ],
                '/main/' => [
                    0 => [
                        0 => 'system-content-4739'
                    ]
                ],
                '/footer/' => [
                    0 => [
                        0 => 'logo-8019 33.3',
                        1 => 'custom-7037 33.3',
                        2 => 'custom-7583 33.3'
                    ],
                    1 => [
                        0 => 'custom-8770 33.3',
                        1 => 'custom-9923 33.3',
                        2 => 'custom-2633 33.3'
                    ],
                    2 => [
                        0 => 'copyright-2500 25',
                        1 => 'spacer-4014 48',
                        2 => 'totop-9413 27'
                    ]
                ],
                'offcanvas' => [
                    0 => [
                        0 => 'mobile-menu-8331 50',
                        1 => 'mobile-menu-3877 50'
                    ]
                ]
            ],
            'structure' => [
                'header' => [
                    'attributes' => [
                        'boxed' => '',
                        'class' => '',
                        'variations' => ''
                    ]
                ],
                'navigation' => [
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
                'footer' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'offcanvas' => [
                    'attributes' => [
                        'position' => 'g-offcanvas-left',
                        'class' => '',
                        'extra' => [
                            
                        ],
                        'swipe' => '1',
                        'css3animation' => '1'
                    ]
                ]
            ],
            'content' => [
                'spacer-8928' => [
                    'block' => [
                        'variations' => 'nomarginall nopaddingall'
                    ]
                ],
                'menu-9715' => [
                    'attributes' => [
                        'menu' => 'topbar'
                    ],
                    'block' => [
                        'variations' => 'nomarginall nopaddingall'
                    ]
                ],
                'logo-5008' => [
                    'title' => 'Logo / Image',
                    'attributes' => [
                        'url' => 'http://lapct2.local/',
                        'target' => '_self',
                        'image' => 'gantry-media://lacp.logotrans.png'
                    ],
                    'block' => [
                        'variations' => 'center full-width nomarginall nopaddingall'
                    ]
                ],
                'menu-1653' => [
                    'attributes' => [
                        'menu' => 'menu'
                    ],
                    'block' => [
                        'variations' => 'center full-width nomarginall nopaddingall'
                    ]
                ],
                'logo-8019' => [
                    'title' => 'Logo / Image',
                    'attributes' => [
                        'image' => 'gantry-media://lacp.logotrans.png',
                        'text' => 'LACP'
                    ]
                ],
                'custom-7037' => [
                    'title' => 'Custom HTML',
                    'attributes' => [
                        'html' => '<h2>HOURS OF OPERATION</h2>'
                    ]
                ],
                'custom-7583' => [
                    'title' => 'Custom HTML'
                ],
                'custom-8770' => [
                    'title' => 'Custom HTML',
                    'attributes' => [
                        'html' => '<p>5566 W. Washington Blvd.<br />Los Angeles, CA 90016<br />Phone: 323-464-0909<br />Fax: 323-433-4106<br />Email:&nbsp;<a href="mailto:info@lacphoto.org" >info@lacphoto.org</a></p>
<p><a href="https://lacphoto.org/about-us/history-mission-statement/"  style="color: #f1f1f1" target="_blank" rel="noopener noreferrer">OUR MISSION</a></p>
<p><a href="https://lacphoto.org/about-us/staff/" style="color: #f1f1f1" target="_blank" rel="noopener noreferrer">OUR STAFF</a></p>
<p><a href="https://lacphoto.org/about-us/board-officers-advisors/" style="color: #f1f1f1" target="_blank" rel="noopener noreferrer">OUR BOARD</a></p>
<p>&nbsp;</p>'
                    ]
                ],
                'custom-9923' => [
                    'title' => 'Custom HTML',
                    'attributes' => [
                        'html' => '<p>&nbsp;By phone only - 323.464.0909.<br />Monday, 10 am - 4 pm PST<br />Tuesday, 10 am - 4 pm PST<br />Wednesday, 10 am - 4 pm PST<br />Thursday, 10 am - 4 pm PST<br />Friday, 10 am - 4 pm PST<br />Saturday, 8 am - 12 pm PST<br />Sunday, 8 am - 12 pm PST</p>
'
                    ]
                ],
                'custom-2633' => [
                    'title' => 'Custom HTML'
                ],
                'totop-9413' => [
                    'title' => 'To Top',
                    'attributes' => [
                        'css' => [
                            'class' => 'totop'
                        ],
                        'content' => '',
                        'title' => ''
                    ]
                ],
                'mobile-menu-8331' => [
                    'title' => 'Mobile Menu'
                ]
            ]
        ]
    ]
];
