<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'term_meta', __( 'Category Properties' ) )
         ->where( 'term_taxonomy', '=', 'category' )
         ->add_fields( array(
             Field::make( 'image', 'cat_thumb', __( 'Category Thumbnail' ) ),
         ) );
