<?php

const PRODUCTION_URL = 'https://coaltransitions.org';

function coaltransitions_register_post_types() {
    register_post_type(
        'publications',
        [
            'labels'              => [
                'name'          => 'Publications',
                'singular_name' => 'Publication',
                'add_new'       => 'New Publication',
                'add_new_item'  => 'Add New Publication'
            ],
            'public'              => true,
            'has_archive'         => true,
            'rewrite'             => [
                'slug' => 'publications'
            ],
            'show_in_rest'        => true,
            'menu_icon'           => 'dashicons-format-aside',
            'taxonomies'          => ['post_tag'],
            'show_in_graphql'     => true,
            'graphql_single_name' => 'publication',
            'graphql_plural_name' => 'publications',
            'supports'            => [
                'title',
                'thumbnail',
                'revisions',
            ]
        ]
    );

    register_post_type(
        'strategy',
        [
            'labels'              => [
                'name'          => 'Coping Strategies',
                'singular_name' => 'Coping Strategy',
                'add_new'       => 'New Coping Strategy',
                'add_new_item'  => 'Add New Coping Strategy'
            ],
            'public'              => true,
            'has_archive'         => true,
            'rewrite'             => [
                'slug' => 'tools-resist/strategies'
            ],
            'show_in_rest'        => true,
            'menu_icon'           => 'dashicons-lightbulb',
            'taxonomies'          => ['strategy_tags', 'actor_tags'],
            'show_in_graphql'     => true,
            'graphql_single_name' => 'strategy',
            'graphql_plural_name' => 'strategies',
            'supports'            => [
                'title',
                'thumbnail',
                'revisions',
            ]
        ]
    );

    register_post_type(
        'findings',
        [
            'labels'              => [
                'name'          => 'Findings',
                'singular_name' => 'Finding',
                'add_new'       => 'New Finding',
                'add_new_item'  => 'Add New Finding'
            ],
            'public'              => true,
            'has_archive'         => true,
            'rewrite'             => [
                'slug' => 'findings'
            ],
            'show_in_rest'        => true,
            'menu_icon'           => 'dashicons-admin-comments',
            'show_in_graphql'     => true,
            'graphql_single_name' => 'finding',
            'graphql_plural_name' => 'findings',
            'supports'            => [
                'title',
                'thumbnail',
                'revisions',
            ]
        ]
    );

    register_post_type(
        'researchprojects',
        [
            'labels'              => [
                'name'          => 'Research Projects',
                'singular_name' => 'Research Project',
                'add_new'       => 'New Research Project',
                'add_new_item'  => 'Add New Research Project'
            ],
            'public'              => true,
            'has_archive'         => true,
            'rewrite'             => [
                'slug' => 'research-project'
            ],
            'show_in_rest'        => true,
            'menu_icon'           => 'dashicons-admin-site',
            'show_in_graphql'     => true,
            'graphql_single_name' => 'researchProject',
            'graphql_plural_name' => 'researchProjects',
            'supports'            => [
                'title',
                'revisions',
            ]
        ]
    );

    register_post_type(
        'researchers',
        [
            'labels'              => [
                'name'          => 'Researchers',
                'singular_name' => 'Researcher',
                'add_new'       => 'New Researcher',
                'add_new_item'  => 'Add New Researcher'
            ],
            'public'              => true,
            'has_archive'         => true,
            'rewrite'             => [
                'slug' => 'researcher'
            ],
            'show_in_rest'        => true,
            'menu_icon'           => 'dashicons-admin-users',
            'show_in_graphql'     => true,
            'graphql_single_name' => 'researcher',
            'graphql_plural_name' => 'researchers',
            'supports'            => [
                'title',
                'revisions',
            ]
        ]
    );

    register_post_type(
        'news',
        [
            'labels'              => [
                'name'          => 'News',
                'singular_name' => 'News',
                'add_new'       => 'Create News Entry',
                'add_new_item'  => 'Add News Entry'
            ],
            'public'              => true,
            'has_archive'         => true,
            'rewrite'             => [
                'slug' => 'news'
            ],
            'show_in_rest'        => true,
            'menu_icon'           => 'dashicons-format-aside',
            'taxonomies'          => ['news_tags'],
            'show_in_graphql'     => true,
            'graphql_single_name' => 'newsEntry',
            'graphql_plural_name' => 'news',
            'supports'            => [
                'title',
                'revisions',
            ]
        ]
    );

    register_taxonomy('news_tags', ['news'], [
        'hierarchical'        => false,
        'show_ui'             => true,
        'show_admin_column'   => true,
        'show_in_graphql'     => true,
        'graphql_single_name' => 'newsTag',
        'graphql_plural_name' => 'newsTags',
        'rewrite'             => ['slug' => 'tags'],
    ]);


    register_taxonomy('strategy_tags', ['strategy'], [
        'label'               => _x('Strategy keywords', 'Custom taxonomy', 'coaltransitions'),
        'labels'              => [
            'singular_name' => _x('Strategy keyword', 'Custom taxonomy', 'coaltransitions'),
            'add_new'       => _x('Add new', 'Custom taxonomy', 'coaltransitions'),
            'add_new_item'  => _x('Add new strategy keyword', 'Custom taxonomy', 'coaltransitions'),
            'edit_item'     => _x('Edit strategy keyword', 'Custom taxonomy', 'coaltransitions'),
        ],
        'hierarchical'        => true,
        'show_ui'             => true,
        'show_admin_column'   => true,
        'show_in_graphql'     => true,
        'graphql_single_name' => 'strategyTag',
        'graphql_plural_name' => 'strategyTags',
        'rewrite'             => ['slug' => 'strategy_tags'],
    ]);


    register_taxonomy('actor_tags', ['strategy'], [
        'label'               => _x('Actors', 'Custom taxonomy', 'coaltransitions'),
        'labels'              => [
            'singular_name' => _x('Actor', 'Custom taxonomy', 'coaltransitions'),
            'add_new'       => _x('Add new', 'Custom taxonomy', 'coaltransitions'),
            'add_new_item'  => _x('Add new actor', 'Custom taxonomy', 'coaltransitions'),
            'edit_item'     => _x('Edit actor', 'Custom taxonomy', 'coaltransitions'),
        ],
        'hierarchical'        => true,
        'show_ui'             => true,
        'show_admin_column'   => true,
        'show_in_graphql'     => true,
        'graphql_single_name' => 'actorTag',
        'graphql_plural_name' => 'actorTags',
        'rewrite'             => ['slug' => 'actor_tags'],
    ]);
}

function cleanup_admin() {
    remove_menu_page('edit.php');
    remove_menu_page('edit-comments.php');
}

function custom_visit_site_url(WP_Admin_Bar $wp_admin_bar) {
    // Get a reference to the view-site node to modify.
    if ($node = $wp_admin_bar->get_node('view-site')) {
        $node->meta['target'] = '_blank';
        $node->meta['rel']    = 'noopener noreferrer';
        $node->href           = PRODUCTION_URL;
        $wp_admin_bar->add_node($node);
    }

    // Site name node
    if ($node = $wp_admin_bar->get_node('site-name')) {
        $node->meta['target'] = '_blank';
        $node->meta['rel']    = 'noopener noreferrer';
        $node->href           = PRODUCTION_URL;
        $wp_admin_bar->add_node($node);
    }
}

function register_custom_nav_menus() {
    register_nav_menu('menu', 'Menu');
    register_nav_menu('footer', 'Footer');
}

function coaltransitions_remove_page_features() {
    remove_post_type_support('page', 'editor');
}

add_action('init', 'register_custom_nav_menus');
add_action('init', 'coaltransitions_register_post_types');
add_action('init', 'coaltransitions_remove_page_features');

// Legacy code, not clear where this function exists or existed
if (function_exists('trigger_netlify_deploy')) {
    add_action('save_post', 'trigger_netlify_deploy');
}

add_action('admin_menu', 'cleanup_admin');
add_action('admin_bar_menu', 'custom_visit_site_url', 80);

add_theme_support('post-thumbnails', ['page', 'publications', 'strategy']);


function register_acf_options_pages() {
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page(
            [
                'page_title'      => 'Theme General Settings',
                'menu_title'      => 'Theme Settings',
                'menu_slug'       => 'theme-general-settings',
                'capability'      => 'edit_posts',
                'redirect'        => false,
                'show_in_graphql' => true,
            ]
        );
    }
}

add_action('acf/init', 'register_acf_options_pages');
