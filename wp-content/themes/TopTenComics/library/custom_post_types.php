<?php

function comics_post_types(){
// --> Comics
         $labels_comics_post_type_array = array(
             'name'                  =>  __('Comics', 'munterlinden'),
             'singular_name'         =>  __('Comics', 'munterlinden'),
             'add_new'               =>  __('Ajouter un comics', 'munterlinden'),
             'add_new_item'          =>  __('Ajouter un comics', 'munterlinden'),
             'edit_item'             =>  __('Editer le comics', 'munterlinden'),
             'new_item'              =>  __('Nouveau comics', 'munterlinden'),
             'view_item'             =>  __('Visualiser le comics', 'munterlinden'),
             'search_items'          =>  __('Rechercher un comics', 'munterlinden'),
             'not_found'             =>  __('Aucun comics', 'munterlinden'),
             'not_found_in_trash'    =>  __('Aucun comics dans la corbeille', 'munterlinden'),
             'parent_item_colon'     =>  __('--', 'munterlinden'),
             'menu_name'             =>  __('Comics', 'munterlinden')
         );
         $supports_comics_post_type_array = array(
             'title',
             'editor',
             'thumbnail',
             'excerpt'
         );
         $rewrite_comics_post_type_array = array(
             'slug'          =>  _x('comic-book', 'Pour les collections', 'foundationpress'),
             'with_front'    =>  false,
             'feeds'         =>  true,
             'pages'         =>  true
         );
         $args_comics_post_type_array = array(
             'labels'                =>  $labels_comics_post_type_array,
             'description'           =>  __('Contenu complet Projets', 'munterlinden'),
             'public'                =>  true,
             'publicly_queryable'    =>  true,
             'menu_position'         =>  50,
             'menu_icon'             =>  'dashicons-book',
             'capability_type'       =>  'post',
             'supports'              =>  $supports_comics_post_type_array,
             'rewrite'               =>  $rewrite_comics_post_type_array,
             'show_in_nav_menus'     =>  true,
             'hierarchical'          =>  true,
             'has_archive'           =>  true
         );
         register_post_type('comics', $args_comics_post_type_array);
}
add_action('init','comics_post_types',1);

?>
