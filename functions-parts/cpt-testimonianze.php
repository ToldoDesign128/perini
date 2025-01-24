<?php
/*Replace = testimonianze*/

function testimonianze()
{
    register_post_type(
        'testimonianze',
        array(
            'labels'                => array(
                'name'              => 'Testimonianze',
                'singular_name'     => 'Testimonianza',
                'all_items'         => 'Tutte le Testimonianze',
                'add_new'           => 'Aggiungi una nuova Testimonianza',
                'add_new_item'      => 'Aggiungi una nuova Testimonianza',
                'edit_item'         => 'Modifica Testimonianza',
                'new_item'          => 'Nuovo Testimonianza',
                'view_item'         => 'Visualizza Testimonianza',
                'search_items'      => 'Cerca',
                'not_found'         => 'Nessun elemento trovato',
                'not_found_in_trash'=> 'Nessun elemento nel cestino',
                'parent_item_colon' => '',
            ),
            'description'           => 'testimonianze',
            'public'                => true,
            'publicly_queryable'    => true,
            'exclude_from_search'   => false,
            'show_ui'               => true,
            'query_var'             => true,
            'menu_position'         => 20,
            'menu_icon'             => 'dashicons-plus-alt',
            'rewrite'               => array(
                'slug'              => 'testimonianze',
                'with-front'        => false,
            ),
            'has_archive'           => false,
            'capability_type'       => 'post',
            'hierarchical'          => false,
            'show_in_rest'          => false, // Gutemberg disattivato
            'supports'              => array('title', 'thumbnail') // Aggiungi 'editor' se necessario
        )
    );
}
add_action('init', 'testimonianze');